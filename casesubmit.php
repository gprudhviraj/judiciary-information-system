<?php
include("database.php");
$cin=rand(1,100000);
//echo $cin;
$insert="insert into casedetails (`cin`,`typeofcrime`,`arresting_time`,`crime_place`,`title`,`arresting_date`,`arrestingofficer`,`victimname`,`victimage`,`victim_DOB`,`victimaddr`,`victimmob`,`victimaadhaar`,`victimemail`,`accusedname`,`accused_DOB`,`accusedage`,`accusedaddr`,`accusedmob`,`accusedaadhaar`,`accusedemail`,`status`,'crimetime','crimedate','crimepic') values ($cin,'".$_POST["typeofcrime"]."','".$_POST["time"]."','".$_POST["place"]."','".$_POST["title"]."','".$_POST["date"]."','".$_POST["officername"]."','".$_POST["victimname"]."','".$_POST["victimage"]."','".$_POST["victimaddr"]."','".$_POST["victimmobile"]."','".$_POST["victimaadhaar"]."','".$_POST["victimemail"]."','".$_POST["accusedname"]."','".$_POST["accusedage"]."','".$_POST["accusedaddr"]."','".$_POST["accusedmobile"]."','".$_POST["accusedaadhaar"]."','".$_POST["accusedemail"]."','p')";
//echo $insert;
$resinsert=mysqli_query($con,$insert);
if($resinsert)
  echo "Details inserted successfully";
?>