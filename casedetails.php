<!DOCTYPE html>
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
	text-align:center;
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
</style>
</head>
<body>
<?php
include("database.php");
$completedquery="select * from casedetails where cin=".$_GET["id"];
//echo $completedquery;
$rescomquery=mysqli_query($con,$completedquery);
?>
<div id="container">
	<div class="header">
	<h1>Complete Details</h1>
    </div>
    <div class="mainbody">
	<table border=1>
	<?php $row=mysqli_fetch_array($rescomquery);
	echo "<tr><td>CIN</td><td>".$row["cin"]."</td></tr>";
	echo "<tr><td>TYPE OF CRIME</td><td>".$row["typeofcrime"]."</td></tr>";
	echo "<tr><td>TIME</td><td>".$row["time"]."</td></tr>";
	echo "<tr><td>PLACE</td><td>".$row["place"]."</td></tr>";
	echo "<tr><td>TITLE</td><td>".$row["title"]."</td></tr>";
	echo "<tr><td>DATE</td><td>".$row["date"]."</td></tr>";
	echo "<tr><td>ARRESTING OFFICER NAME</td><td>".$row["arrestingofficer"]."</td></tr></table>";
	echo "<h2>Victim Details</h2>";
	echo "<table border=1>";
	echo "<tr><td>NAME</td><td>".$row["victimname"]."</td></tr>";
	echo "<tr><td>AGE</td><td>".$row["victimage"]."</td></tr>";
	echo "<tr><td>ADDRESS</td><td>".$row["victimaddr"]."</td></tr>";
	echo "<tr><td>MOBILENO</td><td>".$row["victimmob"]."</td></tr>";
	echo "<tr><td>AADHAAR NO</td><td>".$row["victimaadhaar"]."</td></tr>";
	echo "<tr><td>EMAIL</td><td>".$row["victimemail"]."</td></tr></table>";
	echo "<h2>Accused Details</h2>";
	echo "<table border=1><tr><td>NAME</td><td>".$row["accusedname"]."</td></tr>";
	echo "<tr><td>AGE</td><td>".$row["accusedage"]."</td></tr>";
	echo "<tr><td>ADDRESS</td><td>".$row["accusedaddr"]."</td></tr>";
	echo "<tr><td>MOBILENO</td><td>".$row["accusedmob"]."</td></tr>";
	echo "<tr><td>AADHAAR NO</td><td>".$row["accusedaadhaar"]."</td></tr>";
	echo "<tr><td>EMAIL</td><td>".$row["accusedemail"]."</td></tr>";
	?>
	</tr>
	</table>
	</section>
    </div>
</div>
</body>
</html>