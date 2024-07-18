
<body>
    <nav class="nav navbar navbar-light fixed-top" style="background-color:rgba(0, 107, 229, 1);">
        <div class="container-fluid">
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span style="color:#ffff;" class="bi bi-droplet-half" data-bs-target="#sidebar"></span>
            </button>
            <div class="ms-auto">
                <button onclick="window.location.href='include/logout.inc.php'" class="fw-bold btn btn-link nav-link px-3 log-out" style="color: #800201; text-decoration: none;">
                    <span class="me-2 log-out"><i class="fa-solid fa-right-from-bracket"></i></span>
                    Log Out
                </button>
            </div>
        </div>
    </nav>

    <!--side menu -->
    <div class="offcanvas offcanvas-start sidebar_text sidebar-nav bg-light border-0" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-light">
                <ul class="navbar-nav">
                    <img class="img-fluid mx-auto d-flex justify-content-center mb-3" src="css/media/puplogo.png" alt="logo" width="200px">
                    <li>
                        <a href="<?php echo $dashboardUrl; ?>" class="nav-link px-3 white nav-item mb-2 <?php echo (basename($_SERVER['PHP_SELF']) == basename($dashboardUrl)||basename($_SERVER['PHP_SELF']) == 'admin_index.php') ? 'active' : ''; ?>">
                            <span class="icon-container"><i style="color: #ffff" class="fa-solid fa-house"></i></span>
                            <span class="fw-bold">Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="rooms.php" class="nav-link px-3 white nav-item mb-2 <?php echo (basename($_SERVER['PHP_SELF']) == 'orders.php') ? 'active' : ''; ?>">
                            <span class="icon-container"><i style="color: #ffff" class="fas fa-door-open"></i></span>
                            <span class="fw-bold">Rooms</span>
                        </a>
                    </li>

                    <li>
                        <a href="product.php" class="nav-link px-3 white nav-item mb-2 <?php echo (basename($_SERVER['PHP_SELF']) == 'product.php') ? 'active' : ''; ?>">
                            <span class="icon-container"><i style="color: #ffff" class="fa-solid fa-calendar-days"></i></span>
                            <span class="fw-bold ">Class Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a href="maintenance.php" class="nav-link px-3 white nav-item mb-2 <?php echo (basename($_SERVER['PHP_SELF']) == 'maintenance.php') ? 'active' : ''; ?>">
                            <span class="icon-container"><i style="color: #ffff" class="fa-solid fa-clipboard-user"></i></span>
                            <span class="fw-bold">Attendance</span>
                        </a>
                    </li>
                    <li>
                        <a href="maintenance.php" class="nav-link px-3 white nav-item mb-2 <?php echo (basename($_SERVER['PHP_SELF']) == 'maintenance.php') ? 'active' : ''; ?>">
                            <span class="icon-container"><i style="color: #ffff" class="fa-solid fa-screwdriver-wrench"></i></span>
                            <span class="fw-bold">Maintenance</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
