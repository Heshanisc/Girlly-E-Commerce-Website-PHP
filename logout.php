<?php
session_start();
$pagename="Logout"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php"); 
echo "<h4>".$pagename."</h4>"; //display name of the page 

$user = $_SESSION['userName'];

echo "<h2 align='center'>Thank you <b>$user</b> </h2>";

unset($_SESSION['userid']);
unset($_SESSION['usertype']);

session_destroy();

//Display the log out message
echo "<h1 align='center'>Now you are logged out!!</h1>";

echo "<h3 align='center'><strong>Click here to  &nbsp  <button><a href='login.php'><h2>Login</h2></a></button></strong></h3><br>";

include("footfile.html"); 
echo "</body>";
?>