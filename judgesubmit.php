<?php
include("database.php");
$insert="insert into judge (`name`,`age`,`email`,`phno`,`adno`,`addr`,`dep`) values ('".$_POST["name"]."','".$_POST["age"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["aadhaar"]."','".$_POST["address"]."','".$_POST["department"]."')";
//echo $insert;
$resinsert=mysqli_query($con,$insert);
if($resinsert)
  echo "Details validated successfully<br/>";
$logininsert="insert into login (`userid`,`pwd`,`type`) values ('".$_POST["userid"]."','".$_POST["password"]."','j')";
$reslogininsert=mysqli_query($con,$logininsert);
//echo $logininsert;
if($reslogininsert)  
  echo "Authentication details added successfully<br/>";
echo "Please wait while we Redirect you to home page in 5 seconds...";
header( "refresh:5;registarhome.php" );
?>