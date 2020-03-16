<?php
include_once 'connection.php';
session_start();
if (!isset($_SESSION["username"])) {
    header("location:admin_login.php");
} else {
    $email = $_SESSION["username"];
}
?>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <!--<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-bottom">-->
        <!--<nav class="navbar navbar-expand-sm navbar-dark bg-danger">-->
        <!--<nav class="navbar navbar-expand-sm navbar-dark bg-primary">-->
        <!--<nav class="navbar navbar-expand-sm navbar-light bg-secondary">-->
        <a href="#" class="navbar-brand">Punjabi Culture</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mymenu">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
                    <div class="dropdown-menu">
                        <a href="add_admin.php" class="dropdown-item">Add Admin</a>
                        <a href="view_admin.php" class="dropdown-item">View Admin</a>

                    </div>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Categories</a>
                    <div class="dropdown-menu">
                        <a href="categories.php" class="dropdown-item">Add</a>
                        <a href="view_admin.php" class="dropdown-item">View Admin</a>

                    </div>

                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                       href="#">Welcome, <?php echo $email ?></a>
                    <div class="dropdown-menu">
                        <a href="changepassword.php" class="dropdown-item">Change Password</a>
                        <a href="logout.php" class="dropdown-item">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>


    </nav>
<?php