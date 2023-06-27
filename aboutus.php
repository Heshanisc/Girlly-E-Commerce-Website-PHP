<?php
session_start();
$pagename="Girlyy"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php"); 
echo "<h4>".$pagename."</h4>"; //display name of the page 

echo "<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
body {
	background-image: url('bg.jpg');
}
</style>
</head>
<body>
<h5 style='color:#FF0066'>We are one of best online ladies fashion strore. You can buy any garment product that you want. We have great range of varities
such as Dresses, Tops, Jeans, Trousers, Skirts, Shorts,etc. Because of our high range of product varieties you can select your dream
outfit from us.</h5><br>
<h5 style='color:#FF0066'>We will deliver your products to your door step within 3 days. And most interesting thing is we will not charge any rupee from you.</h5>
<br><center><h4>So, Just Enjoy Your Shopping!!</h4></center>
</body>
</html>";

include("footfile.html"); 
echo "</body>";
?>