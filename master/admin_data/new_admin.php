<!DOCTYPE html>



<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="E-Water Supply ">
    <meta name="author" content="E-Water Supply System Done by Nikao Company">
    <meta name="keywords" content="E-Water Supply System">

    <title>E - Water Supply :: Admin</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../assets/js/demo/chart-area-demo.js"></script>
    <script src="../../assets/js/demo/chart-pie-demo.js"></script>

    <!-- MAIN ACTIVITY  -->
    <script src="../../js/main_activity.js"></script>
</head>

<body>


<?php
include "../../config/config.php";
?>

<?php 
    
    $admin_name=$_POST['admin_name'];
    $admin_Uname=$_POST['admin_Uname'];
    $admin_mail=$_POST['admin_mail'];
    $admin_tel=$_POST['admin_tel'];
    $admin_pass=$_POST['admin_pass'];
    $admin_type=$_POST['admin_type'];

    $admin_pass = openssl_encrypt($admin_pass, "AES-128-ECB", DONE);

$query=$conn->query("SELECT username from company_user where username='$admin_Uname'");
if($query->num_rows == 1){
?>
<div style="width: 100%;float: left;padding: 10px;">
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" >
        <span class="badge badge-pill badge-danger">Error</span>
            Sorry <strong><?php echo "$admin_Uname"; ?></strong> is already been taken.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
</div>
<?php
    }

    else if(empty($_FILES['profile']['name'])||empty($admin_Uname)||empty($admin_name)||empty($admin_mail)||empty($admin_pass)) {

    ?>
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            <span class="badge badge-pill badge-danger">Alert</span> You have not filled all fields .
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="" onclick="location.reload();">
            <span aria-hidden="true">&times;</span>
            </button>
            <br>
        </div>
    <?php  
    }
    else
    {

        $profile=$_FILES['profile'];
        $file_name = $_FILES['profile']['name'];    
        $file_location = $_FILES['profile']['tmp_name'];
        $new_file_name = "$file_name";


        if(move_uploaded_file($file_location, "../master_profile/" . $new_file_name)){
                            
            $sql="INSERT INTO user( `username`, `password`,`names`,`u_type_id`,`tel`,`mail`,`profile`)
                
                VALUE('$admin_Uname','$admin_pass','$admin_name','$admin_type','$admin_tel','$admin_mail','$new_file_name')";
                    if ($conn->query($sql)===TRUE) 
                    {
                        ?>
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Done</span> You have succeffuly Created <strong><?php echo $admin_Uname ; ?></strong> Admin Account.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="" onclick="location.reload();">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <br>
                        </div>
                        <?php

                    }
                    else
                    {
                            ?>
                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                <span class="badge badge-pill badge-danger">Error</span>
                                Sorry Something went wrong. Please try again .
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <?php
                    }
                }
}
         
    ?>

</body>
</html>