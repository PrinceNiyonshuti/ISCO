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
    
    $sec_name=$_POST['sec_name'];
    $sec_dob=$_POST['sec_dob'];
    $sec_gender=$_POST['sec_gender'];
    $sec_mail=$_POST['sec_mail'];
    $sec_tel=$_POST['sec_tel'];
    $save_date= date('Y-m-d h:i:sa');
    $secure = (rand(0001,9999));
    $sec_Code ="ISCO-".$secure;

$query=$conn->query("SELECT sec_tel FROM security where sec_tel='$sec_tel'");
if($query->num_rows == 1){
?>
<div style="width: 100%;float: left;padding: 10px;">
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" >
        <span class="badge badge-pill badge-danger">Error</span>
            Sorry Security <strong><?php echo "$sec_name"; ?></strong> with same number is already registered.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
</div>
<?php
    }

    else if(empty($_FILES['profile']['name'])||empty($sec_name)||empty($sec_dob)||empty($sec_gender)||empty($sec_mail)) {

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


        if(move_uploaded_file($file_location, "../../security/security_profile/" . $new_file_name)){
                            
            $sql=" INSERT INTO `security`(`sec_code`, `sec_names`, `sec_gender`, `sec_dob`, `sec_tel`, `sec_email`, `profile`, `reg_date`) 
            VALUES ('$sec_Code','$sec_name','$sec_gender','$sec_dob','$sec_tel','$sec_mail','$new_file_name','$save_date') ";
                    if ($conn->query($sql)===TRUE) 
                    {
                        ?>
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Done</span> You have succeffuly Created <strong><?php echo $sec_name ; ?></strong> Security.
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