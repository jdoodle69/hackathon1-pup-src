<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    header("Location: login.php?error=notloggedin");
    exit();
}

// Check if user type is professor
if ($_SESSION['usertype'] !== 'professor') {
    header("Location: login.php?error=unauthorized");
    exit();
}
?>
