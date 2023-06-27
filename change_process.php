<?php
session_start();
include("db.php");
$pagename="Change Password Result"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php");  
echo "<h4>".$pagename."</h4>"; //display name of the page 

$userid = $_SESSION['userId'];
$new = $_POST['npass'];
$renew = $_POST['Con_npass'];

		// check if the typed new passwords match
        if($new != $renew){
            echo "<br><h2 style='color:#FF0066' align='center'><b>Your changing process is failed!</b></h2>";
			echo "<br><h3 align='center'>Entered passwords are not matching!! </h3> "; 
			echo "<br><h2 align='center'>Try again <button><a href='change_password.php'>Change Password</a></button>";
			
        }else{
            $SQL = "UPDATE Users SET userPassword = '$new' WHERE userId = '$userid'";

            $exeSQL = mysqli_query($conn, $SQL) or die(mysqli_error($conn));

            $exeError=mysqli_errno($conn);
           
            if($exeError=="0")
            {
                echo "<br><h2 style='color:#FF0066' align='center'><b>Password has Changed!!</b></h2><br><br>";
                echo "<br><h3 align='center'>Go back:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button><a href='home.php'>Girlyy</a></button>";
            }
        }

include("footfile.html"); 
echo "</body>";
?>