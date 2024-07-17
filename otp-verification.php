
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
                        <img src="media/puplogo.png" alt="" class="basoy-logo-small basoysmall">
                    </a>
                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Verify OTP</h3>
                        <p class="text-secondary">Enter your OTP below.</p>
                    </div>


                    <form action="include/verify_otp.php" method="post">
                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                        <div class="mb-3">
                            <label for="otp" class="form-label">Enter OTP</label>
                            <input type="text" name="otp" id="otp" class="form-control" required>
                        </div>
                        <button type="submit" class="btn w-100">Verify OTP</button>
                    </form>
                    <div style="color: red; margin-top: 20px;">
                        <?php
                        if (isset($_GET["error"])) {
                            $error = htmlspecialchars($_GET["error"]);
                            if ($error == "invalidotp") {
                                echo "<p>Invalid OTP. Please try again.</p>";
                            }
                        }
                        ?>
                    </div>
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