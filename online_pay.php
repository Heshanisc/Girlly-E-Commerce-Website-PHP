<?php
session_start();
$pagename="Visa/Master Card Payments"; //assign pagename to a variable
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
form {border: 5px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 30%;
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
    <form action='checkout.php' method='post'> <br><br><center>   
        <label for='card_num'>Card Number:&#9;</label> </td>
        <input class='element'  type='text' name='Cno' placeholder='Enter your Card Number' value='' required><br>
     
        <label for='expiry'>Expiry:&#9;</label>
        <input class='element' type='text' name='expiry' placeholder='Enter the Expiry Date' value='' required><br>
		
		<label for='cvc'>CVC:&#9;</label>
        <input class='element' type='password' name='cvc' placeholder='Enter the CVC' value='' required><br>
        <br><br></center>
        
        
        <center><button type='submit' name='Opay'>Pay</button>&#9;&#9;&#9;
        <button><a href=basket.php>Go Back</a></button></center><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt =image of visa src=images/visa.png style= 'width:10%; height:10%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img alt =image of master card src=images/master.png style= 'width:8%; height:12%'>

   

        
        
    </form>
</div>";

include("footfile.html");
echo "</body>";
?>