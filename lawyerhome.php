<?php
include("header.php");
?><!DOCTYPE html>
<head>
<style>
.container {
    width: 500px;
    max-height: 500px;
    margin: 10px;
    border: 1px solid #fff;
    background-color: #ffffff;
    box-shadow: 0px 2px 7px #292929;
    -moz-box-shadow: 0px 2px 7px #292929;
    -webkit-box-shadow: 0px 2px 7px #292929;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
}
.mainbody,
.header {
    padding: 5px;
}
.mainbody {
    margin-top: 0;
    min-height: 150px;
    max-height: 500px;
    width:100%
}
.header {
    border-bottom: 1px solid #EEE;
    background-color: #ffffff;
    height: 100px;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}
.leftlogo{
   width:20%;
   float:left;
}
.maincontent{
   left:20%;
   width:65%;
   float:left;
   position:fixed;
}
.right{
   width:15%;
   float:right;
}
a.complete{
	color:white;
}
#logout{
	float:right;
	background-color:red;
}
</style>
</head>
<body>
<?php
include("database.php");
$completedquery="select * from casedetails where status='c'";
$pendingquery="select * from casedetails where status='p'";
$rescomquery=mysqli_query($con,$completedquery);
$respenquery=mysqli_query($con,$pendingquery);
?>
<div id="container">
<div id="logout">
<input type="button" value="Logout" onclick="window.location='index.php'">
</div>
      <div class="mainbody">
	<table border=1 style="background-color:#9999CC"  class="table table-striped">
	<tr><td><h2>Cases that are completed</h2></td></tr>
	<?php
        while($row=mysqli_fetch_array($rescomquery))
	{?>
	<tr><td><a href="casedetails.php?id=<?php echo $row["cin"] ?>" class="complete"><?php echo $row["cin"] ?></a></td></tr>
	<?php
	}
	?>
	</tr>
	</table>
	<table border=1 style="background-color:#9999CC" class="table table-striped">
	<tr><td><h2>Cases that are pending</h2></td>
	<?php
        while($row=mysqli_fetch_array($respenquery))
	{?>
	<tr><td><a href="casedetails.php?id=<?php echo $row["cin"] ?>"><?php echo $row["cin"] ?></a></td></tr>
	<?php
	}
	?>
	</tr>
	</table>
	</section>
    </div>
	
</div>
<div><a href="refercases.php">Refer Cases</div>
</body>

</html>
<?php

include("footer.php");
?>