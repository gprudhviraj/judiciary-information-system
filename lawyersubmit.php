<?php
include("database.php");
$insert="insert into lawyer (`name`,`age`,`email`,`phno`,`adno`,`addr`,`dep`) values ('".$_POST["name"]."','".$_POST["age"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["aadhaar"]."','".$_POST["address"]."','".$_POST["department"]."')";
//echo $insert;
$resinsert=mysqli_query($con,$insert);
if($resinsert)
  echo "Details inserted successfully";
$logininsert="insert into login (`userid`,`pwd`,`type`) values ('".$_POST["userid"]."','".$_POST["password"]."','l')";
$reslogininsert=mysqli_query($con,$logininsert);
//echo $logininsert;
if($reslogininsert)  
  echo "Authentication details added successfully";
header ('Location: http://localhost/jis/index.php');
?>