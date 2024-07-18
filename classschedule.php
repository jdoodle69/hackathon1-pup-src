<?php
session_start();
include 'include/auth_admin.php';
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
    <link rel="stylesheet" href="css/classched.css">
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
                        <div>
                            <table class="table">
                                <thead>
                                    <tr class="course-1">
                                        <th colspan="6">Bachelor of Science Industrial Engineering</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Section Code</th>
                                        <th scope="col">Subject Code</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>BSIE 1-2</td>
                                        <td>CMPE 011</td>
                                        <td>Computer Fundamentals and Programming</td>
                                        <td>Tuesday</td>
                                        <td>07:30AM - 09:30AM/09:30AM - 12:30PM</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>BSIE 2-2</td>
                                        <td>CMPE 011</td>
                                        <td>Computer Fundamentals and Programming</td>
                                        <td>Tuesday</td>
                                        <td>02:00PM - 04:00PM/04:00PM - 7:00PM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <table class="table">
                                <thead>
                                    <tr class="course-2">
                                        <th colspan="6">Bachelor of Science Industrial Engineering</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Section Code</th>
                                        <th scope="col">Subject Code</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>BSIE 1-2</td>
                                        <td>CMPE 011</td>
                                        <td>Computer Fundamentals and Programming</td>
                                        <td>Tuesday</td>
                                        <td>07:30AM - 09:30AM/09:30AM - 12:30PM</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>BSIE 2-2</td>
                                        <td>CMPE 011</td>
                                        <td>Computer Fundamentals and Programming</td>
                                        <td>Tuesday</td>
                                        <td>02:00PM - 04:00PM/04:00PM - 7:00PM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <table class="table">
                                <thead>
                                    <tr class="course-3">
                                        <th colspan="6">Bachelor of Science Industrial Engineering</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Section Code</th>
                                        <th scope="col">Subject Code</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>BSIE 1-2</td>
                                        <td>CMPE 011</td>
                                        <td>Computer Fundamentals and Programming</td>
                                        <td>Tuesday</td>
                                        <td>07:30AM - 09:30AM/09:30AM - 12:30PM</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>BSIE 2-2</td>
                                        <td>CMPE 011</td>
                                        <td>Computer Fundamentals and Programming</td>
                                        <td>Tuesday</td>
                                        <td>02:00PM - 04:00PM/04:00PM - 7:00PM</td>
                                    </tr>
                                </tbody>
                            </table>
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