<?php 

//session_start();
echo "<link href='https://fonts.googleapis.com/css2?family=Questrial&family=Roboto&display=swap' rel='stylesheet'>";
echo "<link href='https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap' rel='stylesheet'>";
echo "<link href='https://fonts.googleapis.com/css2?family=Raleway&display=swap' rel='stylesheet'>";
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head>
<body>
<div id='container'>

<div id='navbar'>
<div id='header'>
<h1>Girlyy</h1>
<h2>To break the Fashion</h2></a>
<h3>"; echo "Sri Lanka, ".date('l d F Y h:i:s')."</h3>
</div>
<div id='navigation'>
<ul> ";
  
        if(!(isset($_SESSION['userId']) and isset($_SESSION['usertype'])))
        {

            echo "<div>
                <li><a href='home.php'>Home</a></li>
				<li><a href='aboutus.php'>About Us</a></li>
				<li><a href='categories.php'>Categories</a></li>
                <li><a href='signup.php'>Sign Up</a></li>
                <li><a href='login.php'>Login</a></li>
            </div>
            <div>
                <li><a href='basket.php'>Basket</a></li>
				<li><a href='sizes.php'>Size Guide</a></li>
				<li><a href='account.php'>Account</a></li>
            </div>";
            }
        else
            {
            echo "<div>
                <li><a href='home.php'>Home</a></li>
				<li><a href='aboutus.php'>About Us</a></li>
				<li><a href='categories.php'>Categories</a></li>
                <li><a href='logout.php'>Log Out</a></li>
            </div>
            <div>
                <li><a href='basket.php'>Basket</a></li>
				<li><a href='sizes.php'>Size Guide</a></li>
				<li><a href='account.php'>Account</a></li>
            </div>";
            }
			
			echo "<input type=hidden name=h_prodid value=0>";
			echo "<input type=hidden name=p_quantity value=0>";



echo "</ul>
</div>
</div>
<div id='content'>";
?>