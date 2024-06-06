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


    <!-- DATA TABLE -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowreorder/1.5.0/css/rowReorder.bootstrap5.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">

    <script defer src="js/dataTable.js"></script>

    <!-- BOOTSTRAP 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet" />
    <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />

    <link href="plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />

    <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="css/style.css" />

    <!-- FAVICON -->
    <link href="images/favicon.png" rel="shortcut icon" />

    <!-- CALENDAR -->
    <link href="plugins/fullcalendar/core-4.3.1/main.min.css" rel="stylesheet">
    <link href="plugins/fullcalendar/daygrid-4.3.0/main.min.css" rel="stylesheet">

    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="plugins/nprogress/nprogress.js"></script>
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

                        <li>
                            <a class="sidenav-item-link" href="inst-dashboard.php">
                                <i class="mdi mdi-disqus-outline"></i>
                                <span class="nav-text" data-toggle="tooltip" title="Instructor Dashboard">Instructor
                                    Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
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
                        <p class="text-center display-4 date-time" id="liveDateTime">Your Date and Time</p>
                    </div>
                </div>

                <div class="card card-default border border-dark">
                    <div class="card-header">
                        <h1>My Class Record</h1>
                        <div class="row">
                            <div class="col-xl-12 col-md-12 d-flex justify-content-end">
                                <!-- Sort button -->
                                <div class="dropdown d-inline-block border border-dark rounded">
                                    <button class="btn btn-primary fw-bold" type="button" data-toggle="modal" data-target="#modal-add-event">
                                        <i class=" mdi mdi-file-plus"></i>
                                        Create Class Record
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <table id="example" class="table table-bordered table-hover" style="width:100%">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Program</th>
                                    <th>Year & Section</th>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>BSIS</td>
                                    <td>1A</td>
                                    <td>ITA-315</td>
                                    <td>Advance Database</td>
                                    <th>
                                        <!-- Example single primary button -->
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <button class="dropdown-item">
                                                    <i class="mdi mdi-circle-edit-outline text-warning"></i>
                                                    Edit</button>
                                                <button class="dropdown-item">
                                                    <i class="mdi mdi-trash-can text-danger"></i>
                                                    Delete</button>
                                            </div>
                                        </div>
                                    </th>
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

    <?php include 'footer.php' ?>