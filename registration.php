<?php

session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'gt');

$Fname = $_POST['F_name'];
$Lname = $_POST['L_name'];
$Email = $_POST['E_mail'];
$Pnumber = $_POST['P_number'];
$Gname = $_POST['G_name'];
$Cid = $_POST['C_id'];
$Pass = $_POST['password'];
$Cass = $_POST['Cpass'];
$s = " select * from gamersdata where Cid = '$Cid'";
$t = " select * from gamersdata where Gname = '$Gname'";
$u = " select * from gamersdata where Pnumber = '$Pnumber'";
$v = " select * from gamersdata where Email = '$Email'";

$result = mysqli_query($con, $s);
$result1 = mysqli_query($con, $t);
$result2= mysqli_query($con, $u);
$result3 = mysqli_query($con, $v);
$num = mysqli_num_rows($result);
$num1 = mysqli_num_rows($result1);
$num2 = mysqli_num_rows($result2);
$num3 = mysqli_num_rows($result3);
if($Pass == $Cass)
{
if($num == 1){
    echo" Usename Already Taken";
}

elseif($num1 == 1){
    echo" Gamer name Already Taken";
}
elseif($num2 == 1){
    echo" phone number Already Taken";
}
elseif($num3 == 1){
    echo" Email Already Taken";
}
else{
    $reg= " insert into gamersdata(Fname , Lname , Email , Pnumber , Gname , Cid , Pass) values ('$Fname' , '$Lname' ,'$Email' ,'$Pnumber' ,'$Gname' ,'$Cid' ,'$Pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}
}
else {
  echo "wrong password";
}
?>
