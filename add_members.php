<?php include 'db.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php' ?>
    <?php include 'cdn.php' ?>
    <title>Add Member | Asawase St. Theresa's Catholic Church</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/add_member.css">
</head>

<body>
    <?php include 'sidebar.php' ?>


    <section>
        <div class="all">
            <div class="title">
                <h3>Personal Information <sub></sub></h3>
            </div>

            <form action="">
                <div id="image-preview"></div>
                <div class="forms">
                    <div class="forms-grid">
                        <label for="image-input" class="lab"> Add a Profile Picture</label>
                        <input type="file" id="image-input" accept="image/*" required>
                    </div>
                </div>
                <div class="forms-grid">
                    <div class="forms">
                        <label>Surname:</label>
                        <input type="text" placeholder="Enter your surname" name="surname" required>
                    </div>
                    <div class="forms">
                        <label>Other Name:</label>
                        <input type="text" placeholder="Enter your other name" name="othername">
                    </div>
                    <div class="forms">
                        <label>First name:</label>
                        <input type="text" placeholder="Enter your first name" name="firstname" required>
                    </div>
                    <div class="forms">
                        <label>House Address:</label>
                        <input type="text" placeholder="Enter your house address" name="houseaddress" required>
                    </div>
                    <div class="forms">
                        <label>Digital Address:</label>
                        <input type="text" placeholder="Enter your digital address" name="digitaladdress" required>
                    </div>
                    <div class="forms">
                        <label>Contact Number:</label>
                        <input type="text" placeholder="Enter your contact number" name="contactaddress" required>
                    </div>
                    <div class="forms">
                        <label>Emergency Number:</label>
                        <input type="text" placeholder="Enter your emergency number" name="emergencyaddress" required>
                    </div>
                    <div class="forms">
                        <label>Hometown:</label>
                        <input type="text" placeholder="Enter your hometown" name="hometown" required>
                    </div>
                    <div class="forms">
                        <label>Date of Birth:</label>
                        <input type="text" placeholder="Enter your date of birth" name="dateofbirth" required>
                    </div>
                    <div class="forms">
                        <label>Gender:</label>
                        <select name="gender" id="gender" title="gender" required>
                            <option value="" selected="" hidden=""> Select Gender</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                    </div>
                    <div class="forms">
                        <label>Nationality:</label>
                        <select id="nationality" required>
                            <option value="" selected="" hidden=""> Select Nationality</option>
                        </select>
                    </div>
                    <div class="forms">
                        <label>Martial Status:</label>
                        <select name="martialstatus" id="martialstatus" title="martialstatus" required>
                            <option value="" selected="" hidden="">Select Martial Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>
                    <div class="forms">
                        <label>Name of Spouse:</label>
                        <input type="text" placeholder="Enter your name of spouse" name="nameofspouse">
                    </div>
                    <div class="forms">
                        <label>Number of Children:</label>
                        <input type="text" placeholder="Enter your number of children" name="numberofchildren" required>
                    </div>
                    <div class="forms">
                        <label>Name of Children:</label>
                        <input type="text" placeholder="Enter your name of children" name="nameofchildren" required>
                    </div>
                    <div class="forms">
                        <label>Name of your Mother:</label>
                        <input type="text" placeholder="Enter your name of your mother" name="nameyourmother" required>
                    </div>
                    <div class="forms">
                        <label>Mother's Denomination:</label>
                        <input type="text" placeholder="Enter your mother's denomination" name="mothersdenomination" required>
                    </div>
                    <div class="forms">
                        <label>Name of your Father:</label>
                        <input type="text" placeholder="Enter your name of your father" name="nameyourfather" required>
                    </div>
                    <div class="forms">
                        <label>Father's Denomination:</label>
                        <input type="text" placeholder="Enter your father's denomination" name="fathersdenomination" required>
                    </div>
                </div>


        </div>
    </section>
    <section>
        <div class="all">
            <div class="title">
                <h3>Occupation Information <sub></sub></h3>
            </div>
            <div class="forms-grid">
                <div class="forms">
                    <label>Place of Employment:</label>
                    <input type="text" placeholder="Enter your place of employment" name="placeofemployment" required>
                </div>
                <div class="forms">
                    <label>Position:</label>
                    <input type="text" placeholder="Enter your position" name="position" required>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="all">
            <div class="title">
                <h3>Educational Background <sub></sub></h3>
            </div>
            <div class="forms-grid">
                <div class="forms">
                    <label for="education-level">Education Level:</label>
                    <select id="education-level" required>
                        <option value="" selected="" hidden="">Select your Level of Education</option>
                        <option value="preschool">Pre-School</option>
                        <option value="primary">Primary</option>
                        <option value="jhs">Junior High School (JHS)</option>
                        <option value="shs">Senior High School (SHS)</option>
                        <option value="tertiary">Tertiary</option>
                        <option value="no-formal-education">No Formal Education</option>
                    </select>
                </div>
                <div class="forms">
                    <label>Name of your Last / Current School:</label>
                    <input type="text" placeholder="Enter your your last / current school" name="nameofyourschoool" required>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="all">

            <div class="title">
                <h3>Baptism Information
                    <sub></sub>
                </h3>
            </div>

            <div class="forms-grid">
                <div class="forms">
                    <label for="baptized">Baptized:</label>
                    <select id="baptized" required>
                        <option value="" selected="" hidden="">Select your Status</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="forms">
                    <label>Place of Baptism:</label>
                    <input type="text" placeholder="Enter your place of baptism" name="placeofbaptism" required>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="all">

            <div class="title">
                <h3>Confirmation Information
                    <sub></sub>
                </h3>
            </div>

            <div class="forms-grid">
                <div class="forms">
                    <label for="confirmed">Confirmed:</label>
                    <select id="confirmed" required>
                        <option value="" selected="" hidden="">Select your Status</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="forms">
                    <label>Place of Confirmation:</label>
                    <input type="text" placeholder="Enter your place of confirmation" name="placeofconfirmation" required>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="all">
            <div class="title">
                <h3>Additional Information<sub></sub></h3>
            </div>
            <div class="forms-grid">
                <div class="forms">
                    <label>Select the Societies you join:</label>
                    <select name="selected-societies" class="js-example-basic-multiple" multiple="multiple" required>
                        <option value="Sacred Heart of Confraternity">Sacred Heart of Confraternity</option>
                        <option value="Youth Choir">Youth Choir</option>
                        <option value="Legion of Mary">Legion of Mary</option>
                        <option value="Charismatic">Charismatic</option>
                        <option value="St Theresa Society">St Theresa Society</option>
                        <option value="COSRA">COSRA</option>
                        <option value="Children of Mary">Children of Mary</option>
                        <option value="Knight and Ladies of Marshall">Knight and Ladies of Marshall</option>
                        <option value="Young Men's">Young Men's</option>
                        <option value="Mary Mother of Mothers">Mary Mother of Mothers</option>
                        <option value="Theresa Mma Kuo">Theresa Mma Kuo</option>
                        <option value="Men's">Men's</option>
                        <option value="Senior Choir">Senior Choir</option>
                        <option value="Lay Readers">Lay Readers</option>
                        <option value="Ushers">Ushers</option>
                        <option value="St Anthony Guild">St Anthony Guild</option>
                        <option value="Northern Union">Northern Union</option>
                        <option value="CYO">CYO</option>
                        <option value="St Theresa Guild">St Theresa Guild</option>
                        <option value="KLBS">KLBS</option>
                        <option value="Knight and Ladies of St John">Knight and Ladies of St John</option>
                        <option value="No Society">No Society</option>
                    </select>
                </div>
            </div>
            <div class="forms-grid">
                <div class="forms">
                    <button type="submit">Add Member</button>
                </div>
            </div>
        </div>
        </div>


    </section>
    </form>

    <?php include 'footer.php' ?>
    <script>
        // Initialize Select2 on the select element
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script src="./js/navbar.js"></script>

    <script src="./js/profile_image.js"></script>
    <script src="./js/nationality.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>