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

  <title>ChronoLock Admin-RFID Account</title>

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


            <li>
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
                    <a class="sidenav-item-link" href="admin-instattendance.php">
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

        <li class="active">
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
              <li class="breadcrumb-item active"><a href="admin-logs.php">Logs</a></li>
            </ol>
          </nav>

          <!-- Live Date and Time -->
          <div>
            <p class="text-center date-time mb-3" id="liveDateTime">Your Date and Time</p>
          </div>
        </div>


        <div class="card card-default">
          <div class="card-header">
            <h1>Logs</h1>
          </div>
          <div class="card-body col-md-12">
            <table id="example" class="table table-bordered table-hover nowrap" style="width:100%">
              <thead class="table-dark">
                <tr>
                  <th>User Logs</th>
                  <th>Actions performed</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>User Type</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>User Logs</td>
                  <td>Actions performed</th>
                  <td>Date</td>
                  <td>Time</td>
                  <td>User Type</td>
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

  <?php include 'footer.php' ?>