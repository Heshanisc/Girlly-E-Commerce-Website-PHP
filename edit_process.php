<?php
session_start();
include("db.php");
$pagename="Edit Account Result"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php");  
echo "<h4>".$pagename."</h4>"; //display name of the page 

$userid = $_SESSION['userId'];
$nemail = $_POST['email'];
$ntel = $_POST['telnum'];
$npcode = $_POST['pcode'];
$naddress = $_POST['address'];


	if (!empty($nemail)){
		
		 $SQL = "UPDATE Users SET userEmail = '$nemail' WHERE userId = '$userid'";

         $exeSQL = mysqli_query($conn, $SQL) or die(mysqli_error($conn));

         $exeError=mysqli_errno($conn);
           
         if($exeError=="0")
            {
				if (!empty($nemail)){
                echo "<br><h2 style='color:#FF0066' align='center'><b>Email has Changed!!</b></h2><br><br>";
                }
				}
		
	}
	if(!empty($ntel)){
		
		 $SQL = "UPDATE Users SET userTelNo = '$ntel' WHERE userId = '$userid'";

         $exeSQL = mysqli_query($conn, $SQL) or die(mysqli_error($conn));

         $exeError=mysqli_errno($conn);
           
         if($exeError=="0")
            {
				if(!empty($ntel)){
                echo "<br><h2 style='color:#FF0066' align='center'><b>Telephone Number has Changed!!</b></h2><br><br>";
                }
				}
		
	}
	if(!empty($npcode)){
		
		 $SQL = "UPDATE Users SET userPostCode = '$npcode' WHERE userId = '$userid'";

         $exeSQL = mysqli_query($conn, $SQL) or die(mysqli_error($conn));

         $exeError=mysqli_errno($conn);
           
         if($exeError=="0")
            {
				if(!empty($npcode)){
                echo "<br><h2 style='color:#FF0066' align='center'><b>Postal Code has Changed!!</b></h2><br><br>";
                }
				}
		
	}
	
	if(!empty($naddress)){
		
		 $SQL = "UPDATE Users SET userAddress = '$naddress' WHERE userId = '$userid'";

         $exeSQL = mysqli_query($conn, $SQL) or die(mysqli_error($conn));

         $exeError=mysqli_errno($conn);
           
         if($exeError=="0")
            {
				if(!empty($naddress)){
                echo "<br><h2 style='color:#FF0066' align='center'><b>Address has Changed!!</b></h2><br><br>";
                }
				}
		
	}
	
	echo "<br><h3 align='center'>Go back:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button><a href='home.php'>Girlyy</a></button>";

include("footfile.html"); 
echo "</body>";
?>