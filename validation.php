<?php

session_start();

$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'gt');

$Email = $_POST['E_mail'];
$Pass = $_POST['password'];

$s = " select * from gamersdata where Email = '$Email' && Pass = '$Pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $Email;
    header('location:login.php');
}else{
    header('location:login.php');
}

?>
