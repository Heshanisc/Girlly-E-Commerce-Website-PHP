<?php
session_start(); 
include("db.php");
$pagename="Girlyy"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";
include ("headfile.php"); 

echo "
<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
#radios{
  position:relative;
  width:30%;
  margin: 10px 15px 15px 20px;
}
input[type='radio']{
  position:absolute;
  right:1000%;
}
label{
  float:left;
  width:15%; padding-bottom:15%;
  margin:0 2.5%;
  background:rgba(68,76,83,.2);
  border-radius:50%;
  cursor:pointer;
}
#slider{
  position:absolute;
  left:0%; top:0;
  width:10%; padding-bottom:10%;
  margin:2.5% 0 0 5%;
  background:#FF0066;
  transition:transform 1s;
  border-radius:50%;
  animation-timing-function: ease-in-out;
  animation-duration:.3s;
  animation-fill-mode: forwards;
  transition: 0.2s left .05s ease-in-out;
}
#input1:checked  ~ #slider{ animation-name: input1; left:0; }
#input2:checked  ~ #slider{ animation-name: input2; left:20%; }
#input3:checked  ~ #slider{ animation-name: input3; left:40%; }
#input4:checked  ~ #slider{ animation-name: input4; left:60%; }
#input5:checked  ~ #slider{ animation-name: input5; left:80%; }

@keyframes input1{ 30%, 70% { transform:scale(0.5); } }
@keyframes input2{ 30%, 70% { transform:scale(0.5); } }
@keyframes input3{ 30%, 70% { transform:scale(0.5); } }
@keyframes input4{ 30%, 70% { transform:scale(0.5); } }
@keyframes input5{ 30%, 70% { transform:scale(0.5); } }
</style>
</head></html>";

//retrieve the product id 
$prodid=$_GET['u_prod_id'];


//SQL query to retrieves product details
$SQL="select prodId, prodName, prodPicNameLarge, prodDescripLong, prodPrice, prodQuantity from Product where prodId = '$prodid' ";


$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));


echo "<table style='border: 0px'>";

while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
//display the image 
echo "<img alt= 'image of ".$arrayp['prodName']."' src=images/".$arrayp['prodPicNameLarge']." height=550 width=450>";
echo "</td>";

echo "<td style='border: 0px'>";
echo "<p><h4>".$arrayp['prodName']."</h4>"; //display product name 
echo "<p><h6 style='font-size:18; font-family:Candara'>".$arrayp['prodDescripLong']."</h6>"; //display product discription 
echo "<p><h5 style='color:#FF0066'> Rs. ".$arrayp['prodPrice']."</h5><br>"; //display product price 

$SQL2 = "SELECT productsize.sizeId, sizeName FROM size, productsize WHERE (size.sizeId = productsize.sizeId) AND (prodId =".$arrayp['prodId'].");";
$exeSQL2 = mysqli_query($conn, $SQL2) or die (mysqli_error($conn));

echo "<form name=selection action=basket.php method=post>";
echo "<p style='font-family:Madhura; font-size:15'>Select your Size (UK):<br><br> ";

echo"<div id='radios'>";
$input=1;
while($arrayp2=mysqli_fetch_array($exeSQL2))
{ echo"
  <label for='input".$input."'></label>
  <input  id='input".$input."' name='radio' value=".$arrayp2['sizeName']." type='radio' onclick = 'reload();' />";
  $input=$input+1;
}

echo"<span id='slider'></span></div><br>";

$SQL3 = "SELECT productsize.sizeId, sizeName FROM size, productsize WHERE (size.sizeId = productsize.sizeId) AND (prodId =".$arrayp['prodId'].");";
$exeSQL3 = mysqli_query($conn, $SQL3) or die (mysqli_error($conn));

while($arrayp3=mysqli_fetch_array($exeSQL3)){
	echo"&nbsp&nbsp&nbsp&nbsp&nbsp".$arrayp3['sizeName']."";
}

echo"<script type='text/javascript'>
function reload()
{

for(var i=0; i < document.selection.radio.length; i++){
if(document.selection.radio[i].checked)
var val=document.selection.radio[i].value
}

self.location='selectSize.php?u_prod_id=".$prodid."&size='+val;

}

</script>";

echo "<p><h6 style='font-size:18'> Total quantity left in the stock: ".$arrayp['prodQuantity']."</h6>"; //display available quantity 


//pass the product id 
echo "<input type=hidden name=h_prodid value=$prodid>";
echo "</form>";
echo "</td>";
echo "</tr>";
}
echo "</table>";

include("footfile.html"); 
echo "</body>";
?>