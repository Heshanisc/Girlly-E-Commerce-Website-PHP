<?php
session_start();
include ("db.php"); 
$pagename="Size Guide"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php"); 
echo "<h4>".$pagename."</h4>"; //display name of the page 

//statement to retrieve size details
$SQL="select sizeName, bust, waist, hip from Size";

$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

echo "<table id='checkouttable' style='width:50%; border: 0px'>
    <tr>
        <th>UK Size</th>
        <th>Bust (cm)</th> 
        <th>Waist (cm)</th>
        <th>Hip (cm)</th>
    </tr>";
while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td>";
echo "<p><h5>".$arrayp['sizeName']."</h5>"; //display size name
echo "</td>";
echo "<td>";
echo "<p><h5>".$arrayp['bust']."</h5>"; //display bust size  
echo "</td>";
echo "<td>";
echo "<p><h5>".$arrayp['waist']."</h5>"; //display waist size  
echo "</td>";
echo "<td>";
echo "<p><h5>".$arrayp['hip']."</h5>"; //display hip size  
echo "</td>";
echo "</tr>";

}
	
echo "</table>";

include("footfile.html"); 
echo "</body>";
?>