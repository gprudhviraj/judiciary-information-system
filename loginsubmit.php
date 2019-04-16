<?php
echo "-------------";
include("database.php");
echo "++++++++".$_POST["officertype"];
if($_POST["officertype"]=="5")
{
	$userid=$_POST["userid"];
        $pwd=$_POST["pwd"];
        $loginquery="select userid from login where type='admin' and userid='".$userid."' and pwd='".$pwd."'";
		echo "<br/>";
		echo $loginquery;
	$resloginquery=mysqli_query($con,$loginquery);
		echo "Number of rows returned are : ".mysqli_num_rows($resloginquery);
        if(mysqli_num_rows($resloginquery)>0)
           header("Location:adminhome.php");
        else
           echo "Authentication failed. Invalid user";
}	
else if($_POST["officertype"]=="1")
{
	$userid=$_POST["userid"];
        $pwd=$_POST["pwd"];
        $loginquery="select userid from login where type='registrar' and userid='".$userid."' and pwd='".$pwd."'";
	$resloginquery=mysqli_query($con,$loginquery);
        if(mysqli_num_rows($resloginquery)>0)
           header("Location:registarhome.php");
        else
           echo "Authentication failed. Invalid user";
}
else if($_POST["officertype"]=="3")
{
	$userid=$_POST["userid"];
        $pwd=$_POST["pwd"];
        $loginquery="select userid from login where type='judge' and userid='".$userid."' and pwd='".$pwd."'";
	$resloginquery=mysqli_query($con,$loginquery);
        if(mysqli_num_rows($resloginquery)>0)
           header("Location:judgehome.php");
        else
           echo "Authentication failed. Invalid user";
}
else if($_POST["officertype"]=="2")
{
	$userid=$_POST["userid"];
        $pwd=$_POST["pwd"];
        $loginquery="select userid from login where type='lawyer' and userid='".$userid."' and pwd='".$pwd."'";
	$resloginquery=mysqli_query($con,$loginquery);
        if(mysqli_num_rows($resloginquery)>0)
           header("Location:lawyerhome.php");
        else
           echo "Authentication failed lawyer. Invalid user";
}
else if($_POST["officertype"]=="4")
{
	$userid=$_POST["userid"];
        $pwd=$_POST["pwd"];
        $loginquery="select userid from login where type='user' and userid='".$userid."' and pwd='".$pwd."'";
	$resloginquery=mysqli_query($con,$loginquery);
        if(mysqli_num_rows($resloginquery)>0)
           header("Location:userhome.php?userid=".$userid);
        else
           echo "Authentication failed. Invalid user";
}
else
{
	header("Location:index.php");
}
?>