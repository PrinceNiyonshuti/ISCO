<!DOCTYPE html>



<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="E-Water Supply ">
    <meta name="author" content="E-Water Supply System Done by Nikao Company">
    <meta name="keywords" content="E-Water Supply System">

    <title>SHIFT MS :: Admin</title>

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
    
    $sup_name=$_POST['sup_name'];
    $sup_mail=$_POST['sup_mail'];
    $sup_tel=$_POST['sup_tel'];
    $sup_gender=$_POST['sup_gender'];

    $sup_pass = openssl_encrypt($sup_tel, "AES-128-ECB", DONE);

$query=$conn->query("SELECT tel FROM supervisor where tel='$sup_tel'");
if($query->num_rows == 1){
?>
<div style="width: 100%;float: left;padding: 10px;">
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" >
        <span class="badge badge-pill badge-danger">Error</span>
            Sorry Supervisor <strong><?php echo "$sup_name"; ?></strong> with same number is already registered.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
</div>
<?php
    }

    else if(empty($_FILES['profile']['name'])||empty($sup_name)||empty($sup_mail)||empty($sup_tel)||empty($sup_gender)) {

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


        if(move_uploaded_file($file_location, "../../supervisor/supervisor_profile/" . $new_file_name)){
                            
            $sql=" INSERT INTO `supervisor`(`username`, `password`, `supervisor_name`, `gender`, `u_type_id`, `tel`, `mail`, `profile`) 
            VALUES ('$sup_tel','$sup_pass','$sup_name','$sup_gender','2','$sup_tel','$sup_mail','$new_file_name') ";
                    if ($conn->query($sql)===TRUE) 
                    {
                        ?>
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Done</span> You have succeffuly Created <strong><?php echo $sup_name ; ?></strong> Account.
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