
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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

    $m_id = $_POST['m_id'];
    $m_mail = $_POST['m_mail'];
    $m_tel = $_POST['m_tel'];
    $m_pass = $_POST['m_pass'];
    $m_pass = openssl_encrypt($m_pass, "AES-128-ECB", DONE);

if(empty($_FILES['profile']['name'])||empty($m_tel)||empty($m_id)||empty($m_pass)) {

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
                        
        $sql="UPDATE admin set mail='$m_mail',tel='$m_tel',password='$m_pass',profile='$new_file_name' where user_id='$m_id'";

                if ($conn->query($sql)===TRUE) 
                {
                    ?>
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        <span class="badge badge-pill badge-success">Done</span> You have succeffuly update Profile and Settings Data .
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
                            Sorry Something went wrong. Please try again and try to rename the picture you was uploading.
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