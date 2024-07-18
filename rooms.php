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
    <link rel="stylesheet" href="css/rooms.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/542b9b94e8.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/loader.js"></script>
    <link rel="icon" type="image/png" href="css/media/puplogo.png" />


</head>



<main class="mt-2 pt-3">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4 class="card-title pup-red fw-bold">
                                <?php
                                // Display the user's name from the session
                                // htmlspecialchars is used to prevent XSS attacks
                                echo isset($_SESSION['usersName']) ? htmlspecialchars($_SESSION['usersName']) : 'Instructor Name';
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card vh-100">
                        <div class="container container-fluid mt-4 mb-3">
                            <div class="card-header" style="background-color: maroon;">
                                <h4 class="fw-bold text-center text-white mt-2" style="letter-spacing: 3px;">CLASSROOMS</h4>
                            </div>
                            <div class="card border-2 shadow">
                                <div class="row mt-3 mb-4">
                                    <h4 class="text-center mt-2 mb-2 fw-bold" style="color: maroon;">First Floor</h4>
                                    <div class="mt-3 mb-2 d-flex flex-row flex-nowrap justify-content-evenly">
                                        <button type="button" id="101" class="btn  btn-primary btn-width" data-toggle="modal" data-target="#formModal">101</button>
                                        <button type="button" id="102" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">102</button>
                                        <button type="button" id="103" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">103</button>
                                        <button type="button" id="104" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">104</button>
                                        <button type="button" id="105" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">105</button>
                                        <button type="button" id="106" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">106</button>
                                        <button type="button" id="107" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">107</button>
                                        <button class="btn btn-secondary btn-width" disabled>Clinic</button>
                                        <button type="button" id="109" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">109</button>
                                        <button type="button" id="110" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">110</button>
                                    </div>
                                    <h4 class="text-center mt-3 fw-bold" style="color: maroon;">Second Floor</h4>
                                    <div class=" mt-3 mb-2 d-flex flex-row flex-nowrap justify-content-evenly">
                                        <button type="button" id="201" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">201</button>
                                        <button type="button" id="202" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">202</button>
                                        <button type="button" id="203" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">203</button>
                                        <button class="btn btn-secondary btn-width" disabled>Student Services</button>
                                        <button class="btn btn-secondary btn-width" disabled>Office</button>
                                        <button class="btn btn-secondary btn-width" disabled>Student Affairs</button>
                                        <button class="btn btn-secondary btn-width" disabled>D. Office</button>
                                        <button class="btn btn-secondary btn-width" disabled>SC Office</button>
                                        <button class="btn btn-secondary btn-width" disabled>Faculty</button>
                                        <button class="btn btn-secondary btn-width" disabled>Faculty</button>
                                    </div>
                                    <h4 class="text-center mt-3 fw-bold" style="color: maroon;">Third Floor</h4>
                                    <div class=" mt-3 mb-2 d-flex flex-row flex-nowrap justify-content-evenly">
                                        <button type="button" id="301" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">301</button>
                                        <button type="button" id="302" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">302</button>
                                        <button type="button" id="303" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">303</button>
                                        <button type="button" id="304" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">304</button>
                                        <button type="button" id="305" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">305</button>
                                        <button type="button" id="306" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">306</button>
                                        <button class="btn btn-secondary btn-width" disabled>Library</button>
                                        <button type="button" id="308" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">AVR</button>
                                        <button class="btn btn-secondary btn-width" disabled>Library</button>
                                        <button type="button" id="310" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">AVR</button>
                                    </div>
                                    <h4 class="text-center mt-3 fw-bold" style="color: maroon;">Fourth Floor</h4>
                                    <div class=" mt-3 d-flex flex-row flex-nowrap justify-content-evenly">
                                        <button type="button" id="401" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">401</button>
                                        <button type="button" id="402" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">402</button>
                                        <button type="button" id="403" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">403</button>
                                        <button type="button" id="404" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">404</button>
                                        <button type="button" id="405" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">405</button>
                                        <button type="button" id="406" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">406</button>
                                        <button type="button" id="407" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">407</button>
                                        <button type="button" id="408" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">408</button>
                                        <button type="button" id="409" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">409</button>
                                        <button type="button" id="410" class="btn btn-primary btn-width" data-toggle="modal" data-target="#formModal">410</button>
                                    </div>
                                </div>
                            </div>
                            <div class="legend mb-4 d-flex fw-bold justify-content-around">
                                <div><span class="available"></span> Available</div>
                                <div><span class="scheduled"></span> Scheduled</div>
                                <div><span class="occupied"></span> Occupied</div>
                                <div><span class="cannot-occupied"></span>Cannot be occupied</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="formModalTitle">Room Booking</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body mt-2 mb-2 d-flex justify-content-center">
                                    <p>Do you want to book this room?</p>
                                </div>
                                <div class="modal-footer d-flex justify-content-center border-0">
                                    <button type="button" class="btn btn-primary w-25" data-toggle="modal" data-target="#formModal1">Yes</button>
                                    <button type="button" class="btn btn-danger w-25" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="formModal1" tabindex="-1" role="dialog" aria-labelledby="formModalTitle1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold" style="color: maroon;" id="formModalTitle1">Add Schedule</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body mt-2 mb-2 ">
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" class="form-control w-100 border-2 mt-2 mb-2" id="section" placeholder="Section Code">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control w-100 border-2 mt-2 mb-2" id="subject" placeholder="Subject Code">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control w-100 border-2 mt-2 mb-2" id="date" placeholder="Select Date">
                                        </div>
                                        <div class="row">
                                            <div class="form-group mt-4 col-md-6 w-50">
                                                <input type="text" class="form-control border-2 mb-2" id="startTime" placeholder="Start Time">
                                            </div>
                                            <div class="form-group mt-4 col-md-6 w-50">
                                                <input type="text" class="form-control border-2 mb-2" id="endTime" placeholder="End Time">
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer border-0 d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary border-0 w-50" data-dismiss="modal" style="background-color: maroon">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 card vh-100">
                        <div class="card-header container container-fluid mb-3 border-0" style="background-color: maroon;">
                            <h4 class="fw-bold text-center text-white mt-2" style="letter-spacing: 3px;">OVERVIEW OF CLASSROOM TRANSACTION</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row ">
                                    <label for="search" class="col-sm-1 col-form-label">Search: </label>
                                    <input type="text" class="form-control w-25 border-2" id="search">
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table ms-1 me-1 text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Room</th>
                                            <th>Professor</th>
                                            <th>Course and Section</th>
                                            <th>Subject</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>102</td>
                                            <td>Sanchez, Jhon Dale</td>
                                            <td>BSIT 2-2</td>
                                            <td>Network Administration</td>
                                            <td>7:30AM - 12:30 PM</td>
                                            <td>Occupied</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>