<?php
if (isset($_POST['submit'])) {
    session_start();
    require 'dbh.inc.php';
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    
    if (empty($uid) || empty($pwd)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE usersUid=? OR usersEmail=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $uid, $uid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($pwd, $row['usersPwd']);
                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                } else if ($pwdCheck == true) {
                    // Set the session variables
                    $_SESSION['userId'] = $row['usersId']; // Assuming you have a column 'usersId'
                    $_SESSION['userUid'] = $row['usersUid'];
                    $_SESSION['usersName'] = $row['usersName']; // Assuming you have a column 'usersName'
                    
                    // Check user type and redirect accordingly
                    if ($row['usertype'] == 'admin') {
                        header("Location: ../admin_index.php?login=success");
                        exit();
                    } else if ($row['usertype'] == 'professor') {
                        header("Location: ../professor_index.php?login=success");
                        exit();
                    } else {
                        // Handle other user types or errors
                        header("Location: ../index.php?error=usertypeunknown");
                        exit();
                    }
                } else {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
?>
