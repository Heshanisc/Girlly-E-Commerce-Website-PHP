<?php
include("db.php");
session_start();
$pagename="Account details"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php"); 
echo "<h4>".$pagename."</h4>"; //display name of the page 


 if(!(isset($_SESSION['userId']) and isset($_SESSION['usertype'])))
        {

            echo "<div>
                <center><h5 style='color:#FF0066'>Sorry, You are not logged in!!</h5></center><br><br><br><br>
            </div>
            <div>
                <h2 align='center'>Don't you have an account? <button><a href='signup.php'>Sign Up</a></button><br>
				Have an account? <button><a href=' login.php '> Log In</a></button>
            </div>";
            }
        else
            {
				$userid = $_SESSION['userId'];
				$SQL="select userEmail,userFName,userSName, userTelNo, userAddress,userPostCode from Users where userId='$userid'";
				$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
				while($arrayu=mysqli_fetch_array($exeSQL)){
					 echo"<center><h1 style='color:#FF0066'>Name : </h1><h2>".$arrayu['userFName']." " .$arrayu['userSName']."</h2>
					 <h1 style='color:#FF0066'>Email : </h1><h2>".$arrayu['userEmail']."</h2>
					 <h1 style='color:#FF0066'>Telephone Number : </h1><h2>".$arrayu['userTelNo']."</h2>
					 <h1 style='color:#FF0066'>Address : </h1><h2>".$arrayu['userPostCode']." , ".$arrayu['userAddress']."</h2></center>";
				}
           
               echo"<br><br><center><button><a href='change_password.php'>Change Password</a></button>&nbsp;&nbsp;&nbsp;";
			   echo"<button><a href='edit_account.php'>Edit Account</a></button></center><br><br>";
            
            }

include("footfile.html"); 
echo "</body>";
?>