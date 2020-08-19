<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    include "config/config.php";
        if(ISSET($_POST['security_code'])){

          $sec_code=$_POST['sec_code'];
          $today= date('Y-m-d');
          $entrance_time= date('h:i:sa');
          $exit_time= date('h:i:sa');

          if (empty($sec_code)) {
             echo '<script language="javascript">
                alert(" Sorry , Enter your Security Code ");
                window.location.href = "attendance.php";
              </script>';
          } else {
            
            $query=$conn->query("SELECT * FROM security where sec_code='$sec_code'");
            if($query->num_rows == 1){

                while ($row = $query->fetch_assoc()) {
                  $sec_id=$row['sec_id'];
                  $site_id=$row['site_id'];
                }

                $query_1=$conn->query(" SELECT * FROM `shifts_record` WHERE sec_code='$sec_code' AND shift_date='$today' AND end_time IS NULL ");
                if($query_1->num_rows == 1){

                    $sql1=" SELECT * FROM `shifts_record` WHERE sec_code='ISCO-3272' AND end_time IS NULL  ";
                    $result1=$conn->query($sql1);
                    while ($row1 = $result1->fetch_assoc()) {
                      $shift_id=$row1['shift_id'];
                    }

                    $sql_2=" UPDATE shifts_record SET end_time='$exit_time' WHERE shift_id='$shift_id' ";

                      if ($conn->query($sql_2)===TRUE) 
                      {
                        echo '<script language="javascript">
                            alert(" Record Update Succefully And Sent ");
                            window.location.href = "attendance.php";
                          </script>';
                      } else{

                        echo '<script language="javascript">
                            alert(" Something Went Wrong ");
                            window.location.href = "attendance.php";
                          </script>';
                      }

                }else{

                  $sql_2=" INSERT INTO `shifts_record`(`sec_code`, `site_id`, `start_time`, `shift_date`) 
                  VALUES ('$sec_code','$site_id','$entrance_time','$today') ";

                      if ($conn->query($sql_2)===TRUE) 
                      {
                        echo '<script language="javascript">
                            alert(" Record Succefully Sent ");
                            window.location.href = "attendance.php";
                          </script>';
                      } else{

                        echo '<script language="javascript">
                            alert(" Something Went Wrong ");
                            window.location.href = "attendance.php";
                          </script>';
                      }
                }


            }else{
              echo '<script language="javascript">
                alert(" Sorry , Security Doesnt Match In our System ");
                window.location.href = "attendance.php";
              </script>';
            }
          }
        }
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SHIFT MS - Attendance</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Attendance Check</h1>
                    <p class="mb-4">Please Enter Your Security Code</p>
                  </div>
                  <p id="Message1"></p>
                  <form action="attendance.php"  method="post" >
                    <div id="alert1"></div>
                    <div class="form-group">
                      <input type="text" name="sec_code" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Security Code">
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="Submit" name="security_code">
                      Submit Code
                    </button>
                    <!-- <a href="#" class="btn btn-primary btn-user btn-block">
                      Submit Code
                    </a> -->
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="index.php">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <script src="js/main_activity.js"></script>

</body>

</html>
