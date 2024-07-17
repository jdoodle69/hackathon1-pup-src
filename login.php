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
    <title>Log In</title>

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
                        <img src="css/media/puplogo.png" alt="" class="basoy-logo-small basoysmall">
                    </a>
                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Log In</h3>
                        <p class="text-secondary">Please Enter your Credential</p>
                    </div>

                    <form action="include/login.inc.php" method="post" class="login-form">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-user'></i>
                            </span>
                            <input name="uid" type="text" class="form-control form-control-lg fs-5" placeholder="Username" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bxs-lock-alt'></i>
                            </span>
                            <input name="pwd" type="password" class="form-control form-control-lg fs-5" placeholder="Password" required>
                        </div>
                        <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
                        <div>
                            <div style="color: red">
                                <?php if (isset($_SESSION['error'])) : ?>
                                    <p class="error"><?php echo $_SESSION['error']; ?></p>
                                    <?php unset($_SESSION['error']); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                            <div>
                                <small><a class="pup-red" href="forgot-password.php">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-lg w-100" value="Log In" />
                        </div>
                    </form>
                    <!--sign up redirect-->
                    <div class="text-center mt-2">
                        <small>Don't have an account? <a href="signup.php" class="fw-bold pup-red">Sign Up</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>