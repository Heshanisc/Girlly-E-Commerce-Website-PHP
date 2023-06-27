<?php
session_start();
$pagename="Sign Up"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php");  
echo "<h4 style='color:#444c53'>".$pagename."</h4>"; //display name of the page


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
.resetbtn, .signupbtn {
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
  .resetbtn, .signupbtn {
     width: 20%;
  }
}
</style>

<div class='formStyle'>
    <form action='signup_process.php' method='post' style='border:3px solid #ccc'>
        <label  for='fname'>First name:</label> 
        <input type='text' placeholder='Enter First Name' class='element' name='fname' value='' required><br>

        <td><label for='lname'>Last name:</label> </td>
        <td> <input type='text' placeholder='Enter your last name' input class='element' name='lname' value='' required><br>
        
        <label for='address'>Address:</label>
        <input type='text' placeholder='Enter your address' class='element' name='address' value='' required><br>

        <label for='postalcode'>Postal Code:</label>
        <input type='text' placeholder='Enter your postcode' class='element' name='postalcode' value='' required><br>
         
        <label for='tel'>Tel No:</label> 
        <input type='text' placeholder='Enter your telephone number' input class='element' name='tel' value='' required><br>
       
        <label for='email'>Email address:</label> </td>
        <input type='text' placeholder='Enter your Email address' class='element' name='email' value='' required><br>
     
        <label for='password'>Password:</label>
        <input type='password' placeholder='Enter your password' class='element' name='password' value='' required><br>

        <label for='conpassword'>Confirm Password:</label> </td>
        <input type='password' placeholder='Retype your password' class='element' name='conpassword' value='' required><br>
       

      <div class='clearfix'><center>
      <button type='reset'  class='resetbtn' value='Clear'>Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type='submit' class='signupbtn' name='submit' value='SignUp'>Create</button></center>
    </div>

         
    </form>
</div>";

include("footfile.html"); 
echo "</body>";
?>