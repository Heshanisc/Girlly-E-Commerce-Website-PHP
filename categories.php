<?php
session_start();
include ("db.php"); 
$pagename="Categories"; //assign page name to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php"); 
echo "<h4>".$pagename."</h4>"; //display name of the page 

//SQL statement to retrieve product category details
$SQL="select catId, catName, catImg from Categories";


$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

echo "<table style='border: 0px' id='indextable'>";
while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
echo "<a href=show_category.php?cat_id=".$arrayp['catId'].">";
echo "<img alt= 'image of ".$arrayp['catName']."' src=images/".$arrayp['catImg']." height=420 width=350>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";//display product category image
echo "</a><br><br>";
echo "<p><h5>".$arrayp['catName']."</h5>"; //display product category name  
echo "</td>";
$arrayp=mysqli_fetch_array($exeSQL);
echo "<td style='border: 0px'>";
echo "<a href=show_category.php?cat_id=".$arrayp['catId'].">";
echo "<img alt= 'image of ".$arrayp['catName']."' src=images/".$arrayp['catImg']." height=420 width=350>";//display product category image
echo "</a><br><br>";
echo "<p><h5>".$arrayp['catName']."</h5>"; //display product name  
echo "</td>";
echo "</tr>";


}
echo "</table>";

include("footfile.html"); 
echo "</body>";
?>