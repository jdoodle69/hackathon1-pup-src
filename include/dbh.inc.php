<?php
$serverName = "localhost"; // Adjust as necessary
$dBUsername = "root"; // Adjust as necessary
$dBPassword = ""; // Adjust as necessary
$dBName = "pupclassscheduler"; // Your database name

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>