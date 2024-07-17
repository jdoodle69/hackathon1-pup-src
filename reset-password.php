
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="css/media/puplogo.png" />
    <title>Reset Password</title>
</head>

<body>
    <div class="row vh-100 g-0">
        <!-- Left basoy -->
        <div class="col-lg-6 position-relative d-none d-lg-block basoy text-center">
            <img class="img-fluid mx-auto d-flex justify-content-center m-0 basoy-logo" src="css/media/puplogo.png" alt="logo">
            <h2 class="mt-3 fw-bold display-6">Polytechnic University of The Philippines</h2>
            <h2 class="fw-bold display-7">Santa Rosa Campus</h2>
            <h2 class="fw-bold display-7">Room Scheduling System</h2>
        </div>
        <!-- /Left -->

        <!-- Right reset password -->
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <a href="#" class="d-flex justify-content-center mb-1">
                        <img src="css/media/puplogo.png" alt="" class="basoy-logo-small basoysmall">
                    </a>
                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Reset Password</h3>
                        <p class="text-secondary">Enter your new password below.</p>
                    </div>

                    <!-- Notification area for password change status -->
                    <?php if (isset($_GET["success"]) && $_GET["success"] == "passwordchanged") : ?>
                        <div class="alert alert-success" role="alert">
                            Your password has been successfully changed.
                        </div>
                    <?php elseif (isset($_GET["error"])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php
                            switch ($_GET["error"]) {
                                case "csrf":
                                    echo "Invalid CSRF token. Please try again.";
                                    break;
                                case "passwordmismatch":
                                    echo "Passwords do not match. Please re-enter.";
                                    break;
                                case "invalidtoken":
                                    echo "Invalid or expired token. Please request a new one.";
                                    break;
                                case "dberror":
                                    echo "Database error. Please try again later.";
                                    break;
                                case "passworderror":
                                    echo "Failed to update password. Please try again later.";
                                    break;
                                default:
                                    echo "Something went wrong. Please try again later.";
                                    break;
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <!-- Reset password form -->
                    <form action="reset-password-process.php" method="post" class="login-form" onsubmit="return validateForm()">
                        <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">
                        <input type="hidden" name="token" value="<?php echo isset($_GET['token']) ? htmlspecialchars($_GET['token']) : ''; ?>">
                        <div class="mb-3">
                            <label for="new-password" class="form-label">New Password</label>
                            <input type="password" name="new_password" id="new-password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirm New Password</label>
                            <input type="password" name="confirm_password" id="confirm-password" class="form-control" required>
                            <div id="password-mismatch" class="text-danger" style="display: none;">Passwords do not match. Please re-enter.</div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-lg w-100" value="Reset Password" />
                        </div>
                    </form>

                    <!-- Back to login link -->
                    <div class="text-center mt-2">
                        <small>Remember your password? <a href="login.php" class="fw-bold pup-red">Log In</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var newPassword = document.getElementById("new-password").value;
            var confirmPassword = document.getElementById("confirm-password").value;

            if (newPassword !== confirmPassword) {
                document.getElementById("password-mismatch").style.display = "block";
                return false;
            } else {
                document.getElementById("password-mismatch").style.display = "none";
                return true;
            }
        }
    </script>
</body>
</html>
