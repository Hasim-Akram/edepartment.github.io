<?php
  
  session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Department</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->


  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">-->
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="edep.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">E-Department</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['username']; ?></h6>
              <span>Web Developer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="edep.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="edep.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="edep.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->





  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="edep.php">
          <i class="bi bi-grid"></i>
          <span>Office Structure</span>
        </a>
      </li><!-- End Dashboard Nav -->








<!--

      <li class="nav-item pe-3 ">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Offices</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          
           <li class="nav-item dropdown" >
              <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent1" aria-expanded="false"><span>
               Head Quater</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul class="collapse" id="navbarToggleExternalContent1"  aria-labelledby="navbarScrollingDropdown">

                <li><a class="dropdown-item" href="#">Departments</a></li>
                <li><hr class="dropdown-divider"></li>

                
              </ul>
            </li>
            <li class="nav-item dropdown" >
              <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent2" aria-expanded="false"><span>
               Madhabdi Zonal Office</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul class="collapse" id="navbarToggleExternalContent2"  aria-labelledby="navbarScrollingDropdown">

                <li><a class="dropdown-item" href="#">Departments</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">IT</a></li>
                
                <li><a class="dropdown-item" href="#">O&M</a></li>
            
                <li><a class="dropdown-item" href="#">E&C</a></li>
               
                <li><a class="dropdown-item" href="#">Admin</a></li>
           
                <li><a class="dropdown-item" href="#">HR</a></li>
              
                <li><a class="dropdown-item" href="#">MS</a></li>
              
                <li><a class="dropdown-item" href="#">FI</a></li>
          
                <li><a class="dropdown-item" href="#">Other</a></li>
                <li><hr class="dropdown-divider"></li>
                
              </ul>
            </li>
             <li class="nav-item dropdown" >
              <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent3" aria-expanded="false"><span>
               Gorashal Zonal Office</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul class="collapse" id="navbarToggleExternalContent3"  aria-labelledby="navbarScrollingDropdown">

                <li><a class="dropdown-item" href="#">Departments</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">IT</a></li>
              
                <li><a class="dropdown-item" href="#">O&M</a></li>
               
                <li><a class="dropdown-item" href="#">E&C</a></li>
            
                <li><a class="dropdown-item" href="#">Admin</a></li>
             
                <li><a class="dropdown-item" href="#">HR</a></li>
              
                <li><a class="dropdown-item" href="#">MS</a></li>
              
                <li><a class="dropdown-item" href="#">FI</a></li>
             
                <li><a class="dropdown-item" href="#">Other</a></li>
           
                
              </ul>
            </li>
             <li class="nav-item dropdown" >
              <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent4" aria-expanded="false"><span>
               Taltoli Zonal Office</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul class="collapse" id="navbarToggleExternalContent4"  aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Departments</a></li>
                <li>
                 <a href="office.php" class="dropdown-item btn btn-outline-info"> 

                  <span>Add New Department</span>
                </a>
              </li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">IT</a></li>
            
                <li><a class="dropdown-item" href="#">O&M</a></li>
 
                <li><a class="dropdown-item" href="#">E&C</a></li>
            
                <li><a class="dropdown-item" href="#">Admin</a></li>
          
                <li><a class="dropdown-item" href="#">HR</a></li>
              
                <li><a class="dropdown-item" href="#">MS</a></li>
             
                <li><a class="dropdown-item" href="#">FI</a></li>
              
                <li><a class="dropdown-item" href="#">Other</a></li>
                
                
                
              </ul>
            </li>



              <li>
                 <a href="office.php" class="btn btn-outline-info"> 

                  <span>Add New Office</span>
                </a>
              </li>
          
         
        </ul>
      </li> End Components Nav -->






   


<!-- 

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-navee" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add New Device </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-navee" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          <li>
            <a href="device.php">
              <i class="bi bi-circle"></i><span>Add New Network Device</span>
            </a>
          </li>
          
        </ul>
      </li>End Forms Nav 
       
-->

     


       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-navss" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add Office Information</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-navss" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="pbs.php">
              <i class="bi bi-circle"></i><span>Add PBS</span>
            </a>
          </li>
          <li>
            <a href="office.php">
              <i class="bi bi-circle"></i><span>Add Office</span>
            </a>
          </li>
                

                                                        

           <li>
            <a href="department.php">

              <i class="bi bi-circle"></i><span>Add Department</span>
            </a>

          
              
              
          </li>
      



         
          
        </ul>
      </li><!-- End Forms Nav -->


       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-naveed" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add Network</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-naveed" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          <li>
            <a href="network.php">
              <i class="bi bi-circle"></i><span>Assinged Office IP</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Forms Nav -->


         <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-navff" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add New Employee</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-navff" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="emp.php">
              <i class="bi bi-circle"></i><span>Add New Employee</span>
            </a>
          </li>
          
          
        </ul>
      </li><!-- End Forms Nav -->








      

                  

                  <li class="nav-heading">Pages</li>

                    <li class="nav-item">
                      <a class="nav-link collapsed" href="emp.php">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                      </a>
                    </li><!-- End Profile Page Nav -->

                   


                    <li class="nav-item">
                      <a class="nav-link collapsed" href="account_create.php">
                        <i class="bi bi-card-list"></i>
                        <span>Register</span>
                      </a>
                    </li><!-- End Register Page Nav -->

                    <li class="nav-item">
                      <a class="nav-link collapsed" href="login.php">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Login</span>
                      </a>
                    </li><!-- End Login Page Nav -->

                    <li class="nav-item">
                      <a class="nav-link collapsed" href="pages-error-404.php">
                        <i class="bi bi-dash-circle"></i>
                        <span>Error 404</span>
                      </a>
                    </li><!-- End Error 404 Page Nav -->

                   

                  </ul>

                </aside><!-- End Sidebar-->

                <main id="main" class="main">

                  <div class="pagetitle">
                    <h1>Office Overview</h1>
                    <nav>
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="edep.php">Home</a></li>
                        <li class="breadcrumb-item active">Structure</li>
                      </ol>
                    </nav>
                  </div><!-- End Page Title -->


     



  </main><!-- End #main -->

 



    <!-- Vendor JS Files -->

 
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="assets/js/main.js"></script>





  </body>

</html>