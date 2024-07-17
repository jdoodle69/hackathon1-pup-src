

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

    <title>Sign Up</title>

</head>

<body>
    <div class="row vh-100 g-0">
        <!--Left basoy-->
        <div class="col-lg-6 position-relative d-none d-lg-block basoy text-center">
            <img class="img-fluid mx-auto d-flex justify-content-center m-0 basoy-logo" src="css/media/puplogo.png" alt="logo">
            <h2 class="mt-3 fw-bold display-6">Polytechnic University of The Philippines</h2>
            <h2 class="fw-bold display-7">Santa Rosa Campus</h2>
            <h2 class="fw-bold display-7">Room Scheduling System</h2>
        </div>
        <!--/Left-->

        <!--Right login/sign up-->
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <a href="#" class="d-flex justify-content-center mb-1">
                        <img src="css/media/basoy.png" alt="" width="100" class="basoy-logo-small basoysmall">
                    </a>
                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Sign Up</h3>
                        <p class="text-secondary">Enter Credentials</p>
                    </div>

                    <form action="include/signup.inc.php" method="post" class="login-form">
                        <!-- Honeypot traps -->
                        <input type="text" name="username_field" style="display: none;">
                        <input type="password" name="password_field" style="display: none;">
                        <!-- End honeypot traps -->
                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-user'></i>
                            </span>
                            <input name="Name" type="text" class="form-control form-control-lg fs-5" placeholder="Name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bxs-user'></i> </span>
                            <input name="UID" type="text" class="form-control form-control-lg fs-5" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-envelope'></i>
                            </span>
                            <input name="Email" type="text" class="form-control form-control-lg fs-5" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bxs-lock-alt'></i> </span>
                            <input name="pwd" type="Password" class="form-control form-control-lg fs-5" placeholder="Password">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-lock-alt'></i> </span>
                            <input name="pwdrepeat" type="Password" class="form-control form-control-lg fs-5" placeholder="Repeat Password">
                        </div>
                        <div style="color: red; margin-bottom: 20px;">
                            <?php
                            if (isset($_GET["error"])) {
                                $error = htmlspecialchars($_GET["error"]); // Escape error parameter
                                switch ($error) {
                                    case "emptyinput":
                                        echo "<p>Fill in all fields</p>";
                                        break;
                                    case "invaliduid":
                                        echo "<p>Username is invalid</p>";
                                        break;
                                    case "invalidemail":
                                        echo "<p>Invalid Email Format</p>";
                                        break;
                                    case "passwordtooshort":
                                        echo "<p>Password too short. Must be above 6 characters!</p>";
                                        break;
                                    case "passwordnotstrong":
                                        echo "<p>Password must contain uppercase, lowercase, and number!</p>";
                                        break;
                                    case "passwordsdontmatch":
                                        echo "<p>Passwords don't match</p>";
                                        break;
                                    case "usernametaken":
                                        echo "<p>Username is already taken. Please use a different email.</p>";
                                        break;
                                    case "emailtaken":
                                        echo "<p>Email is already taken. Please use a different email.</p>";
                                        break;
                                    case "stmtfailed":
                                        echo "<p>Something went wrong. Try again.</p>";
                                        break;
                                }
                            }
                            ?>
                        </div>
                        <div style="color: blue">
                            <?php
                            if (isset($_GET["error"])) {
                                $error = htmlspecialchars($_GET["error"]); // Escape error parameter
                                if ($error == "none") {
                                    echo "<p>Sign up successful click <a href='$url'>here</a> to Log In</p>";
                                }
                            }
                            ?>
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                        Me</small></label>
                            </div>
                            <div>
                                <small><a class="pup-red" href="forgot-password.php">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-lg w-100" value="Sign Up" />
                        </div>
                    </form>
                    <!--log in redirect-->
                    <div class="text-center mt-2">
                        <small>Have an account? <a href="login.php" class="fw-bold pup-red">Log In</a></small>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>