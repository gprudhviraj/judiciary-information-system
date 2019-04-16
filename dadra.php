<?php
include("header.php");
?>
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
.column{
  float:left;
  width:20.33%;
  padding:5px;
}
.row:after {
   content:"";
   clear:both;
   display:table;
}
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
<div id="container">
    <div class="header">
 <h1>HIGH COURT OF DADRA AND NAGAR HAVELI</h1>
    </div>
    <div class="mainbody">
<div class="row">
     <div class="column"><img src="dn cj.JPG " height=200 width=200></div>
 <div class="column"><img src="dn court.JPG"  height=200 width=800></div>
</div> 
    </div>
</div>
</body>
</html>
<?php
include("footer.php");
?>