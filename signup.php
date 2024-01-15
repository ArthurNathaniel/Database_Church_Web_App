<?php
include 'db.php';

$errorMsg = ""; // Variable to store error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Check if the username already exists
    $checkQuery = "SELECT * FROM users WHERE username='$username'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        // Username already exists, store the error message
        $errorMsg = "Error: Username already exists. Please choose a different username.";
    } else {
        // Username is unique, proceed with signup
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to login.php after successful signup
            header("Location: login.php");
            exit();
        } else {
            $errorMsg = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php' ?>
    <?php include 'cdn.php' ?>
    <title>Signup | Asawase St. Theresa's Catholic Church</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/authentication.css">
</head>

<body>
    <div class="page_all">
        <div class="page_slide">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./images/swiper_one.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/swiper_two.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="page_forms">
            <div class="page_logo"></div>
            <div class="page_title">
                <h5>Sign up | Asawase St. Theresa's Catholic Church </h5>
            </div>

            <form action="signup.php" method="post">
                <div class="page_form">
                    <label>Username:</label>
                    <input type="text" placeholder="Enter your username" name="username" required>
                </div>
                <div class="page_form">
                    <label>Password:</label>
                    <input type="password" placeholder="Enter your password" name="password" required>
                </div>

                <div class="page_form">
                    <button type="submit" name="signup" value="Sign Up">Sign Up</button>
                </div>
            </form>

            <!-- Bootstrap Modal for Error Messages -->
            <?php if (!empty($errorMsg)) { ?>
                <div class="modal" id="errorModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h6 class="modal-title">St. Theresa's Catholic Church | Asawase
                                </h6>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">
                                <?php echo $errorMsg; ?>
                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Trigger the modal using JavaScript -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#errorModal').modal('show');
                    });
                </script>
            <?php } ?>
        </div>
    </div>
</body>

</html>