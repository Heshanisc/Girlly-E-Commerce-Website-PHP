<?php
session_start();
include("db.php");
$pagename="Checkout Page"; //assign pagename to a variable
echo "<link rel=stylesheet type=text/css href=stylesheet.css>"; //assign stylesheet
echo "<title>".$pagename."</title>"; //display name of the page in window title
echo "<body>";
include ("headfile.php"); 
//include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page 

		if(isset($_POST['Opay'])){
			$method = 'OP';
			$CardNum = $_POST['Cno'];
			$eDate = $_POST['expiry'];
			$CVC = $_POST['cvc'];
		}else{
			$method = 'Cash';
		}

        $currentDateTime=date('Y-m-d H:i:s');//assign system date to a variable
        $userId = $_SESSION['userId'];// assign userId to a variable
		$total=0.00;
        //SQL query to insert the order record 
        $SQL="INSERT INTO Orders (userId, orderDateTime,paymentMethod,orderStatus) VALUES ('$userId', '$currentDateTime','$method', 'Placed')";
                    
        //Run the SQL query.
        $exeSQL=mysqli_query($conn, $SQL);
        $exeError=mysqli_errno($conn);


        if($exeError=="0")
        {
            $SQL="select MAX(orderNo) AS latestOrderNumber from Orders where userId='$userId'";

            $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

            $arrayord=mysqli_fetch_array($exeSQL);

            //store the order number
            $orderNumber=$arrayord['latestOrderNumber'];

            //display confirm message
            echo"<br>";
            echo "<h2 align='center'>The order has been placed successfully. the order number is: <b> $orderNumber </b></h2><br>";

            echo "<table id='checkouttable' style='width:50%'>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th> 
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>";
				
				
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

                        //display the product name, price, ordered quantity and subtotal 
                        echo "<tr> 
                            <td> $arrayp[prodName] </td> 
                            <td> $arrayp[prodPrice] </td> 
                            <td> $value </td>
                            <td> $subtotal </td>   
                        </tr>";


                        //SQL query to store details of ordered items 
                        $SQL="INSERT INTO OrderProduct (orderNo, prodId,quantityOrdered,subTotal)VALUES ('$orderNumber','$index','$value', '$subtotal')";
                        
                        $exeSQL=mysqli_query($conn, $SQL);
                        $exeError=mysqli_errno($conn);
						
						
                    }
                }
  
                //display total
                echo "<tr>
                    <td colspan=3> TOTAL </td>
                    <td>$total</td>
                </tr>
            </table>";

            //SQL query to update the total value 
            $SQL="UPDATE Orders SET orderTotal=$total  where userId='$userId' and orderNo ='$orderNumber'";

            $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
            $exeError=mysqli_errno($conn);
			
			

			//display logout button.
        
            echo "<h2 align='center'><br>Do you want to Log Out?<br><button><a href='logout.php'>Log Out</a></button>"; 
        }

        else 
        {
            //Display an error message if the placing order is unsucessful
            echo "<br><h2 align='center'>Sorry, Something went wrong!! You're order is not placed.</h2><br>";  
            echo "<h3 align='center'>Do you want to Log Out? <button><a href='logout.php'>Log Out</a></button></h3>"; 
        }

        unset($_SESSION['basket']);

include("footfile.html"); 
echo "</body>";
?>