<?php
session_start();
include("db.php");
$pagename="Sign up Result"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php");  
echo "<h4>".$pagename."</h4>"; //display name of the page 

//store entered details 
$fname =  $_POST["fname"];
$lname =  $_POST["lname"];
$address =  $_POST["address"];
$postalcode =  $_POST["postalcode"];
$tel =  $_POST["tel"];
$email =  $_POST["email"];
$password =  $_POST["password"];
$conpassword =  $_POST["conpassword"];



//check wheather any field is empty
if(!(empty($fname) or empty($lname) or empty($address) or empty($postalcode) or empty($tel) or empty($email) or empty($password) or empty($conpassword)))
{
    if($password != $conpassword)
    {	 
		//if the entered 2 passwords are not equal to each other display error message
        echo "<h2 align='center'><b>Your sign-up process is failed!</b></h2>";
        echo "<h3 align='center'>Entered passwords are not matching!! </h3> "; 
        echo "<h2 align='center'>Try again <button><a href='signup.php'>sign up</a></button>";
    }
    else
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))     
        {
			//SQL query to store entered user details
            $SQL="INSERT INTO Users (userFName, userSName,userAddress,userPostCode,userTelNo,userEmail,userPassword)
			VALUES ('$fname',' $lname', '$address','$postalcode', '$tel', '$email','$password')";
            $exeSQL=mysqli_query($conn, $SQL);
            $exeError=mysqli_errno($conn);
           
            if($exeError=="0")
            {
                echo "<h2 align='center'><b>Sign-up process is Complete!</b></h2>";
                echo "<h3 align='center'>Go back:<button><a href='login.php'>Log In</a></button>";
            }
			
            else
            {
               //check wheather the entered Email is already exists
                if($exeError=="1062")
                {
                //if the entered Email is already exists, display error message
                echo "<h2 align='center'><b>Your sign-up process is failed!</b></h2>";
                echo "<h3 align='center'>Entered email is already exsits!! </h3> "; 
                echo "<h2 align='center'>Try again <button><a href='signup.php'>sign up</a></button>";
                }
                
                else if($exeError=="1064")
                {
                    echo "<h2 align='center'><b>Your sign-up process is failed!</b></h2>";
                    echo "<h3 align='center'>Contains invalid characters </h3> "; 
                    echo "<h2 align='center'>Try again <button><a href='signup.php'>sign up</a><button>";
                }
            }
        }
        else
        {
            echo "<h2 align='center'><b>Your sign-up process is failed!</b></h2>";
            echo "<h3 align='center'>Your email is invalid!! </h3> "; 
            echo "<h2 align='center'>Try again <button><a href='signup.php'>sign up</a></button>";
        }
    }
}
else
{
    echo "<b><h2 align='center'>Your sign-up process is failed!</b></h2>";
    echo "<h3 align='center'>You should fill all the fields!! </h2> "; 
    echo "<h2 align='center'>Try again <button><a href='signup.php'>sign up</a></button>";
}

include("footfile.html"); 
echo "</body>";
?>