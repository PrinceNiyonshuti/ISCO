<!DOCTYPE html>
<html lang="en">

<head>

     <link rel="apple-touch-icon" href="asset/images/log.png">
    <link rel="shortcut icon" href="asset/images/log.png"> 

    <link rel="stylesheet" href="asset/css/normalize.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/themify-icons.css">
<link rel="stylesheet" href="asset/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="asset/css/flag-icon.min.css">
    <link rel="stylesheet" href="asset/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="asset/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="asset/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

 <script src="js/jquery-3.2.1.min.js"></script>
<script src="js/princeop.js"></script>

</head>

<body>


<?php
include "../../config/config.php";
?>

<?php

session_start();

        $username=$_POST["username"];
        //$password=md5($_POST['password']);
        $passwor=$_POST['password'];
        $username = stripslashes($username);
        $passwor = stripslashes($passwor);
        $username = mysqli_real_escape_string($conn,$username);
        $passwor = mysqli_real_escape_string($conn,$passwor);
        $d = date("Y-m-d");
        $t = date("H:i:s");
         //Get current date and time
        
    if(empty($username) || empty($passwor)){
        ?>
        <div class="alert alert-danger" role="alert">
        <i class='fa fa-times-circle'></i> Invalid username or password
            </div>
        <?php
    }else{
    
    
    $password = openssl_encrypt($passwor, "AES-128-ECB", DONE);
    
    
//ADMIN    
    

$query=$conn->query("SELECT * from admin where username='$username' and password='$password' and u_type_id=1 ");
if($query->num_rows === 1){

$sql1="SELECT * from admin where username like '$username'";
$result1=$conn->query($sql1);

if ($row1 = $result1->fetch_assoc()) {
  
    $username_real=$row1['username'];
    $password_real=$row1['password'];


}

if ($username===$username_real and $password===$password_real){

        $_SESSION['ISC0_SHIFT_MS_2020_MASTER']=$username;
       
        ?>
        <div class="alert alert-success" role="alert">
        <i class='fa  fa-check-circle'></i> Login successfull. Redirecting ...
            </div>
        <?php
        echo "<script>location.href='master/index.php'</script>";


}else{
      ?>
      <div class="alert alert-danger" role="alert">
      <i class='fa fa-times-circle'></i> Invalid username or password 
       </div>
      <?php
}

}
    

//END ADMIN    
    

// COMPANY

else{
      
$query1=$conn->query("SELECT * from supervisor where username='$username' and password='$password' and u_type_id=2 ");
if($query1->num_rows == 1){

$sql2="SELECT * from supervisor where username like '$username'";
$result2=$conn->query($sql2);

if ($row2 = $result2->fetch_assoc()) {
  
    $username_real=$row2['username'];
    $password_real=$row2['password'];


}

if ($username===$username_real and $password===$password_real){

        $_SESSION['ISC0_SHIFT_MS_2020_SUPERVISOR']=$username;
       
        ?>
        <div class="alert alert-success" role="alert">
        <i class='fa  fa-check-circle'></i> Login successfull. Redirecting ...
            </div>
        <?php
        echo "<script>location.href='supervisor/index.php'</script>";


}else{
      ?>
      <div class="alert alert-danger" role="alert">
      <i class='fa fa-times-circle'></i> Invalid username or password 
       </div>
      <?php
}

}

// END COMPANY





else{


	  ?>
      <div class="alert alert-danger" role="alert">
      <i class='fa fa-times-circle'></i> Invalid username or password
       </div>
      <?php      
}
}
}

?>

</body>
</html>