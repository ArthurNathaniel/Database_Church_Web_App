<!-- <?php include 'db.php';
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit();
        }
        ?> -->

<button class="sidebar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
    MENU
</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="nav-logo"></div>
    <div class="nav-links">
        <a href="index.php">Graph Analysis</a>
        <div class="dropdown">
            <!-- Dropdown button -->
            <button class="dropbtn">Members <i class="fa-solid fa-angle-down"></i></button>

            <!-- Dropdown content -->
            <div class="dropdown-content">
                <!-- Dropdown links -->
                <a href="add_members.php">Add Members</a>
                <a href="view_members.php">View Members</a>
            </div>
        </div>
        <div class="dropdown">
            <!-- Dropdown button -->
            <button class="dropbtn">Wedding</button>

            <!-- Dropdown content -->
            <div class="dropdown-content">
                <!-- Dropdown links -->

                <a href="#">Add Wedding</a>
                <a href="#">View Wedding </a>
            </div>
        </div>


        <a href="#">View Birthday</a>
    </div>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</div>