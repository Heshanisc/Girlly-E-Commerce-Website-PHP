<?php
include("db.php");
session_start();
$pagename="Basket"; //assign page name to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in the window title
echo "<body>";
include ("headfile.php");


if(isset($_POST["del_prodid"])){
    $delprodid= $_POST["del_prodid"];
    unset($_SESSION['basket'][$delprodid]);


    echo "<h1 align='center'><strong>1 item removed from the basket</strong></h1>";

}

if(isset($_POST["h_prodid"])and ($_POST["p_quantity"])){
	$newprodid =  $_POST["h_prodid"];
	$reququantity = $_POST["p_quantity"];
	$_SESSION['basket'][$newprodid]=$reququantity;
}


echo "<table id='checkouttable' style='width:50%'>
    <tr>
        <th>Product Name</th>
        <th>Price</th> 
        <th>Quantity</th>
        <th>Subtotal</th>
        <th>Remove Product</th>
    </tr>";


    if(isset($_SESSION['basket']))
    {
        $total=0.00;

        foreach($_SESSION['basket'] as $index => $value)
        {	
			
            if(trim($_SESSION['basket'][$index]!=""))
            {
                //SQL statement to retrieves product details
                $SQL="select prodName,prodPrice from Product where prodId='$index'";
            
                $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
        

                $arrayp=mysqli_fetch_array($exeSQL);  

                $subtotal = $arrayp['prodPrice']*$value;
                $total += $subtotal;
                echo "<tr> 
                        <td> $arrayp[prodName] </td> 
                        <td> $arrayp[prodPrice] </td> 
                        <td> $value </td>
                        <td> $subtotal </td>";
                    echo "<td>";
                    
                        echo "<form action='basket.php' method=post>";

                            echo "<button type='submit'>Remove </button>" ;
                        
                            //pass the product id 
                            echo "<input type=hidden name=del_prodid value=$index>";
                        echo "</form>";

                    echo "</td>
                </tr>";

            }
			
        }

        echo "<tr>
            <td colspan=4> TOTAL </td>
            <td>$total</td>
        </tr>";
    }
    else{
        echo "<h2 align='center'>Basket is Empty</h2>";
		$total = 0.00;
    }

echo "</table>";



echo "<br><button><a href='clearbasket.php'> Clear Basket </a> </button><br><br>";


if(isset($_SESSION['userId']) and isset($_SESSION['usertype']) and $total!=0 )
{
	echo "<h4 style='font-family:Madhura; font-size:15'>Click here to pay online :&nbsp;&nbsp;&nbsp;<a style='color:#FF0066;' href='online_pay.php'>Pay Online</a>";
	
	
    //display Checkout anchor 
    echo "<br><br><br><br><h3 align='center'>to place your order click : <button><a href='checkout.php'>Checkout</a></button></h3>";
}

elseif (!(isset($_SESSION['userId']) and isset($_SESSION['usertype']) ))
{
    //display Signup anchor 
    //display Login anchor 
    echo "<h2 align='center'>Don't you have an account? <button><a href='signup.php'>Sign Up</a></button><br>
    Have an account? <button><a href=' login.php '> Log In</a></button>";
}
else{
    echo "<h2>Continue shopping <button><a href='home.php'>Girlyy</a></button><br>";
}


include("footfile.html"); 
echo "</body>";

?>