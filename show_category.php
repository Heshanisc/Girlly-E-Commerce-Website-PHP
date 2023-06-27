<?php
session_start();
include ("db.php"); 
$pagename="Girlyy"; //assign pagename name to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php"); 

//retrieve the category id 
$catid=$_GET['cat_id'];

//SQL query to retrieves products
$SQL="select prodId, prodName, prodPicNameSmall, prodDescripShort from Product where catId = '$catid' ";


$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

echo "<table style='border: 0px' id='indextable'>";
while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">";
echo "<img alt= 'image of ".$arrayp['prodName']."' src=images/".$arrayp['prodPicNameSmall']." height=420 width=350>";//display product image
echo "</a><br><br>";
echo "<p><h5>".$arrayp['prodName']."</h5>"; //display product name 
echo "<p class='prodDescription'><h6 style='font-size:20; color:#FF0066'>"	.$arrayp['prodDescripShort']."</h6>"; //display product price 
echo "</td>";
$arrayp=mysqli_fetch_array($exeSQL);
echo "<td style='border: 0px'>";
echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">";
echo "<img src=images/".$arrayp['prodPicNameSmall']." height=420 width=350>";//display product image
echo "</a><br><br>";
echo "<p><h5>".$arrayp['prodName']."</h5>"; //display product name 
echo "<p class='prodDescription'><h6 style='font-size:20; color:#FF0066'>"	.$arrayp['prodDescripShort']."</h6>"; //display product price 
echo "</td>";
echo "</tr>";


}
echo "</table>";

include("footfile.html");
echo "</body>";
?>