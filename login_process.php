<?php
session_start();
include("db.php");
$pagename="LogIn Results"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php"); 
echo "<h4>".$pagename."</h4>"; //display name of the page 

//setting cookies
if(!empty($_POST["remember"])) {
	setcookie ("email",$_POST["email"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "(Cookies Set Successfully)";
} else {
	setcookie("email","");
	setcookie("password","");
	echo "(Cookies Not Set)";
}

$email =  $_POST["email"];//get email entered
$password =  $_POST["password"];//get password entered

//if either email or password is not entered then display error message
if((empty($email) or empty($password)))
{
    echo "<h2 align='center'><b>Login failed!</b></h2><br>";
	
    echo "<h3 align='center'>Login form is incomplete</h3><br>";
	
    echo "<h3 align='center'>Try again <br><button><a href='login.php'>login</a></button>";

}
else
{
    //SQL query to retrieve the user records
    $SQL="select userId,userEmail,userType, userPassword,userFName,userSName from Users where userEmail='$email'";
    $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
    $arrayu=mysqli_fetch_array($exeSQL);
    $nbrecs=mysqli_num_rows($exeSQL);

	//display error if there are no record which is equal to the entered email
    if($nbrecs=='0')
    {
        echo "<h2 align='center'><b>Logn failed!</b></h2><br>";
        
		echo "<h3 align='center'>Sorry, We can't recognise your Email!!</h3><br>";
        
		echo "<h2 align='center'>Try again<br><button><a href='login.php'>login</a></button> ";
        
		echo "<h3 align='center'>Do not have an account? <br> <button><a href='signup.php'>sign up</a></button>";
    }
    else
    {
        //if password is incorrect
        if($arrayu['userPassword']!=$password)
        {
            echo "<h2 align='center'><b>Login failed!</b></h2><br>";
            
			echo "<h3 align='center'>Sorry, Your password is incorrect!1</h3><br>";
            
			echo "<h2 align='center'>Try again <br><button><a href='login.php'>login</a></button>";  
        }
        else
        {
			//if the login process is successful, display message
            echo "<h1 align='center'><strong>Login success!!</strong></h1>";
            
			echo "<h2 align='center'><i>Welcome, " .$arrayu['userFName']." </i></h2>";
            
			echo "<h1 align='center'><strong>Continue shopping <button><a href='home.php'><h2>Girlyy</h2></a></button></strong></h1><br>";
            
			echo "<h1 align='center'><strong>View your &nbsp;  <button><a href='basket.php'><h2>Basket</h2></a></button></strong></h1><br>";

            $_SESSION['userName']=$arrayu['userFName'].$arrayu['userSName']; 
            $_SESSION['userId']=$arrayu['userId'];
			$_SESSION['usertype']=$arrayu['userType'];
                      
        }
    }
}

include("footfile.html"); 
echo "</body>";
?>