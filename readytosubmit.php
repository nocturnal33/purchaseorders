<?php include("/var/www/includes/po-includes.php"); ?>
<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>PO Database</title>
</head>

<body>
	<!--  CALCULATE AND READY TO SUBMIT PAGE  -->

    <?php
// POST VALUES
// only allow numbers for qty
$qty1= $_POST['qty1'];
$qty1 = preg_replace( '/[^0-9]/', '', $qty1 );

$qty2= $_POST['qty2'];
$qty2 = preg_replace( '/[^0-9]/', '', $qty2 );
    
$qty3= $_POST['qty3'];
$qty3 = preg_replace( '/[^0-9]/', '', $qty3 );    

$qty4= $_POST['qty4'];
$qty4 = preg_replace( '/[^0-9]/', '', $qty4 );
    
$qty5= $_POST['qty5'];
$qty5 = preg_replace( '/[^0-9]/', '', $qty5 );
    
$qty6= $_POST['qty6'];
$qty6 = preg_replace( '/[^0-9]/', '', $qty6 );    
    
$qty7=$_POST['qty7'];
$qty7 = preg_replace( '/[^0-9]/', '', $qty7 );
    
$qty8=$_POST['qty8'];
$qty8 = preg_replace( '/[^0-9]/', '', $qty8 );
    
$qty9=$_POST['qty9'];
$qty9 = preg_replace( '/[^0-9]/', '', $qty9 );
    
$qty10=$_POST['qty10'];
$qty10 = preg_replace( '/[^0-9]/', '', $qty10 );
    
$qty11=$_POST['qty11'];
$qty11 = preg_replace( '/[^0-9]/', '', $qty11 );
    
$qty12=$_POST['qty12'];
$qty12 = preg_replace( '/[^0-9]/', '', $qty12 );

$item1 = $_POST['item1'];
$item2 = $_POST['item2'];
$item3=  $_POST['item3'];
$item4=  $_POST['item4'];
$item5=  $_POST['item5'];
$item6=  $_POST['item6'];
$item7=  $_POST['item7'];
$item8=  $_POST['item8'];
$item9=  $_POST['item9'];
$item10= $_POST['item10'];
$item11= $_POST['item11'];
$item12= $_POST['item12'];

       
$vendor1= $_POST['vendor1'];
$vendor2= $_POST['vendor2'];
$vendor3= $_POST['vendor3'];
$vendor4= $_POST['vendor4'];
$vendor5= $_POST['vendor5'];
$vendor6= $_POST['vendor6'];
$vendor7= $_POST['vendor7'];
$vendor8= $_POST['vendor8'];
$vendor9= $_POST['vendor9'];
$vendor10=$_POST['vendor10'];
$vendor11=$_POST['vendor11'];
$vendor12=$_POST['vendor12'];
    
$cost1=  $_POST['cost1'];
$cost2=  $_POST['cost2'];
$cost3=  $_POST['cost3'];
$cost4=  $_POST['cost4'];
$cost5=  $_POST['cost5'];
$cost6=  $_POST['cost6'];
$cost7=  $_POST['cost7'];
$cost8=  $_POST['cost8'];
$cost9=  $_POST['cost9'];
$cost10= $_POST['cost10'];
$cost11= $_POST['cost11'];
$cost12= $_POST['cost12'];
    
$total1=  $_POST['total1'];
$total2=  $_POST['total2'];
$total3=  $_POST['total3'];
$total4=  $_POST['total4'];
$total5=  $_POST['total5'];
$total6=  $_POST['total6'];
$total7=  $_POST['total7'];
$total8=  $_POST['total8'];
$total9=  $_POST['total9'];
$total10= $_POST['total10'];
$total11= $_POST['total11'];
$total12= $_POST['total12'];

$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
if($shipping < 0.1) {$shipping = 0.00;}
if($tax < 0.1) {$tax = 0.00;}

$total1 =  $qty1 * $cost1;
$total2 =  $qty2 * $cost2;
$total3 =  $qty3 * $cost3;
$total4 =  $qty4 * $cost4;
$total5 =  $qty5 * $cost5;
$total6 =  $qty6 * $cost6;
$total7 =  $qty7 * $cost7;
$total8 =  $qty8 * $cost8;
$total9 =  $qty9 * $cost9;
$total10 = $qty10 * $cost10;
$total11 = $qty11 * $cost11;
$total12 = $qty12 * $cost12;
 //total the cost of lines 1-12 
$subtotal =  $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12;

// paymentMethod
$paymentMethod = $_POST['paymentMethod'];
$_SESSION['datepurchased'] = $datepurchased = $_POST['datepurchased']; //do not change this line
$account = $_POST['account'];
$totalcost = $tax + $subtotal + $shipping;

// Date
//$date = date("m/d/y");

    //NEEDED IF VALUE != VALUE='' IN FORMS
if ($qty1 == null  || $qty1 == "" ){	$qty1 = 0;} 
if ($qty2 == null  || $qty2 == "" ){$qty2 = 0;} 
if ($qty3 == null  || $qty3 == "" ){$qty3 = 0;} 
if ($qty4 == null  || $qty4 == "" ){$qty4 = 0;} 
if ($qty5 == null  || $qty5 == "" ){$qty5 = 0;} 
if ($qty6 == null  || $qty6 == "" ){$qty6 = 0;} 
if ($qty7 == null  || $qty7 == "" ){$qty7 = 0;}
if ($qty8 == null  || $qty8 == "" ){$qty8 = 0;}
if ($qty9 == null  || $qty9 == "" ){$qty9 = 0;} 
if ($qty10 == null || $qty10 == "" ){$qty10 = 0;} 
if ($qty11 == null || $qty11 == "" ){$qty11 = 0;}
if ($qty12 == null || $qty12 == "" ){$qty12 = 0;} 

if($total1 == ""  || $total1 == null) {$total1 = 0;}
if($total2 == ""  || $total2 == null) {$total2 = 0;}
if($total3 == ""  || $total3 == null) {$total3 = 0;}
if($total4 == ""  || $total4 == null) {$total4 = 0;}
if($total5 == ""  || $total5 == null) {$total5 = 0;}
if($total6 == ""  || $total6 == null) {$total6 = 0;}
if($total7 == ""  || $total7 == null) {$total7 = 0;}
if($total8 == ""  || $total8 == null) {$total8 = 0;}
if($total9 == ""  || $total9 == null) {$total9 = 0;}
if($total10 == "" || $total10 == null) {$total10 = 0;}
if($total11 == "" || $total11 == null) {$total11 = 0;}
if($total12 == "" || $total12 == null) {$total12 = 0;}

if($cost1 == ""  || $cost1 == null) {$cost1 = 0;}
if($cost2 == ""  || $cost2 == null) {$cost2 = 0;}
if($cost3 == ""  || $cost3 == null) {$cost3 = 0;}
if($cost4 == ""  || $cost4 == null) {$cost4 = 0;}
if($cost5 == ""  || $cost5 == null) {$cost5 = 0;}
if($cost6 == ""  || $cost6 == null) {$cost6 = 0;}
if($cost7 == ""  || $cost7 == null) {$cost7 = 0;}
if($cost8 == ""  || $cost8 == null) {$cost8 = 0;}
if($cost9 == ""  || $cost9 == null) {$cost9 = 0;}
if($cost10 == "" || $cost10 == null) {$cost10 = 0;}
if($cost11 == "" || $cost11 == null) {$cost11 = 0;}
if($cost12 == "" || $cost12 == null) {$cost12 = 0;}

    


?>

        <div id="pagediv">
            <!-- Page Div -->
            <a href="index.php">Back</a> | <a href="search.php">Search</a>

            <div id="tabeldiv">
                <!-- table Div -->

                <div id="banner">
                    <!-- banner Div -->

                    <div id="headerLeft">
                        <!-- header left Div -->
                        <h2>Company Name</h2>

                        <h3>Purchase Order</h3>
                    </div>
                    <!-- end header left Div -->
                    <div id="headerRight">
                        <!-- header right Div -->
                        <span id="boldHeader">PO Number: </span>
                        
                        
                    <?php   
                        
					/* check connection */
                       
					if (mysqli_connect_errno()) {
						printf("Connect failed: %s\n", mysqli_connect_error());
						exit();
					}
					else{
						echo "<span class='boldRed'>";
						$query = "SELECT id FROM tech_po ORDER by id DESC LIMIT 1";
						$result = mysqli_query($connection, $query); 
						/* associative array */
                        
						$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
						$poNumber = $row["id"] + 1 ;
						//printf ("%s", $row["id"]);
						if ($poNumber < 100){
							echo "000" . $poNumber;
						}
						else if ($poNumber < 1000 && $poNumber > 99){
							echo "00" . $poNumber;
						}
						echo "</span>";
					}
                        
                    ?>
                        </span>
                        <br />
                        <br />
                    <form action="submit.php" method="POST" enctype="multipart/form-data" >
                        <span class="boldtext"> Nathan Carlson </span> <br />
                        <span class="boldtext"> Date: <input type="text" name="datepurchased" value="<?php  echo $datepurchased; ?>" > </span>
                    </div>
                    <!-- end header right Div -->

                    <div id="headerCenter">
                        <img src="images\logo.png" height="100px" width="100" />
                    </div>


                </div> <!-- end banner Div -->

                
                    
                    <table>  
                        <tr>
                            <th></th>
                            <th>QTY</th>
                            <th>Item Description</th>
                            <th>Vendor</th>
                            <th>Cost</th>
                            <th>Total</th>

                        </tr>
                        <tr>
                            <td>1. </td>
                            <td><input type="text" name="qty1" size="3" value="<?php echo $qty1; ?>" required=required ></td>
                            <td><input type="text" name="item1" size="70" value="<?php echo $item1; ?>" required=required></td>
                            <td><input type="text" name="vendor1" size="25" value="<?php echo $vendor1;  ?>" required=required></td>
                            <td><input type="text" name="cost1" size="8" value="<?php echo $cost1;  ?>" required=required ></td>
                            <td><input type="text" name="tota11" size="8" value='<?php if ($total1 == " ") {echo " ";} else {echo $total1;}  ?>' ></td>
                        </tr>
                       
                         <td>2. </td>
                            <td><input type="text" name="qty2" size="3" value="<?php echo $qty2; ?>"></td>
                            <td><input type="text" name="item2" size="70" value="<?php echo $item2; ?>"></td>
                            <td><input type="text" name="vendor2" size="25" value="<?php echo $vendor2;  ?>"></td>
                            <td><input type="text" name="cost2" size="8" value="<?php echo $cost2;  ?>"></td>
                            <td><input type="text" name="total2" size="8" value='<?php if ($total2 == " ") {echo " ";} else {echo $total2;}  ?>' ></td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td><input type="text" name="qty3" size="3" value="<?php echo $qty3; ?>"></td>
                            <td><input type="text" name="item3" size="70" value="<?php echo $item3; ?>"></td>
                            <td><input type="text" name="vendor3" size="25" value="<?php echo $vendor3;  ?>"></td>
                            <td><input type="text" name="cost3" size="8" value="<?php echo $cost3;  ?>"></td>
                            <td><input type="text" name="total3" size="8" value='<?php if ($total3 == " ") {echo " ";} else {echo $total3;}  ?>' ></td>
                        </tr>
                        <tr>
                            <td>4. </td>
                            <td><input type="text" name="qty4" size="3" value="<?php echo $qty4; ?>"></td>
                            <td><input type="text" name="item4" size="70" value="<?php echo $item4; ?>"></td>
                            <td><input type="text" name="vendor4" size="25" value="<?php echo $vendor4;  ?>"></td>
                            <td><input type="text" name="cost4" size="8" value="<?php echo $cost4;  ?>"></td>
                            <td><input type="text" name="total4" size="8" value='<?php if ($total4 == " ") {echo " ";} else {echo $total4;}  ?>' ></td>
                        </tr>
                        <tr>
                            <td>5. </td>
                            <td><input type="text" name="qty5" size="3" value="<?php echo $qty5; ?>"></td>
                            <td><input type="text" name="item5" size="70" value="<?php echo $item5; ?>"></td>
                            <td><input type="text" name="vendor5" size="25" value="<?php echo $vendor5;  ?>"></td>
                            <td><input type="text" name="cost5" size="8" value="<?php echo $cost5;  ?>"></td>
                            <td><input type="text" name="total5" size="8" value='<?php if ($total5 == " ") {echo " ";} else {echo $total5;}  ?>'></td>
                        </tr>
                        <tr>
                            <td>6. </td>
                            <td><input type="text" name="qty6" size="3" value="<?php echo $qty6; ?>"></td>
                            <td><input type="text" name="item6" size="70" value="<?php echo $item6; ?>"></td>
                            <td><input type="text" name="vendor6" size="25" value="<?php echo $vendor6;  ?>"></td>
                            <td><input type="text" name="cost6" size="8" value="<?php echo $cost6;  ?>"></td>
                            <td><input type="text" name="total6" size="8" value='<?php if ($total6 == " ") {echo " ";} else {echo $total6;}  ?>' ></td>
                        </tr>
                        <tr>
                            <td>7. </td>
                            <td><input type="text" name="qty7" size="3" value="<?php echo $qty7; ?>"></td>
                            <td><input type="text" name="item7" size="70" value="<?php echo $item7; ?>"></td>
                            <td><input type="text" name="vendor7" size="25" value="<?php echo $vendor7;  ?>"></td>
                            <td><input type="text" name="cost7" size="8" value="<?php echo $cost7;  ?>"></td>
                            <td><input type="text" name="total7" size="8" value=' <?php if ($total7 == " ") {echo " ";} else {echo $total7;}  ?>' ></td>
                        </tr>
                        
                        <tr>
                            <td>8. </td>
                            <td><input type="text" name="qty8" size="3" value="<?php echo $qty8; ?>"></td>
                            <td><input type="text" name="item8" size="70" value="<?php echo $item8; ?>"></td>
                            <td><input type="text" name="vendor8" size="25" value="<?php echo $vendor8;  ?>"></td>
                            <td><input type="text" name="cost8" size="8" value="<?php echo $cost8;  ?>"></td>
                            <td><input type="text" name="total8" size="8" value='<?php if ($total8 == " ") {echo " ";} else {echo $total8;}  ?>' ></td>
                        </tr>
                        
                         <tr>

                            <td>9. </td>
                            <td><input type="text" name="qty9" size="3" value="<?php echo $qty9; ?>"></td>
                            <td><input type="text" name="item9" size="70" value="<?php echo $item9; ?>"></td>
                            <td><input type="text" name="vendor9" size="25" value="<?php echo $vendor9;  ?>"></td>
                            <td><input type="text" name="cost9" size="8" value="<?php echo $cost9;  ?>"></td>
                            <td><input type="text" name="total9" size="8" value='<?php if ($total9 == " ") {echo " ";} else {echo $total9;}  ?>' ></td>
                        </tr>
                        
                         <tr>

                            <td>10. </td>
                            <td><input type="text" name="qty10" size="3" value="<?php echo $qty10; ?>"></td>
                            <td><input type="text" name="item10" size="70" value="<?php echo $item10; ?>"></td>
                            <td><input type="text" name="vendor10" size="25" value="<?php echo $vendor10;  ?>"></td>
                            <td><input type="text" name="cost10" size="8" value="<?php echo $cost10;  ?>"></td>
                            <td><input type="text" name="total10" size="8" value='<?php if ($total10 == " ") {echo " ";} else {echo $total10;}  ?>' ></td>
                        </tr>
                        <tr>

                            <td>11. </td>
                            <td><input type="text" name="qty11" size="3" value="<?php echo $qty11; ?>"></td>
                            <td><input type="text" name="item11" size="70" value="<?php echo $item11; ?>"></td>
                            <td><input type="text" name="vendor11" size="25" value="<?php echo $vendor11;  ?>"></td>
                            <td><input type="text" name="cost11" size="8" value="<?php echo $cost11;  ?>"></td>
                            <td><input type="text" name="total11" size="8" value='<?php if ($total11 == " ") {echo " ";} else {echo $total11;}  ?>' ></td>
                        </tr>
                        
                        <tr>

                            <td>12. </td>
                            <td><input type="text" name="qty12" size="3" value="<?php echo $qty12; ?>"></td>
                            <td><input type="text" name="item12" size="70" value="<?php echo $item12; ?>"></td>
                            <td><input type="text" name="vendor12" size="25" value="<?php echo $vendor12;  ?>"></td>
                            <td><input type="text" name="cost12" size="8" value="<?php echo $cost12;  ?>"></td>
                            <td><input type="text" name="total12" size="8" value='<?php if ($total12 == " ") {echo " ";} else {echo $total12;}  ?>' ></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="boldtext"> Subtotal: </td>
                            <td>$<input type="text" size="7" name="subtotal" value="<?php echo $subtotal; ?>" ></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="boldtext"> Tax: </td>
                            <td>$<input type="text" name="tax" size="7" value=<?php if ($tax==NULL || $tax==0 ){echo "0";}else echo $tax; ?> ></td>
                        </tr>


                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="boldtext"> Shipping: </td>
                            <td>$<input type="text" name="shipping" size="7" value=<?php if ($shipping==NULL || $shipping==0 ){echo "0";}else echo $shipping; ?>></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>

                            <td class="boldtext"> Total: </td>
                            <td>$<input type="text" name="totalcost" size="7" value=<?php echo $totalcost; ?> ></td>
                        </tr>
                </table>
    </div>
            <!--  end table Div -->
    <br />
    <div id="bx5">
        <table>
            <tr>
                <td>NOTES: </td>
            </tr>
            <tr>
                <td> <textarea name="ponotes" rows="4" cols="70" placeholder="Enter relevant data here"></textarea> </td>
            </tr>
        </table>
    </div>

    <br />
    <div id="payments">
        <table>
            <tr>
                <td class="boldtext">
                    <?php echo "Payment Method: "?> </td>
                <td><input type="text" name="payment" size="25" value='<?php echo $paymentMethod; ?>' ></td>
            </tr>
            <tr>
                <td class="boldtext">
                    <?php echo "Account: "?> </td>
                <td><input type="text" name="account" size="25" value='<?php echo $account; ?>' ></td>
            </tr>
        </table>
    </div>
    <br />
    <div id="submitdiv">
        <table>
            <tr>
                <td colspan="2">Select Receipts to Upload</td>
            </tr>

            <tr>
                <td><input type="file" name="receipt1"></td>
            </tr>
            <tr>
                <td><input type="file" name="receipt2"></td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td><input type="submit" name="PO" value="Submit PO" /></td>
            </tr>
            </div>

        </table>
    </form>
    </div>
        <!-- page div -->
</body>

</html>
