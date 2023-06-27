<?php
session_start();
include("db.php");
$pagename="Edit Account"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php");
echo "<h4>".$pagename."</h4>"; //display name of the page 

echo "
<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
body {font-family: Candara, Calibri, Ebrima;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1px solid #dc66a3;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


/* Set a style for all buttons */
button {
  background-color: #48494a;
  color: #f2f2f2;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


/* Float cancel and signup buttons and add an equal width */
.resetbtn, .editbtn, .button {
  background-color: #48494a;
  padding: 14px 20px;
  float: left;
  width: 20%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: '';
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .resetbtn, .editbtn, .button {
     width: 20%;
  }
}
</style>
<div class='formStyle'>";
	$userid = $_SESSION['userId'];
	$SQL="select userEmail,userFName,userSName, userTelNo, userAddress,userPostCode from Users where userId='$userid'";
	$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
	while($arrayu=mysqli_fetch_array($exeSQL)){
	echo"
		<form action='edit_process.php' method='post' style='border:3px solid #ccc'>
		<div>
		<label  for='email'>Email Address:</label> 
		<input type='text' class='element' name='email' placeholder='".$arrayu['userEmail']."'>
		</div>
		<div>
		<label  for='telnum'>Telephone Number:</label>
		<input type='text' class='element' name='telnum' placeholder='".$arrayu['userTelNo']."'>
		</div>
		<div>
		<label  for='pcode'>Postal Code:</label>				
		<input type='text' class='element' name='pcode' placeholder='".$arrayu['userPostCode']."'>
		</div>
		<label  for='address'>Address:</label>				
		<input type='text' class='element' name='address' placeholder='".$arrayu['userAddress']."'>
		</div>
		<div class='clearfix'><center>
		<button type='reset'  class='resetbtn' value='Clear'>Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button class='button'><a href='account.php'>Go Back</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type='submit' class='editbtn' name='submit' value='Change'>Change</button></center>
		</div>
		</form>";
		}	
		
	echo"     
    
</div>";


include("footfile.html");
echo "</body>";
?>