<?php
session_start();
include("db.php");
$pagename="Available Quantity"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assignstylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window
echo "<body>";
include ("headfile.php"); 

$prodid = $_GET['u_prod_id'];
$size=$_GET['size'];

//SQL query to retrieves product details
$SQL="select prodId, prodName,prodPicNameLarge, prodPicName2, prodPrice, prodQuantity from Product where prodId = '$prodid' ";


$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));


echo "<table style='border: 0px'>";

while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
//display the image 
echo "<img alt= 'image of ".$arrayp['prodName']."' src=images/".$arrayp['prodPicNameLarge']." height=350 width=250>";
echo "</td>";
echo "<td style='border: 0px'>";
//display the image 
echo "<img alt= 'image of ".$arrayp['prodName']."' src=images/".$arrayp['prodPicName2']." height=350 width=250>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<p><h4>".$arrayp['prodName']."</h4>"; //display product name  
echo "<center><p><h5 style='color:#FF0066'> Rs. ".$arrayp['prodPrice']."</h5></center>"; //display product price 
echo "<center><p><h6 style='font-size:18'> Selected size (UK) : $size </h6></center>"; //display available quantity 



$SQL4 = "SELECT quantity FROM productsize WHERE (prodId = '$prodid') AND (sizeId='$size');";
$exeSQL4 = mysqli_query($conn, $SQL4) or die (mysqli_error($conn));

while ($arrayp4=mysqli_fetch_array($exeSQL4))
{
	$q = $arrayp4['quantity'];
	echo "$q";
}

echo "<form name=selection action=basket.php method=post>";
echo "<p style='font-family:Madhura; font-size:15'>Number to be purchased:<br><br> ";
echo "<select style='width:55; height:30; ' name=p_quantity>";
$i=1;
while($i<=2){
echo"<option style='background-color:#444c53; color:#FFFFFF' value=$i>"; echo "$i"; echo "</option>";
$i++;
}
echo"</select>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name='submitbtn' value='ADD TO BASKET' id='submitbtn'>";

//pass the product id 
echo "<input type=hidden name=h_prodid value=$prodid>";
echo "<input type=hidden name=size value=$size>";
echo "</form>";
echo "</td>";
echo "</tr>";
}
echo "</table>";

include("footfile.html"); 
echo "</body>";
?>