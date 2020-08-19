<?php

include "../config/config.php";

session_start();

// For logout

if(isset($_GET["sign"]))
{
  $sign=$_GET["sign"];
  if($sign=="out")
  {
        unset($_SESSION["ISC0_SHIFT_MS_2020_SUPERVISOR"]);
    
    header("location:../index.php");}
    }
    

// For checking if the user logged in

if(isset($_SESSION['ISC0_SHIFT_MS_2020_SUPERVISOR']) == false){
    header("Location:../index.php");
}else{
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SHIFT MS  :: Supervisor</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php

    $sql5="SELECT * from supervisor where username='$_SESSION[ISC0_SHIFT_MS_2020_SUPERVISOR]'";
    $result5=$conn->query($sql5);
    while ($row5 = $result5->fetch_assoc()) {
    $m_id=$row5['supervisor_id'];
    $m_names=$row5['supervisor_name'];
    $m_username=$row5['username'];
    $m_pass=$row5['password'];
    $m_tel=$row5['tel'];
    $m_mail=$row5['mail'];
    $m_profile=$row5['profile'];
    $site_id=$row5['site_id'];

    $sql_1=" SELECT * from site where site_id='$site_id' ";
    $result_1=$conn->query($sql_1);
    while ($row_1 = $result_1->fetch_assoc()) {
      $site_name=$row_1['site_name'];
    }

    if (empty($m_profile)) {
        $fileName = "user-avatar.jpg";
    } else {
        $fileName = "$m_profile";
    }

    }
  ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <!-- <i class="fas fa-tint"></i> -->
          <img src="../assets/img/logo.png" width="100%">
        </div>
        <div class="sidebar-brand-text mx-3">SHIFT MS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-users"></i>
          <span>Security</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Security Action</h6>
            <a class="collapse-item" href="index.php?view-security">View Security</a>
            <a class="collapse-item" href="index.php?view-security-shifts-data">Security Shifts</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_4" aria-expanded="true" aria-controls="collapseUtilities_4">
          <i class="fas fa-fw fa-building"></i>
          <span>Shifts</span>
        </a>
        <div id="collapseUtilities_4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Shifts Action :</h6>
            <a class="collapse-item" href="index.php?assign-shift">Assign Shift</a>
            <a class="collapse-item" href="index.php?view-shift-assigned">View Shifts</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_1" aria-expanded="true" aria-controls="collapseUtilities_1">
          <i class="fas fa-fw fa-building"></i>
          <span>Shift Records</span>
        </a>
        <div id="collapseUtilities_1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Records Action :</h6>
            <a class="collapse-item" href="index.php?view-shift-records">View All Records</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $m_names ?></span>
                <img class="img-profile rounded-circle" src="supervisor_profile/<?php echo $fileName ?>" alt="<?php echo $m_names ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="index.php?profile">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="index.php?settings">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"  data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

  <?php
     if(isset($_GET['home']))
    {
      include("home.php");
    }

    // security

    elseif(isset($_GET['view-security']))
      {           
        include("view_security.php");
      }

    elseif(isset($_GET['view-security-shifts-data']))
      {           
        include("view_security_shift_data.php");
      }

    elseif(isset($_GET['assign-shift']))
      {           
        include("assign_shift.php");
      }

    // shift assign  

    elseif(isset($_GET['shift-assignment']))
      {           
        include("shift_assignment.php");
      }

    elseif(isset($_GET['update-shift-assignment']))
      {           
        include("update_shift_assignment.php");
      }

    elseif(isset($_GET['view-shift-assigned']))
      {           
        include("view_security_shifts.php");   
      } 

    elseif(isset($_GET['view-shift-records']))
      {           
        include("all_site_shift_records.php");   
      }

    elseif(isset($_GET['view-person-sec-records']))
      {           
        include("view_personal_shift_records.php");   
      }

    //********************************************************************

    elseif(isset($_GET[' ']))
      {           
        include(" ");
      }

    else
    {
      include("home.php");
    }
  ?> 

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; shift.isco.co.com 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="?sign=out" id="logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../assets/js/demo/chart-area-demo.js"></script>
  <script src="../assets/js/demo/chart-pie-demo.js"></script>

  <!-- Main Activity scipts -->
  <script src="../js/main_activity.js"></script>


</body>

</html>
<?php
}
?>