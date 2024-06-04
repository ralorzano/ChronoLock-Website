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

  <title>ChronoLock Admin Dashboard</title>

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

            <li class="active">
              <a class="sidenav-item-link" href="index.php">
                <i class="mdi mdi-disqus-outline"></i>
                <span class="nav-text" data-toggle="tooltip" title="Admin Dashboard">Admin Dashboard</span>
              </a>
            </li>

            <li>
              <a class="sidenav-item-link" href="pendingrfid.php">
                <i class="mdi mdi-folder-clock-outline"></i>
                <span class="nav-text" data-toggle="tooltip" title="Pending RFID Request">Pending RFID Request</span>
              </a>
            </li>

            <!-- Horizontal line with custom class -->
            <hr class="my-2 custom-hr">

            <li class="section-title">System Management</li>


            <li>
              <a class="sidenav-item-link" href="schedule.php">
                <i class="mdi mdi-calendar-today "></i>
                <span class="nav-text" data-toggle="tooltip" title="Schedule">Schedule</span>
              </a>
            </li>

            <li class="has-sub">
              <a
                class="sidenav-item-link"
                href="javascript:void(0)"
                data-toggle="collapse"
                data-target="#users"
                aria-expanded="false"
                aria-controls="users"
              >
                <i class="mdi mdi-book-open-page-variant"></i>
                <span class="nav-text" data-toggle="tooltip" title="Attendance">Attendance</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="users" data-parent="#sidebar-menu">
                <div class="sub-menu">
                    <li>
                      <a href="studattendance.php">Student Attendance</a>
                    </li>

                    <li>
                      <a href="instattendance.php">Instructor Attendance</a>
                    </li>
                  </li>
                </div>
              </ul>
            </li>

            <li>
              <a class="sidenav-item-link" href="rfidaccount.php">
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

          <!-- Live Date & Time
            <div class="card card-default">
            <div class="px-6 py-4">
              <div class="row">
                <div class="col-12">
                  <p class="text-center display-4 date-time" id="liveDateTime"></p>
                </div>
              </div>
            </div>
          </div> -->

          <div class="d-flex justify-content-end mb-3"> <!-- Align content to the right -->
            <!-- Live Date and Time -->
            <div>
                <p class="text-center display-4 date-time" id="liveDateTime">Your Date and Time</p>
            </div>
        </div>

          <div class="row">
            <!-- Frist box -->
            <div class="col-xl-3 col-md-6">
              <div class="card card-default bg-secondary">
                <div class="d-flex p-5 justify-content-between">
                  <div class="icon-md bg-white rounded-circle mr-3">
                    <i class="mdi mdi-account-plus-outline text-secondary"></i>
                  </div>
                  <div class="text-right">
                    <span class="h2 d-block text-white">890</span>
                    <p class="text-white">New Users</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Second box -->
            <div class="col-xl-3 col-md-6">
              <div class="card card-default bg-success">
                <div class="d-flex p-5 justify-content-between">
                  <div class="icon-md bg-white rounded-circle mr-3">
                    <i class="mdi mdi-table-edit text-success"></i>
                  </div>
                  <div class="text-right">
                    <span class="h2 d-block text-white">350</span>
                    <p class="text-white">Order Placed</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Third box -->
            <div class="col-xl-3 col-md-6">
              <div class="card card-default bg-primary">
                <div class="d-flex p-5 justify-content-between">
                  <div class="icon-md bg-white rounded-circle mr-3">
                    <i class="mdi mdi-content-save-edit-outline text-primary"></i>
                  </div>
                  <div class="text-right">
                    <span class="h2 d-block text-white">1360</span>
                    <p class="text-white">Total Sales</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Fourth box -->
            <div class="col-xl-3 col-md-6">
              <div class="card card-default bg-info">
                <div class="d-flex p-5 justify-content-between">
                  <div class="icon-md bg-white rounded-circle mr-3">
                    <i class="mdi mdi-bell text-info"></i>
                  </div>
                  <div class="text-right">
                    <span class="h2 d-block text-white">$8930</span>
                    <p class="text-white">Monthly Revenue</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- CALENDAR -->
          <div class="card card-default border border-dark">
            <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
              <h2>Schedule</h2>
              <div class="card-body">
                <div class=" full-calendar mb-5">
                  <div id="calendar"></div>
                </div>
              </div>
            </div>
          </div>
        

          <!--TABLES-->
          <div class="row">
            <div class="col-xl-6">
              <!-- Striped Table -->
              <div class="card card-default border border-dark">
                <div class="card-header">
                  <h2>RFID Pending Request</h2>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Active</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td scope="row">1</td>
                        <td>Lucia</td>
                        <td>Christ</td>
                        <td>@Lucia</td>
                        <td>
                          <label class="switch switch-primary form-control-label mr-2">
                            <input type="checkbox" class="switch-input form-check-input" value="on" checked>
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                          </label>
                        </td>
                      </tr>
                      <tr>
                        <td scope="row">2</td>
                        <td>Catrin</td>
                        <td>Seidl</td>
                        <td>@catrin</td>
                        <td>
                          <label class="switch switch-primary form-control-label mr-2">
                            <input type="checkbox" class="switch-input form-check-input" value="on" />
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                          </label>
                        </td>
                      </tr>
                      <tr>
                        <td scope="row">3</td>
                        <td>Lilli</td>
                        <td>Kirsh</td>
                        <td>@lilli</td>
                        <td>
                          <label class="switch switch-primary form-control-label mr-2">
                            <input type="checkbox" class="switch-input form-check-input" value="on" checked />
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                          </label>
                        </td>
                      </tr>
                      <tr>
                        <td scope="row">4</td>
                        <td>Else</td>
                        <td>Voigt</td>
                        <td>@voigt</td>
                        <td>
                          <label class="switch switch-primary form-control-label mr-2">
                            <input type="checkbox" class="switch-input form-check-input" value="on" />
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                          </label>
                        </td>
                      </tr>
                      <tr>
                        <td scope="row">5</td>
                        <td>Ursel</td>
                        <td>Harms</td>
                        <td>@ursel</td>
                        <td>
                          <label class="switch switch-primary form-control-label  mr-2">
                            <input type="checkbox" class="switch-input form-check-input" value="on" checked />
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                          </label>
                        </td>
                      </tr>
                      <tr>
                        <td scope="row">6</td>
                        <td>Anke</td>
                        <td>Sauter</td>
                        <td>@Anke</td>
                        <td>
                          <label class="switch switch-primary form-control-label mr-2">
                            <input type="checkbox" class="switch-input form-check-input" value="on" />
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                          </label>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


            <div class="col-xl-6">
              <!-- Striped Table -->
              <div class="card card-default border border-dark">
                <div class="card-header">
                  <h2>Recent Added RFID</h2>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td scope="row">1</td>
                        <td>Lucia</td>
                        <td>Christ</td>
                        <td>@Lucia</td>
                      </tr>
                      <tr>
                        <td scope="row">2</td>
                        <td>Catrin</td>
                        <td>Seidl</td>
                        <td>@catrin</td>
                      </tr>
                      <tr>
                        <td scope="row">3</td>
                        <td>Lilli</td>
                        <td>Kirsh</td>
                        <td>@lilli</td>
                      </tr>
                      <tr>
                        <td scope="row">4</td>
                        <td>Else</td>
                        <td>Voigt</td>
                        <td>@voigt</td>
                      </tr>
                      <tr>
                        <td scope="row">5</td>
                        <td>Ursel</td>
                        <td>Harms</td>
                        <td>@ursel</td>
                      </tr>
                      <tr>
                        <td scope="row">6</td>
                        <td>Anke</td>
                        <td>Sauter</td>
                        <td>@Anke</td>
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