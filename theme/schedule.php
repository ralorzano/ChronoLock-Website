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

  <title>ChronoLock Admin</title>

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
              <a class="sidenav-item-link" href="pendingrfid.php">
                <i class="mdi mdi-folder-clock-outline"></i>
                <span class="nav-text" data-toggle="tooltip" title="Pending RFID Request">Pending RFID Request</span>
              </a>
            </li>

            <!-- Horizontal line with custom class -->
            <hr class="my-2 custom-hr">

            <li class="section-title">System Management</li>


            <li class="active">
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

        <div class="row mt-4">
            <div class="col-xl-12 col-md-12 d-flex justify-content-end">
                <!-- Sort button -->
                <div class="dropdown d-inline-block mb-3 mr-3 border border-dark rounded-2">
                    <button class="btn btn-primary fw-bold" type="button" data-toggle="modal" data-target="#modal-add-event">
                        <i class=" mdi mdi-calendar-plus"></i>
                        ADD SCHEDULE
                    </button>
                </div>
                <div class="dropdown d-inline-block mb-3 border border-dark rounded-2">
                    <button class="btn btn-warning fw-bold" type="button">
                        <i class="mdi mdi-cloud-print-outline"></i>
                        PRINT
                    </button>
                </div>
              </div>
        </div>


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

        </div>
      </div>
    </div>
  </div>


  </div>
  </div>


  <!-- Add Event Button  -->
  <div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-header px-4">
          <h5 class="modal-title" id="exampleModalCenterTitle">
            Add New Event
          </h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body px-4">
          <div class="form-group">
            <label for="firstName">Title</label>
            <input type="text" class="form-control" value="Meeting" />
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="firstName">Date</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text py-1">
                      <i class="mdi mdi-calendar-range"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="dateRange" value="" placeholder="Date" />
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleFormControlSelect3">Time</label>
                <select class="form-control" id="exampleFormControlSelect3">
                  <option>10:00am</option>
                  <option>10:30am</option>
                  <option>11am</option>
                  <option>11:30am</option>
                  <option>12:00pm</option>
                </select>
              </div>
            </div>
            </div>

          <div class="form-group mb-0">
            <label for="firstName">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-pill">Save Changes</button>
          </div>
      </form>
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

  <!-- Card Offcanvas -->
  <div class="card card-offcanvas" id="contact-off">
    <div class="card-header">
      <h2>Contacts</h2>
      <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
    </div>
    <div class="card-body">
      <div class="mb-4">
        <input type="text" class="form-control form-control-lg form-control-secondary rounded-0"
          placeholder="Search contacts..." />
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-01.jpg" alt="User Image" />
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title">Selena Wagner</span>
            <span class="discribe">Designer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-02.jpg" alt="User Image" />
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title">Walter Reuter</span>
            <span>Developer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-03.jpg" alt="User Image" />
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title">Larissa Gebhardt</span>
            <span>Cyber Punk</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-04.jpg" alt="User Image" />
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title">Albrecht Straub</span>
            <span>Photographer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-05.jpg" alt="User Image" />
            <span class="active bg-danger"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title">Leopold Ebert</span>
            <span>Fashion Designer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-06.jpg" alt="User Image" />
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title">Selena Wagner</span>
            <span>Photographer</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/simplebar/simplebar.min.js"></script>
  <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

  <script src="plugins/apexcharts/apexcharts.js"></script>

  <script src="plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>

  <script src="plugins/daterangepicker/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <script>
    jQuery(document).ready(function () {
      jQuery('input[name="dateRange"]').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        locale: {
          cancelLabel: "Clear",
        },
      });
      jQuery('input[name="dateRange"]').on(
        "apply.daterangepicker",
        function (ev, picker) {
          jQuery(this).val(picker.startDate.format("MM/DD/YYYY"));
        }
      );
      jQuery('input[name="dateRange"]').on(
        "cancel.daterangepicker",
        function (ev, picker) {
          jQuery(this).val("");
        }
      );
    });

    // Function to update live date and time
    function updateLiveDateTime() {
      var now = new Date();
      var dateTimeString = now.toLocaleString("en-US", {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
        second: "numeric",
        hour12: true,
      });
      document.getElementById("liveDateTime").textContent = dateTimeString;
    }

    // Update live date and time every second
    setInterval(updateLiveDateTime, 1000);

    // Initial call to update live date and time
    updateLiveDateTime();
  </script>

  <script src="js/mono.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/map.js"></script>
  <script src="js/custom.js"></script>

  <script src="plugins/fullcalendar/core-4.3.1/main.min.js"></script>
  <script src="plugins/fullcalendar/daygrid-4.3.0/main.min.js"></script>
  <script src="js/calendar.js"></script>

  <!--  -->
</body>

</html>