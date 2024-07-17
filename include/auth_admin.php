<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    header("Location: login.php?error=notloggedin");
    exit();
}

// Check if user type is admin
if ($_SESSION['usertype'] !== 'admin') {
    header("Location: login.php?error=unauthorized");
    exit();
}
?>
