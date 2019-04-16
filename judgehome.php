<?php
include("header.php");
?>
<!DOCTYPE html>
<head>
<style>
#logout{
	float:right;
	background-color:red;
}
</style>
<!--<script language="javascript" src="calender/calendar/calendar.js"></script>-->
<link href="datepicker/css/datepicker.css" rel="stylesheet">
<script type="text/javascript" src="datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".datepicker").datepicker();
})
/*$(document).ready(function(){
	//alert("working");
	theMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
	theDays = ["S","M","T","W","T","F","S"];
	alert("working");
	$(".calender_test").calender({
		months: theMonths,
		days: theDays,
		req_ajax: {
			type: 'get',
			url: 'json.php'
		}
	})
	alert("working");
})*/
</script>
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
	<table border=1 style="background-color:#9999CC;" class="table table-striped">
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
	<div><a href="refercases.php"><h3>Refer Cases</h3></div>
	<div class="datepicker datepicker-inline col-md-4">
		<div>test</div>
		<div>test</div>
	</div>
	<div class="col-md-8">
	<table class="table table-striped">
	<thead>
	<td>Current day cases</td>
	</thead>
	<tr>
	<?php
	$hearingquery="select cin from hearing where Status='p' and currenthearingdate='".date('Y-m-d')."'";
	$reshearingquery=mysqli_query($con,$hearingquery);
	while($row=mysqli_fetch_array($reshearingquery))
	{
	?>
	<tr><td><a href="casedetails.php?id=<?php echo $row["cin"] ?>"><?php echo $row["cin"] ?></a></td></tr>
	<?php
	}
	?>
	</table>
	</div>
	<div class="row">.</div>
	<div class="row">.</div>
	<div class="row">.</div>
</div>
</body>
</html>
<?php
include("footer.php");
?>
