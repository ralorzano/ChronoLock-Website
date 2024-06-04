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

  <title>ChronoLock Admin-Instructor Attendance</title>

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
    NProgress.configure({ showSpinner: false });
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
              <a href="index.php">
                <img src="images/logo.png" alt="Mono" />
                <span class="brand-name">ChronoLock</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">

                <li class="section-title">Overview</li>
    
                <li>
                  <a class="sidenav-item-link" href="index.php">
                    <i class="mdi mdi-disqus-outline"></i>
                    <span class="nav-text" data-toggle="tooltip" title="Admin Dashboard">Admin Dashboard</span>
                  </a>
                </li>
    
                <li>
                  <a class="sidenav-item-link" href="admin-pendingrfid.php">
                    <i class="mdi mdi-folder-clock-outline"></i>
                    <span class="nav-text" data-toggle="tooltip" title="Pending RFID Request">Pending RFID Request</span>
                  </a>
                </li>
    
                <!-- Horizontal line with custom class -->
                <hr class="my-2 custom-hr">
    
                <li class="section-title">System Management</li>
    
    
                <li>
                  <a class="sidenav-item-link" href="admin-schedule.php">
                    <i class="mdi mdi-calendar-today "></i>
                    <span class="nav-text" data-toggle="tooltip" title="Schedule">Schedule</span>
                  </a>
                </li>
    
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-outline"></i>
                      <span class="nav-text">Attendance</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse show" id="ui-elements" data-parent="#sidebar-menu">
                      <div class="sub-menu">
      
                        <li>
                          <a class="sidenav-item-link" href="admin-studattendance.php">
                            <span class="nav-text">Student Attendance</span>
                          </a>
                        </li>
      
                        <li class="active">
                          <a class="sidenav-item-link" href="admin-instattendance.php">
                            <span class="nav-text">Instructor Attendance</span>
                          </a>
                        </li>
                    </ul>
                </li>
    
                <li>
                  <a class="sidenav-item-link" href="admin-rfidaccount.php">
                    <i class="mdi mdi-radio-tower"></i>
                    <span class="nav-text" data-toggle="tooltip" title="RFID Accounts">RFID Accounts</span>
                  </a>
                </li>

              </ul>
            </div>
    
            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <ul class="d-flex">
                  <li>
                    <a href="user-account-settings.php" data-toggle="tooltip" title="Profile settings"><i
                        class="mdi mdi-settings"></i></a>
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

         
            <div class="d-flex justify-content-end"> <!-- Align content to the right -->
                <!-- Live Date and Time -->
                <div>
                    <p class="text-center display-4 date-time" id="liveDateTime">Your Date and Time</p>
                </div>
            </div>
         
            <!-- DROPRDOWN NAV -->

            <div class="row mt-4">
              <div class="col-xl-9 col-md-9">
                <!-- Example single primary button -->
                <div class="dropdown d-inline-block mb-3 border border-dark rounded-2">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" data-display="static">
                    <i class="mdi mdi-calendar"></i>
                    Date <!-- CALENDAR TYPE -->
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              
                <div class="dropdown d-inline-block mb-3 border border-dark rounded-2">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" data-display="static">
                    <i class="mdi mdi-timer"></i>
                    Time 
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>

                <div class="dropdown d-inline-block mb-3 border border-dark rounded-2">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" data-display="static">
                    <i class="mdi mdi-account-arrow-right"></i>
                    Instructor Name 
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>

                <div class="dropdown d-inline-block mb-3 border border-dark rounded-2">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" data-display="static">
                    <i class="mdi mdi-account-card-details"></i>
                    Instructor ID 
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-3 d-flex justify-content-end">
              <!-- Sort button -->
              <div class="dropdown d-inline-block mb-3 border border-dark rounded-2">
                  <button class="btn btn-warning fw-bold" type="button">
                    <i class="mdi mdi-sort"></i>
                      SORT
                  </button>
              </div>
            </div>

        </div>
        <!-- END -->


            <div class="card card-default border border-dark">
                <div class="card-header">
                  <h2>Instructor Realtime Attendance</h2>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                      <tr class="text-center">
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Instructor Name</th>
                        <th scope="col">Instructor ID</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td scope="row">June 3, 2024</td>
                        <td scope="row">11:35 a.m.</td>
                        <td scope="row">Lorzano, Ralph H.</td>
                        <td scope="row">C21104744</td>
                        <td scope="row" class="text-success fw-bolder">Present</td>
                        <th>
                          <!-- Example single primary button -->
                          <div class="dropdown d-inline-block">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false" data-display="static">
                              Actions
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <button class="dropdown-item">
                                    <i class="mdi mdi-circle-edit-outline"></i> 
                                    Edit</button>
                                  <button class="dropdown-item">
                                    <i class="mdi mdi-trash-can"></i> 
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



  <!-- Footer -->
  <!-- <footer class="footer mt-auto">
          <div class="copyright bg-white">
            <p>
              &copy; <span id="copy-year"></span> Copyright Mono Dashboard
              Bootstrap Template by
              <a
                class="text-primary"
                href="http://www.iamabdus.com/"
                target="_blank"
                >Abdus</a
              >.
            </p>
          </div>
          <script>
            var d = new Date();
            var year = d.getFullYear();
            document.getElementById("copy-year").innerHTML = year;
          </script>
        </footer> -->
  </div>
  </div>

  <?php include 'footer.php' ?>