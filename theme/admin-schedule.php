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

  <title>ChronoLock Admin-Schedule</title>

  <?php include 'head.php' ?>
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
          <a href="index.php">
            <img src="images/logo.png" alt="Mono" />
            <span class="brand-name">ChronoLock</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">

            <li class="section-title">Dashboard</li>

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

            <li>
              <a class="sidenav-item-link" href="admin-user-management.php">
                <i class="mdi mdi-account-circle"></i>
                <span class="nav-text" data-toggle="tooltip" title="Users">Users</span>
              </a>
            </li>

            <!-- Horizontal line with custom class -->
            <hr class="my-2 custom-hr">

            <li class="section-title">Features</li>


            <li class="active">
              <a class="sidenav-item-link" href="admin-schedule.php">
                <i class="mdi mdi-calendar-today "></i>
                <span class="nav-text" data-toggle="tooltip" title="Schedule">Schedule</span>
              </a>
            </li>

            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users" aria-expanded="false" aria-controls="users">
                <i class="mdi mdi-book-open-page-variant"></i>
                <span class="nav-text" data-toggle="tooltip" title="Attendance">Attendance</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="users" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li>
                    <a class="sidenav-item-link" href="admin-studattendance.php">
                      <span class="nav-text">Student Attendance</span>

                    </a>
                  </li>

                  <li>
                    <a class="sidenav-item-link" href="admin-instattendance.php">
                      <span class="nav-text">Instructor Attendance</span>

                    </a>
                  </li>
            </li>
        </div>
        </ul>
        </li>

        <li>
          <a class="sidenav-item-link" href="admin-rfidaccount.php">
            <i class="mdi mdi-radio-tower"></i>
            <span class="nav-text" data-toggle="tooltip" title="RFID Accounts">RFID Accounts</span>
          </a>
        </li>

        <!-- Horizontal line with custom class -->
        <hr class="my-2 custom-hr">

        <li class="section-title">Others</li>

        <li>
          <a class="sidenav-item-link" href="">
            <i class="mdi mdi-alpha-l-box "></i>
            <span class="nav-text" data-toggle="tooltip" title="Logs">Logs</span>
          </a>
        </li>

        <li>
          <a class="sidenav-item-link" href="">
            <i class="mdi mdi-file-export"></i>
            <span class="nav-text" data-toggle="tooltip" title="Report Generation">Report Generation</span>
          </a>
        </li>

        </ul>
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

      <div class="d-flex justify-content-between align-items-center">
          <!-- Navigation -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="admin-schedule.php">Schedule</a></li>
            </ol>
          </nav>

          <!-- Live Date and Time -->
          <div>
            <p class="text-center date-time mb-3" id="liveDateTime">Your Date and Time</p>
          </div>
        </div>


        <div class="card card-default">
          <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
            <h1>Schedule</h1>
            <div class="row">
              <div class="col-xl-12 col-md-12 d-flex justify-content-end">
                <!-- Sort button -->
                <div class="dropdown d-inline-block mb-3 mr-3">
                  <button class="btn btn-primary fw-bold" type="button" data-toggle="modal" data-target="#modal-add-event">
                    <i class=" mdi mdi-calendar-plus"></i>
                    ADD SCHEDULE
                  </button>
                </div>
                <div class="dropdown d-inline-block mb-3">
                  <button class="btn btn-warning fw-bold" type="button">
                    <i class="mdi mdi-cloud-print-outline"></i>
                    PRINT
                  </button>
                </div>
              </div>
            </div>
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
  <div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
              <input type="text" class="form-control  border border-dark" value="Meeting" />
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="firstName">Date</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend border border-dark">
                      <span class="input-group-text py-1">
                        <i class="mdi mdi-calendar-range"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control  border border-dark" name="dateRange" value="" placeholder="Date" />
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="exampleFormControlSelect3">Time</label>
                  <select class="form-control  border border-dark" id="exampleFormControlSelect3">
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
              <textarea class="form-control  border border-dark" id="exampleFormControlTextarea1" rows="5"></textarea>
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

  <?php include 'footer.php' ?>