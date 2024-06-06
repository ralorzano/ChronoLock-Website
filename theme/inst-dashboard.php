<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>ChronoLock Instructor Dashboard</title>

    <?php include 'head.php' ?>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Custom JS -->
    <script src="js/toastr.js"></script>
</head>

<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="inst-dashboard.php">
                        <img src="images/logo.png" alt="Mono" />
                        <span class="brand-name">ChronoLock</span>
                    </a>
                </div>
                <div class="sidebar-left" data-simplebar style="height: 100%">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">

                        <li class="section-title">Dashboard</li>

                        <li class="active">
                            <a class="sidenav-item-link" href="inst-dashboard.php">
                                <i class="mdi mdi-disqus-outline"></i>
                                <span class="nav-text" data-toggle="tooltip" title="Instructor Dashboard">Instructor
                                    Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="sidenav-item-link" href="inst-class-record.php">
                                <i class="mdi mdi-file-document-box-multiple"></i>
                                <span class="nav-text" data-toggle="tooltip" title="Class Record">Class
                                    Record</span>
                            </a>
                        </li>
                        <li>
                            <a class="sidenav-item-link" href="inst-schedule.php">
                                <i class="mdi mdi-calendar-today"></i>
                                <span class="nav-text" data-toggle="tooltip" title="My Schedule">My
                                    Schedule</span>
                            </a>
                        </li>

                        <!-- Horizontal line with custom class -->
                        <hr class="my-2 custom-hr">

                        <li class="section-title">Section</li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users" aria-expanded="false" aria-controls="users">
                                <i class="mdi mdi-alpha-s-box"></i>
                                <span class="nav-text" data-toggle="tooltip" title="Attendance">BSIS 1A</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="users" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a href="">Class Attendance</a>
                                    </li>

                                    <li>
                                        <a href="">Class List</a>
                                    </li>
                        </li>
                </div>
            </div>

            <div class="sidebar-footer">
                <div class="sidebar-footer-content">
                    <ul class="d-flex">
                        <li>
                            <a href="user-account-settings.php" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a>
                        </li>
                        <li>
                            <a href="login.php" data-toggle="tooltip" title="Logout"><i class="mdi mdi-logout-variant"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
    </aside>

    <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
    <div class="page-wrapper">
        <!-- Header -->
        <?php include 'header.php' ?>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
            <div class="content">

                <div class="d-flex justify-content-end mb-3"> <!-- Align content to the right -->
                    <!-- Live Date and Time -->
                    <div>
                        <p class="text-center date-time" id="liveDateTime">Your Date and Time</p>
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="col-xl-4"> -->
                    <div class="col-xl-4 col-md-6" style="height: 50%;">
                        <!-- Pie Chart  -->
                        <div class="card card-default border border-dark">
                            <div class="card-header">
                                <!-- <h2>Pie Chart</h2> -->
                                <!-- Example single primary button -->
                                <div class="dropdown d-inline-block">
                                    <button class="btn btn-primary dropdown-toggle justify-content-end" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                        Select Section
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#exampleModalForm">
                                            <i class="mdi mdi-check"></i>
                                            BSIS 1A
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="simple-pie-chart" class="d-flex justify-content-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <!-- Horizontal Bar Chart  -->
                        <div class="card card-default border border-dark">
                            <div class="card-header">
                                <h2>Number of Students Per Section</h2>
                            </div>
                            <div class="card-body pb-0">
                                <div id="horizontal-bar-chart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card card-default border border-dark" style="height: 92%;">
                            <div class="card-header text-center">
                                <h2>Sections Handled</h2>
                            </div>
                            <div class="card-body static-number">
                                <h1 style="font-size: 100px;">10</h1>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card card-default border border-dark">
                    <div class="card-header">
                        <h2 style="font-size: 30px;">Class List</h2>

                        <div class="dropdown d-inline-block">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                Section
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <button class="dropdown-item">
                                    <i class="mdi mdi-arrow-right"></i>
                                    BSIS 1A</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">RFID Code</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">User Type</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td scope="row">1</td>
                                    <td>210102192301923</td>
                                    <td>Lorzano, Ralph H.</td>
                                    <td>22</td>
                                    <td>Male</td>
                                    <td>Student</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr class="text-center">
                                    <td scope="row">1</td>
                                    <td>210102192301923</td>
                                    <td>Lorzano, Ralph H.</td>
                                    <td>22</td>
                                    <td>Male</td>
                                    <td>Student</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr class="text-center">
                                    <td scope="row">1</td>
                                    <td>210102192301923</td>
                                    <td>Lorzano, Ralph H.</td>
                                    <td>22</td>
                                    <td>Male</td>
                                    <td>Student</td>
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


    </div>
    </div>
    </div>
    </div>

    <?php include 'footer.php' ?>