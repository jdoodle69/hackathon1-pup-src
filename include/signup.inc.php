<?php
session_start();

require_once 'dbh.inc.php';

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); // Ensure the correct variable names are used here
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    if (!isset($_POST["csrf_token"]) || $_POST["csrf_token"] !== $_SESSION["csrf_token"]) {
        header("location:../signup.php?error=csrf");
        exit();
    }

    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $uid = $_POST["UID"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    // Validate input data
    if (empty($name) || empty($email) || empty($uid) || empty($pwd) || empty($pwdrepeat)) {
        header("location:../signup.php?error=emptyinput");
        exit();
    }

    // Validate username
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
        header("location:../signup.php?error=invaliduid");
        exit();
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:../signup.php?error=invalidemail");
        exit();
    }

    // Check if passwords match
    if ($pwd !== $pwdrepeat) {
        header("location:../signup.php?error=passwordsdontmatch");
        exit();
    }

    // Check password length
    if (strlen($pwd) < 6) {
        header("location:../signup.php?error=passwordtooshort");
        exit();
    }

    // Check password strength
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{6,}$/", $pwd)) {
        header("location:../signup.php?error=passwordnotstrong");
        exit();
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE usersEmail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        header("location:../signup.php?error=emailtaken");
        exit();
    }

    // Check if username is taken
    $stmt = $conn->prepare("SELECT * FROM users WHERE usersUid = ?");
    $stmt->bind_param("s", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        header("location:../signup.php?error=usernametaken");
        exit();
    }

    // Hash password
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location:../signup.php?error=sqlerror");
        exit();
    }

    $stmt->bind_param("ssss", $name, $email, $uid, $hashedPwd);
    $stmt->execute();
    $stmt->close();

    // Redirect to a success page or log the user in
    header("location:../login.php?signup=success");
    exit();
}
