<?php
session_start();
include 'include/header.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/542b9b94e8.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/loader.js"></script>
    <link rel="icon" type="image/png" href="css/media/puplogo.png" />


</head>



<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title pup-red">
                                <?php
                                // Display the user's name from the session
                                // htmlspecialchars is used to prevent XSS attacks
                                echo isset($_SESSION['usersName']) ? htmlspecialchars($_SESSION['usersName']) : 'Instructor Name';
                                ?>
                            </h4>
                        </div>
                        <div class="card-body vh-100">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>

</html>