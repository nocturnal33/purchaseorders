<?php include("/var/www/includes/po-includes.php"); ?>

<?php session_start(); ?>

<!DOCTYPE html>
   <head>
		<link rel="stylesheet" href="style.css">
      <title>PO Database</title>
   </head>
   <body>
   
	<!--  SUBMIT PURCHASE ORDER TO DATABASE   -->   
   
<a href="index.php">Back to PO | <a href="search.php" >Search</a>
<br />

<?php  


$qty1= $_POST['qty1'];
$qty2= $_POST['qty2'];
$qty3= $_POST['qty3'];
$qty4= $_POST['qty4'];
$qty5= $_POST['qty5'];
$qty6= $_POST['qty6'];
$qty7=$_POST['qty7'];
$qty8=$_POST['qty8'];
$qty9=$_POST['qty9'];
$qty10=$_POST['qty10'];
$qty11=$_POST['qty11'];
$qty12=$_POST['qty12'];

$item1 = $_POST['item1'];
$item1 = str_replace('"', '\"', $item1);
$item1 = str_replace("'", "\'", $item1);

$item2 = $_POST['item2'];
$item2 = str_replace('"', '\"', $item2);
$item2 = str_replace("'", "\'", $item2);

$item3=$_POST['item3'];
$item3 = str_replace('"', '\"', $item3);
$item3 = str_replace("'", "\'", $item3);    

$item4=$_POST['item4'];
$item4 = str_replace('"', '\"', $item4);
$item4 = str_replace("'", "\'", $item4);
    
$item5=$_POST['item5'];
$item5 = str_replace('"', '\"', $item5);
$item5 = str_replace("'", "\'", $item5);
    
$item6=$_POST['item6'];
$item6 = str_replace('"', '\"', $item6);
$item6 = str_replace("'", "\'", $item6);
    
$item7=$_POST['item7'];
$item7 = str_replace('"', '\"', $item7);
$item7 = str_replace("'", "\'", $item7);
    
$item8=$_POST['item8'];
$item8 = str_replace('"', '\"', $item8);
$item8 = str_replace("'", "\'", $item8);
    
$item9=$_POST['item9'];
$item9 = str_replace('"', '\"', $item9);
$item9 = str_replace("'", "\'", $item9);
    
$item10=$_POST['item10'];
$item10 = str_replace('"', '\"', $item10);
$item10 = str_replace("'", "\'", $item10);    
    
$item11=$_POST['item11'];
$item11 = str_replace('"', '\"', $item11);
$item11 = str_replace("'", "\'", $item11);  
    
$item12=$_POST['item12'];
$item12 = str_replace('"', '\"', $item12);
$item12 = str_replace("'", "\'", $item12);  
    

$vendor1 = $_POST['vendor1'];
$vendor1 = str_replace('"', '\"', $vendor1);
$vendor1 = str_replace("'", "\'", $vendor1);

$vendor2 = $_POST['vendor2'];
$vendor2 = str_replace('"', '\"', $vendor2);
$vendor2 = str_replace("'", "\'", $vendor2);

$vendor3=$_POST['vendor3'];
$vendor3 = str_replace('"', '\"', $vendor3);
$vendor3 = str_replace("'", "\'", $vendor3);    

$vendor4=$_POST['vendor4'];
$vendor4 = str_replace('"', '\"', $vendor4);
$vendor4 = str_replace("'", "\'", $vendor4);
    
$vendor5=$_POST['vendor5'];
$vendor5 = str_replace('"', '\"', $vendor5);
$vendor5 = str_replace("'", "\'", $vendor5);
    
$vendor6=$_POST['vendor6'];
$vendor6 = str_replace('"', '\"', $vendor6);
$vendor6 = str_replace("'", "\'", $vendor6);
    
$vendor7=$_POST['vendor7'];
$vendor7 = str_replace('"', '\"', $vendor7);
$vendor7 = str_replace("'", "\'", $vendor7);
    
$vendor8=$_POST['vendor8'];
$vendor8 = str_replace('"', '\"', $vendor8);
$vendor8 = str_replace("'", "\'", $vendor8);
    
$vendor9=$_POST['vendor9'];
$vendor9 = str_replace('"', '\"', $vendor9);
$vendor9 = str_replace("'", "\'", $vendor9);
    
$vendor10=$_POST['vendor10'];
$vendor10 = str_replace('"', '\"', $vendor10);
$vendor10 = str_replace("'", "\'", $vendor10);    
    
$vendor11=$_POST['vendor11'];
$vendor11 = str_replace('"', '\"', $vendor11);
$vendor11 = str_replace("'", "\'", $vendor11);  
    
$vendor12=$_POST['vendor12'];
$vendor12 = str_replace('"', '\"', $vendor12);
$vendor12 = str_replace("'", "\'", $vendor12); 
    
$cost1=$_POST['cost1'];
$cost2=$_POST['cost2'];
$cost3=$_POST['cost3'];
$cost4=$_POST['cost4'];
$cost5=$_POST['cost5'];
$cost6=$_POST['cost6'];
$cost7=$_POST['cost7'];
$cost8=$_POST['cost8'];
$cost9=$_POST['cost9'];
$cost10= $_POST['cost10'];
$cost11=$_POST['cost11'];
$cost12=$_POST['cost12'];
$total1=$_POST['total1'];
$total2=$_POST['total2'];
$total3=$_POST['total3'];
$total4=$_POST['total4'];
$total5=$_POST['total5'];
$total6=$_POST['total6'];
$total7=$_POST['total7'];
$total8=$_POST['total8'];
$total9=$_POST['total9'];
$total10=$_POST['total10'];
$total11=$_POST['total11'];
$total12=$_POST['total12'];
    
$subtotal = $_POST['subtotal'];    
$tax=$_POST['tax'];
$shipping=$_POST['shipping'];

$total1 = $qty1 * $cost1;
$cost1 = number_format((float)$cost1, 2, '.', '');
$total1 = number_format((float)$total1, 2, '.', '');
echo "cost1: " . $cost1 . "<br />";
echo "total1: " . $total1 . "<br />"; 


$total2 = $qty2 * $cost2;
$cost2 = number_format((float)$cost2, 2, '.', '');
$total2 = number_format((float)$total2, 2, '.', '');
    
$total3 = $qty3 * $cost3;
$cost3 = number_format((float)$cost3, 2, '.', '');
$total3 = number_format((float)$total3, 2, '.', '');
    
$total4 = $qty4 * $cost4;
$cost4 = number_format((float)$cost4, 2, '.', '');
$total4 = number_format((float)$total4, 2, '.', '');
    
$total5 = $qty5 * $cost5;
$cost5 = number_format((float)$cost5, 2, '.', '');
$total5 = number_format((float)$total5, 2, '.', '');
    
$total6 = $qty6 * $cost6;
$cost6 = number_format((float)$cost6, 2, '.', '');
$total6 = number_format((float)$total6, 2, '.', '');
    
$total7 = $qty7 * $cost7;
$cost7 = number_format((float)$cost7, 2, '.', '');
$total7 = number_format((float)$total7, 2, '.', '');
    
$total8 = $qty8 * $cost8;
$cost8 = number_format((float)$cost8, 2, '.', '');
$total8 = number_format((float)$total8, 2, '.', '');
    
$total9 = $qty9 * $cost9;
$cost9 = number_format((float)$cost9, 2, '.', '');
$total9 = number_format((float)$total9, 2, '.', '');
    
$total10 = $qty10 * $cost10;
$cost10 = number_format((float)$cost10, 2, '.', '');
$total10 = number_format((float)$total10, 2, '.', '');
    
$total11 = $qty11 * $cost11;
$cost11 = number_format((float)$cost11, 2, '.', '');
$total11 = number_format((float)$total11, 2, '.', '');
    
$total12 = $qty7 * $cost7;
$cost12 = number_format((float)$cost12, 2, '.', '');
$total12 = number_format((float)$total12, 2, '.', '');
 
$account = $_POST['account']; 
$payment = $_POST['payment']; 
 

$totalcost = $_POST['totalcost'];
$totalcost = number_format((float)$totalcost, 2, '.', '');

$submitPO = $_POST['PO'];
//$dateExt = date('-d-m-y-H_i_s');
$receipt1 = $_POST['receipt1'];
$receipt2 = $_POST['receipt2'];
//$image1 = $_POST['image'];

$receiptA = $_FILES['receipt1']['name'];
$fileExt2 = pathinfo($_FILES['receipt1']['name']);
$receiptA = $fileExt2['filename'].'_'.$dateExt.'.'.$fileExt2['extension'];
$receiptA = preg_replace('/\s+/', '_', $receiptA);
$tmp_A = $_FILES['receipt1']['tmp_name'];

$receiptB = $_FILES['receipt2']['name'];
$fileExt3 = pathinfo($_FILES['receipt2']['name']);
$receiptB = $fileExt3['filename'].'_'.$dateExt.'.'.$fileExt3['extension'];
$receiptB = preg_replace('/\s+/', '_', $receiptB);
$tmp_B = $_FILES['receipt2']['tmp_name'];
$datepurchased = $_SESSION['datepurchased'];
//$date = date("m/d/y");
$uploadLocation = "uploads/";

//PO NOTES REMOVE CHARACTERS
$ponotes = $_POST['ponotes'];
//$ponotes = preg_replace('/[^A-Za-z0-9\. -]/', '', $ponotes);
$ponotes = str_replace('"', '\"', $ponotes);
$ponotes = str_replace("'", "\'", $ponotes);


$shipping = $_POST['shipping'];
$shipping = number_format((float)$shipping, 2, '.', '');

if(isset($submitPO) ) { //submit Button

	if(!empty($receiptA)){

		$uploadLocation = "uploads/";
		
		echo "<br />" . $uploadLocation;

			if(move_uploaded_file($tmp_A, $uploadLocation . $receiptA)){

				$a_URL = "http://192.168.0.1/PurchaseOrders/uploads/" . $receiptA;
				echo "Document uploaded: ";
				echo "<a href=" . $a_URL . ">" . $receiptA . "</a>";
				echo "<br />";
			} //move uploads

			else{
				echo "Could not upload Receipt 1 <br />";
			} // else move uploads not able to

		} // not empty doc
 		else {
			echo "uploaded A";
		} // empty doc
	// end receipt A
	// begin Receipt B
	if(!empty($receiptB)){

		$uploadLocation = "uploads/";
		echo "<br />" . $uploadLocation;

			if(move_uploaded_file($tmp_B, $uploadLocation . $receiptB)){

				$b_URL = "http://192.168.0.1/PurchaseOrders/uploads/" . $receiptB;
				echo "Document uploaded: ";
				echo "<a href=" . $b_URL . ">" . $receiptB . "</a>";
				echo "<br />";
			} //move uploads

			else{
				echo "Could not upload Receipt #2 <br />";
			} // else move uploads not able to

		} // not empty doc
 		else {
			echo "uploaded B";
		} // empty doc
	// end Receipt B
}



if (!mysqli_query($connection, "INSERT INTO $table (id, qty1, qty2, qty3, qty4, qty5, qty6, qty7, qty8, qty9, qty10, qty11, qty12,
item1, item2, item3, item4, item5, item6, item7, item8, item9, item10, item11, item12,
vendor1, vendor2, vendor3, vendor4, vendor5, vendor6, vendor7, vendor8, vendor9, vendor10, vendor11, vendor12,
cost1, cost2, cost3, cost4, cost5, cost6, cost7, cost8, cost9, cost10, cost11, cost12, 
total1, total2, total3, total4, total5, total6, total7, total8, total9, total10, total11, total12, 
payment, account, ponotes, dateAdded, subtotal, tax, shipping, totalcost, receipt1, receipt2)
VALUES 
(null, '$qty1', '$qty2','$qty3','$qty4','$qty5','$qty6','$qty7','$qty8','$qty9','$qty10','$qty11','$qty12',
'$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12',
'$vendor1','$vendor2','$vendor3','$vendor4','$vendor5','$vendor6','$vendor7','$vendor8','$vendor9','$vendor10','$vendor11','$vendor12',
'$cost1','$cost2','$cost3','$cost4','$cost5','$cost6','$cost7','$cost8','$cost9','$cost10','$cost11','$cost12',
'$total1','$total2','$total3','$total4','$total5','$total6','$total7','$total8','$total9','$total10','$total11','$total12',
'$payment','$account','$ponotes','$datepurchased','$subtotal','$tax','$shipping','$totalcost', '$a_URL', '$b_URL')"))
{
 echo("Error description: " . mysqli_error($connection));
  }
  else{
	   $_SESSION['lastPO'] = $last_id = mysqli_insert_id($connection);
	   echo "<br />PO NUMBER: " . $last_id . "<br />";
	  
  }
mysqli_close($connection);



// don't allow user to upload multiple documents by refreshing page
header('location: http://192.168.0.1/PurchaseOrders/po_info.php');

 ?>
</body>
</html>
