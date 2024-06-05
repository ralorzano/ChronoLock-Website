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

  <!-- DATA TABLE -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/rowreorder/1.5.0/css/rowReorder.bootstrap5.css" rel="stylesheet">

  <script defer src="js/dataTable.js"></script>

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

        <li class="active">
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
            <h1>RFID Accounts</h1>
          </div>
          <div class="card-body ">
            <table id="example" class="table table-bordered table-hover" style="width:100%">
              <thead class="table-dark">
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011-04-25</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td>2011-07-25</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td>2009-01-12</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2012-03-29</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>33</td>
                  <td>2008-11-28</td>
                  <td>$162,700</td>
                </tr>
                <tr>
                  <td>Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>61</td>
                  <td>2012-12-02</td>
                  <td>$372,000</td>
                </tr>
                <tr>
                  <td>Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>59</td>
                  <td>2012-08-06</td>
                  <td>$137,500</td>
                </tr>
                <tr>
                  <td>Rhona Davidson</td>
                  <td>Integration Specialist</td>
                  <td>Tokyo</td>
                  <td>55</td>
                  <td>2010-10-14</td>
                  <td>$327,900</td>
                </tr>
                <tr>
                  <td>Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>San Francisco</td>
                  <td>39</td>
                  <td>2009-09-15</td>
                  <td>$205,500</td>
                </tr>
                <tr>
                  <td>Sonya Frost</td>
                  <td>Software Engineer</td>
                  <td>Edinburgh</td>
                  <td>23</td>
                  <td>2008-12-13</td>
                  <td>$103,600</td>
                </tr>
                <tr>
                  <td>Jena Gaines</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>30</td>
                  <td>2008-12-19</td>
                  <td>$90,560</td>
                </tr>
                <tr>
                  <td>Quinn Flynn</td>
                  <td>Support Lead</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2013-03-03</td>
                  <td>$342,000</td>
                </tr>
                <tr>
                  <td>Charde Marshall</td>
                  <td>Regional Director</td>
                  <td>San Francisco</td>
                  <td>36</td>
                  <td>2008-10-16</td>
                  <td>$470,600</td>
                </tr>
                <tr>
                  <td>Haley Kennedy</td>
                  <td>Senior Marketing Designer</td>
                  <td>London</td>
                  <td>43</td>
                  <td>2012-12-18</td>
                  <td>$313,500</td>
                </tr>
                <tr>
                  <td>Tatyana Fitzpatrick</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td>19</td>
                  <td>2010-03-17</td>
                  <td>$385,750</td>
                </tr>
                <tr>
                  <td>Michael Silva</td>
                  <td>Marketing Designer</td>
                  <td>London</td>
                  <td>66</td>
                  <td>2012-11-27</td>
                  <td>$198,500</td>
                </tr>
                <tr>
                  <td>Paul Byrd</td>
                  <td>Chief Financial Officer (CFO)</td>
                  <td>New York</td>
                  <td>64</td>
                  <td>2010-06-09</td>
                  <td>$725,000</td>
                </tr>
                <tr>
                  <td>Gloria Little</td>
                  <td>Systems Administrator</td>
                  <td>New York</td>
                  <td>59</td>
                  <td>2009-04-10</td>
                  <td>$237,500</td>
                </tr>
                <tr>
                  <td>Bradley Greer</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>41</td>
                  <td>2012-10-13</td>
                  <td>$132,000</td>
                </tr>
                <tr>
                  <td>Dai Rios</td>
                  <td>Personnel Lead</td>
                  <td>Edinburgh</td>
                  <td>35</td>
                  <td>2012-09-26</td>
                  <td>$217,500</td>
                </tr>
                <tr>
                  <td>Jenette Caldwell</td>
                  <td>Development Lead</td>
                  <td>New York</td>
                  <td>30</td>
                  <td>2011-09-03</td>
                  <td>$345,000</td>
                </tr>
                <tr>
                  <td>Yuri Berry</td>
                  <td>Chief Marketing Officer (CMO)</td>
                  <td>New York</td>
                  <td>40</td>
                  <td>2009-06-25</td>
                  <td>$675,000</td>
                </tr>
                <tr>
                  <td>Caesar Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>New York</td>
                  <td>21</td>
                  <td>2011-12-12</td>
                  <td>$106,450</td>
                </tr>
                <tr>
                  <td>Doris Wilder</td>
                  <td>Sales Assistant</td>
                  <td>Sydney</td>
                  <td>23</td>
                  <td>2010-09-20</td>
                  <td>$85,600</td>
                </tr>
                <tr>
                  <td>Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td>47</td>
                  <td>2009-10-09</td>
                  <td>$1,200,000</td>
                </tr>
                <tr>
                  <td>Gavin Joyce</td>
                  <td>Developer</td>
                  <td>Edinburgh</td>
                  <td>42</td>
                  <td>2010-12-22</td>
                  <td>$92,575</td>
                </tr>
                <tr>
                  <td>Jennifer Chang</td>
                  <td>Regional Director</td>
                  <td>Singapore</td>
                  <td>28</td>
                  <td>2010-11-14</td>
                  <td>$357,650</td>
                </tr>
                <tr>
                  <td>Brenden Wagner</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>28</td>
                  <td>2011-06-07</td>
                  <td>$206,850</td>
                </tr>
                <tr>
                  <td>Fiona Green</td>
                  <td>Chief Operating Officer (COO)</td>
                  <td>San Francisco</td>
                  <td>48</td>
                  <td>2010-03-11</td>
                  <td>$850,000</td>
                </tr>
                <tr>
                  <td>Shou Itou</td>
                  <td>Regional Marketing</td>
                  <td>Tokyo</td>
                  <td>20</td>
                  <td>2011-08-14</td>
                  <td>$163,000</td>
                </tr>
                <tr>
                  <td>Michelle House</td>
                  <td>Integration Specialist</td>
                  <td>Sydney</td>
                  <td>37</td>
                  <td>2011-06-02</td>
                  <td>$95,400</td>
                </tr>
                <tr>
                  <td>Suki Burks</td>
                  <td>Developer</td>
                  <td>London</td>
                  <td>53</td>
                  <td>2009-10-22</td>
                  <td>$114,500</td>
                </tr>
                <tr>
                  <td>Prescott Bartlett</td>
                  <td>Technical Author</td>
                  <td>London</td>
                  <td>27</td>
                  <td>2011-05-07</td>
                  <td>$145,000</td>
                </tr>
                <tr>
                  <td>Gavin Cortez</td>
                  <td>Team Leader</td>
                  <td>San Francisco</td>
                  <td>22</td>
                  <td>2008-10-26</td>
                  <td>$235,500</td>
                </tr>
                <tr>
                  <td>Martena Mccray</td>
                  <td>Post-Sales support</td>
                  <td>Edinburgh</td>
                  <td>46</td>
                  <td>2011-03-09</td>
                  <td>$324,050</td>
                </tr>
                <tr>
                  <td>Unity Butler</td>
                  <td>Marketing Designer</td>
                  <td>San Francisco</td>
                  <td>47</td>
                  <td>2009-12-09</td>
                  <td>$85,675</td>
                </tr>
                <tr>
                  <td>Howard Hatfield</td>
                  <td>Office Manager</td>
                  <td>San Francisco</td>
                  <td>51</td>
                  <td>2008-12-16</td>
                  <td>$164,500</td>
                </tr>
                <tr>
                  <td>Hope Fuentes</td>
                  <td>Secretary</td>
                  <td>San Francisco</td>
                  <td>41</td>
                  <td>2010-02-12</td>
                  <td>$109,850</td>
                </tr>
                <tr>
                  <td>Vivian Harrell</td>
                  <td>Financial Controller</td>
                  <td>San Francisco</td>
                  <td>62</td>
                  <td>2009-02-14</td>
                  <td>$452,500</td>
                </tr>
                <tr>
                  <td>Timothy Mooney</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>37</td>
                  <td>2008-12-11</td>
                  <td>$136,200</td>
                </tr>
                <tr>
                  <td>Jackson Bradshaw</td>
                  <td>Director</td>
                  <td>New York</td>
                  <td>65</td>
                  <td>2008-09-26</td>
                  <td>$645,750</td>
                </tr>
                <tr>
                  <td>Olivia Liang</td>
                  <td>Support Engineer</td>
                  <td>Singapore</td>
                  <td>64</td>
                  <td>2011-02-03</td>
                  <td>$234,500</td>
                </tr>
                <tr>
                  <td>Bruno Nash</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>38</td>
                  <td>2011-05-03</td>
                  <td>$163,500</td>
                </tr>
                <tr>
                  <td>Sakura Yamamoto</td>
                  <td>Support Engineer</td>
                  <td>Tokyo</td>
                  <td>37</td>
                  <td>2009-08-19</td>
                  <td>$139,575</td>
                </tr>
                <tr>
                  <td>Thor Walton</td>
                  <td>Developer</td>
                  <td>New York</td>
                  <td>61</td>
                  <td>2013-08-11</td>
                  <td>$98,540</td>
                </tr>
                <tr>
                  <td>Finn Camacho</td>
                  <td>Support Engineer</td>
                  <td>San Francisco</td>
                  <td>47</td>
                  <td>2009-07-07</td>
                  <td>$87,500</td>
                </tr>
                <tr>
                  <td>Serge Baldwin</td>
                  <td>Data Coordinator</td>
                  <td>Singapore</td>
                  <td>64</td>
                  <td>2012-04-09</td>
                  <td>$138,575</td>
                </tr>
                <tr>
                  <td>Zenaida Frank</td>
                  <td>Software Engineer</td>
                  <td>New York</td>
                  <td>63</td>
                  <td>2010-01-04</td>
                  <td>$125,250</td>
                </tr>
                <tr>
                  <td>Zorita Serrano</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>56</td>
                  <td>2012-06-01</td>
                  <td>$115,000</td>
                </tr>
                <tr>
                  <td>Jennifer Acosta</td>
                  <td>Junior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>43</td>
                  <td>2013-02-01</td>
                  <td>$75,650</td>
                </tr>
                <tr>
                  <td>Cara Stevens</td>
                  <td>Sales Assistant</td>
                  <td>New York</td>
                  <td>46</td>
                  <td>2011-12-06</td>
                  <td>$145,600</td>
                </tr>
                <tr>
                  <td>Hermione Butler</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td>47</td>
                  <td>2011-03-21</td>
                  <td>$356,250</td>
                </tr>
                <tr>
                  <td>Lael Greer</td>
                  <td>Systems Administrator</td>
                  <td>London</td>
                  <td>21</td>
                  <td>2009-02-27</td>
                  <td>$103,500</td>
                </tr>
                <tr>
                  <td>Jonas Alexander</td>
                  <td>Developer</td>
                  <td>San Francisco</td>
                  <td>30</td>
                  <td>2010-07-14</td>
                  <td>$86,500</td>
                </tr>
                <tr>
                  <td>Shad Decker</td>
                  <td>Regional Director</td>
                  <td>Edinburgh</td>
                  <td>51</td>
                  <td>2008-11-13</td>
                  <td>$183,000</td>
                </tr>
                <tr>
                  <td>Michael Bruce</td>
                  <td>Javascript Developer</td>
                  <td>Singapore</td>
                  <td>29</td>
                  <td>2011-06-27</td>
                  <td>$183,000</td>
                </tr>
                <tr>
                  <td>Donna Snider</td>
                  <td>Customer Support</td>
                  <td>New York</td>
                  <td>27</td>
                  <td>2011-01-25</td>
                  <td>$112,000</td>
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