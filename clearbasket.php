<?php
session_start();
include("db.php");
$pagename="Clear Basket"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assignstylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window title
echo"</head>";
echo "<body>";
include ("headfile.php"); 

unset($_SESSION['basket']);

echo "<h1 align='center'>Your Basket has been cleared</h1>";

echo "<h3 align='center'><br>Click here to continue shopping<br><br><button><a href='home.php'>Girlyy</a></button>";

include("footfile.html"); 
echo "</body>";
?>