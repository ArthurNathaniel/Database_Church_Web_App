<?php
// Include the database connection file
include 'db.php';

// Start the session
session_start();

// Variables to store error messages
$errorMsg = "";

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fetch user details from the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["password"];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Set the username in the session
            $_SESSION['username'] = $username;

            // Redirect to index.php after successful login
            header("Location: index.php");
            exit();
        } else {
            $errorMsg = "Invalid password!";
        }
    } else {
        $errorMsg = "User not found!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php' ?>
    <?php include 'cdn.php' ?>
    <title>Login | Asawase St. Theresa's Catholic Church</title>
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
                <h1>Welcome Back!</h1>
            </div>



            <form action="" method="post">
                <div class="page_form">
                    <label>Username:</label>
                    <input type="text" placeholder="Enter your username" name="username" required>
                </div>
                <div class="page_form">
                    <label>Password:</label>
                    <input type="password" placeholder="Enter your password" name="password" required>
                </div>
                <div class="page_form">
                    <button type="submit" name="login" value="Login">Login</button>
                </div>
            </form>

        </div>
        <!-- Bootstrap Modal for Error Messages -->
        <div class="modal" id="errorModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h6 class="modal-title">St. Theresa's Catholic Church | Asawase</h6>
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

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
    if (!empty($errorMsg)) {
        echo '<script>$(document).ready(function() { $("#errorModal").modal("show"); });</script>';
    }
    ?>
    <script src="./js/authentication.js"></script>
</body>

</html>