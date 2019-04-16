<?php
include("database.php");
//$cin=rand(1,100000);
//echo $cin;
$insert="insert into hearing(`cin`,`date`,`summary`) values (".$_POST["cin"].",'".$_POST["date"]."','".$_POST["summary"]."')";
$resinsert=mysqli_query($con,$insert);
if($resinsert)
  echo "Details inserted successfully";

?>