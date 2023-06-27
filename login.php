<?php
session_start();
$pagename="Login"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window title
echo "<body>";
include ("headfile.php");  
echo "<h4 style='color:#444c53'>".$pagename."</h4>"; //display name of the page

//get user details from cookies 
if(isset($_COOKIE["email"])) { 
		$uname = $_COOKIE["email"];
   }else{
	   $uname = '';
   }
 if(isset($_COOKIE["password'"])) { 
		$pass = $_COOKIE["password"];
	} else{
		$pass = '';
	}
	
echo "
<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
body {font-family: Candara, Calibri, Ebrima;}
form {border: 5px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #dc66a3;
  box-sizing: border-box;
}

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
  opacity: 1;
}



.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 25px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}
</style>
</head>
<body>
<div class='container'>
    <form action='login_process.php' method='post'> <br><br><center>   
        <label for='email'>Email address:&#9;</label> </td>
        <input class='element'  type='text' name='email' placeholder='Enter your E-mail'value='$uname'required><br>
     
        <label for='password'>Password:&#9;</label>
        <input class='element' type='password' name='password' placeholder='Enter your Password' value='$pass' required><br><br>
        </p>
		<p><input type='checkbox' name='remember' /> Remember me
		</p></center><br><br>
        
        <center><button type='submit'>Login</button>&#9;&#9;&#9;
        <button type='reset'>Reset</button></center><br><br>

    <div class='container' style='background-color:#f1f1f1'>
    <span class='psw'>Still don't have an <a href='signup.php' style='color:#48494a; text-decoration:underline'>account?</a></span> 
    
  </div>

        
        
    </form>
</div>";

include("footfile.html"); 
echo "</body>";
?>