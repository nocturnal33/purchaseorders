<!DOCTYPE html>
   <head>
		<link rel="stylesheet" href="style.css">
      <title>PO Database</title>
   </head>
   <body>
   
   
   <!-- SEARCH RESULTS PAGE  -->
   
   
   <?php
 
   $searchby = $_POST['searchby'];
   $searchdata = $_POST['searchdata'];
   $submitsearch= $_POST['submitsearch'];
   $timeStart = $_POST['timeStart'];
   $timeEnd = $_POST['timeEnd'];
    
	
if(isset($submitsearch)){
	include("/var/www/includes/po-includes.php");
	//mysqli_select_db($dbname);

	if(!empty($searchby) && ($searchby == 'PO' )) { // PO Number / ID

		$search_db = "SELECT * FROM $table WHERE id = '$searchdata' ";
		$sql = mysqli_query($connection, $search_db) or die(mysqli_error());

	}


	elseif(!empty($searchby) && ($searchby == 'Date' )) {  //DATE

		$search_db = "SELECT * FROM $table WHERE dateAdded = '$searchdata' ";
		$sql = mysqli_query($connection, $search_db) or die(mysqli_error());

	}
    

	elseif(!empty($searchby) && ($searchby == 'Payment_Type' )) {  //payment
		
		$search_db = "SELECT * FROM $table WHERE payment like '%$searchdata%' ";
		$sql = mysqli_query($connection, $search_db) or die(mysqli_error());

	}


	elseif(!empty($searchby) && ($searchby == 'Account' )) {  //Account

		$search_db = "SELECT * FROM $table WHERE account = '$searchdata' ";
		$sql = mysqli_query($connection, $search_db) or die(mysqli_error());

	}


	elseif(!empty($searchby) && ($searchby == 'Total' )) {

		$search_db = "SELECT * FROM $table WHERE totalcost = '$searchdata' OR
															total1 = '$searchdata' OR
															total2 = '$searchdata' OR
															total2 = '$searchdata' OR
															total3 = '$searchdata' OR
															total4 = '$searchdata' OR
															total5 = '$searchdata' OR
															total6 = '$searchdata' OR
															total7 = '$searchdata' OR
															total8 = '$searchdata' OR
															total9 = '$searchdata' OR
															total10 = '$searchdata' OR
															total11 = '$searchdata' OR
															total12 = '$searchdata' OR
															cost1 = '$searchdata' OR
															cost2 = '$searchdata' OR
															cost3 = '$searchdata' OR
															cost4 = '$searchdata' OR
															cost5 = '$searchdata' OR
															cost6 = '$searchdata' OR
															cost7 = '$searchdata' OR
															cost8 = '$searchdata' OR
															cost9 = '$searchdata' OR
															cost10 = '$searchdata' OR
															cost11 = '$searchdata' OR
															cost12 = '$searchdata' OR
															totalcost = '$searchdata' ";

		$sql = mysqli_query($connection, $search_db) or die(mysqli_error());

	}

	elseif(!empty($searchby) && ($searchby == 'Description' )) {

		$search_db = "SELECT * FROM $table WHERE item1 like '%$searchdata%' OR
												item2 like '%$searchdata%' OR
												item3 like '%$searchdata%' OR
												item4 like '%$searchdata%' OR
												item5 like '%$searchdata%' OR
												item6 like '%$searchdata%' OR
												item7 like '%$searchdata%' OR
												item8 like '%$searchdata%' OR
												item9 like '%$searchdata%' OR
												item10 like '%$searchdata%' OR
												item11 like '%$searchdata%' OR
												item12 like '%$searchdata%' ";
		$sql = mysqli_query($connection, $search_db) or die(mysqli_error());
	}

	elseif(!empty($searchby) && ($searchby == 'Vendor' )) {  //Account

		$search_db = "SELECT * FROM $table WHERE vendor1 like '%$searchdata%' OR
												vendor2 like '%$searchdata%' OR
												vendor3 like '%$searchdata%' OR
												vendor4 like '%$searchdata%' OR
												vendor5 like '%$searchdata%' OR
												vendor6 like '%$searchdata%' OR
												vendor7 like '%$searchdata%' OR
												vendor8 like '%$searchdata%' OR
												vendor9 like '%$searchdata%' OR
												vendor10 like '%$searchdata%' OR
												vendor11 like '%$searchdata%' OR
												vendor12 like '%$searchdata%' ";
		$sql = mysqli_query($connection, $search_db) or die(mysqli_error());

	}
    
        elseif(!empty($timeStart) && !empty($timeEnd) && empty($searchby)) {  //SEARCH DATE RANGE
        
        $search_db = "SELECT * FROM $table WHERE dateAdded BETWEEN '$timeStart' AND '$timeEnd' order by dateAdded asc ";
		//$search_db = "SELECT * FROM $table WHERE dateAdded = '$searchdata' ";
		$sql = mysqli_query($connection, $search_db) or die(mysqli_error());
        print($search_db);

	}


	else{
		echo "<h2>No search results found</h2>";
		echo "<a href='search.php'>Go Back</a>";
	}
}

		$result = mysqli_query($connection, $search_db);
		while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $qty1 = $row['qty1'];
        $qty2 = $row['qty2'];
        $qty3 = $row['qty3'];
        $qty4 = $row['qty4'];
        $qty5 = $row['qty5'];
        $qty6 = $row['qty6'];
        $qty7 = $row['qty7'];
        $qty8 = $row['qty8'];
        $qty9 = $row['qty9'];
        $qty10 = $row['qty10'];
        $qty11 = $row['qty11'];
        $qty12 = $row['qty12'];
			
			$item1 = $row['item1'];        
			$item2 = $row['item2'];        
			$item3 = $row['item3'];        
			$item4 = $row['item4'];        
			$item5 = $row['item5'];        
			$item6 = $row['item6'];        
			$item7 = $row['item7'];        
			$item8 = $row['item8'];        
			$item9 = $row['item9'];        
			$item10 = $row['ite10'];        
			$item11 = $row['item11'];        
			$item12 = $row['item12'];   
			
			$vendor1 = $row['vendor1'];     
			$vendor2 = $row['vendor2'];     
			$vendor3 = $row['vendor3'];     
			$vendor4 = $row['vendor4'];     
			$vendor5 = $row['vendor5'];     
			$vendor6 = $row['vendor6'];     
			$vendor7 = $row['vendor7'];     
			$vendor8 = $row['vendor8'];     
			$vendor9 = $row['vendor9'];     
			$vendor11 = $row['vendor10'];     
			$vendor11 = $row['vendor11'];     
			$vendor12 = $row['vendor12']; 
			
			$cost1 = $row['cost1'];    
			$cost2 = $row['cost2'];    
			$cost3 = $row['cost3'];    
			$cost4 = $row['cost4'];    
			$cost5 = $row['cost5'];    
			$cost6 = $row['cost6'];    
			$cost7 = $row['cost7'];    
			$cost8 = $row['cost8'];    
			$cost9 = $row['cost9'];    
			$cost10 = $row['cost10'];    
			$cost11 = $row['cost11'];    
			$cost12 = $row['cost12'];    
			
			$total1 = $row['total1'];
			$total2 = $row['total2'];
			$total3 = $row['total3'];
			$total4 = $row['total4'];
			$total5 = $row['total5'];
			$total6 = $row['total6'];
			$total7 = $row['total7'];
			$total8 = $row['total8'];
			$total9 = $row['total9'];
			$total10 = $row['total10'];
			$total11 = $row['total11'];
			$total12 = $row['total12'];
        
        $tax = $row['tax'];
        $shipping = $row['shipping'];
        $subtotal = $row['subtotal'];
        $totalcost = $row['totalcost'];
        $paymentMethod = $row['payment'];
        $account = $row['account'];
        $dateAdded = $row['dateAdded'];
        $url_A = $row['receipt1'];
        $url_B = $row['receipt2'];
        $poNotes = $row['ponotes'];
        
      
    echo ' 
  <div id="pagediv">
	<div id="tabeldiv">
			<div id="banner">
			<div id="headerLeft">
				<h2>Company Name</h2>
				<h3>Purchase Order | Vendor: ' . $vendor1 . '</h3>
			</div>
			<div id="headerRight">
				<span id="boldHeader">PO Number: </span><span class="boldRed">' . $id  .  ' </span>						
				<br />
				<br />
				<span class= "boldtext"> Nathan Carlson </span> <br />
				<span class="boldtext"> Date: ' . $dateAdded . ' </span>
			</div>
			
			<div id="headerCenter">
				<img src="images\logo.png" height="100px" width="100" />
			</div>
		</div>
	<table>
		     	<tr>
					<td></td>
					<th>QTY</th>
					<th>Item Description</th>
					<th>Vendor</th>
					<th>Cost</th>
					<th>Total</th>

         	</tr>
            <tr>
               <td>1. </td>
               <td><input type="text" readonly name="qty1" size="3" value= "'. $qty1 .'" ></td>
               <td><input type="text" readonly name="item1" size="70" value= "' . $item1 . '" ></td>
			   <td><input type="text" readonly name="vendor1" size="25" value= "' . $vendor1 . '" ></td>
               <td><input type="text" readonly name="cost1"  size="8" value= "' . $cost1 . '" ></td>
               <td><input type="text" readonly name="tota1"  size="8" value= "' . $total1 . '" ></td>
            </tr>
            <tr>
               <td>2. </td>
               <td><input type="text" readonly name="qty2" size="3" value= "'. $qty2 .'" ></td>
               <td><input type="text" readonly name="item2" size="70" value= "' . $item2 . '" ></td>
			   <td><input type="text" readonly name="vendor2" size="25" value= "' . $vendor2 . '" ></td>
               <td><input type="text" readonly name="cost2"  size="8" value= "' . $cost2 . '" ></td>
               <td><input type="text" readonly name="tota2"  size="8" value= "' . $total2 . '" ></td>
            </tr>
            <tr>
               <td>3. </td>
               <td><input type="text" readonly name="qty3" size="3" value= "'. $qty3 .'" ></td>
               <td><input type="text" readonly name="item3" size="70" value= "' . $item3 . '" ></td>
			   <td><input type="text" readonly name="vendor3" size="25" value= "' . $vendor3 . '" ></td>
               <td><input type="text" readonly name="cost3"  size="8" value= "' . $cost3 . '" ></td>
               <td><input type="text" readonly name="tota3"  size="8" value= "' . $total3 . '" ></td>
            </tr>
            <tr>
               <td>4. </td>
               <td><input type="text" readonly name="qty4" size="3" value= "'. $qty4 .'" ></td>
               <td><input type="text" readonly name="item4" size="70" value= "' . $item4 . '" ></td>
			   <td><input type="text" readonly name="vendor4" size="25" value= "' . $vendor4 . '" ></td>
               <td><input type="text" readonly name="cost4"  size="8" value= "' . $cost4 . '" ></td>
               <td><input type="text" readonly name="tota4"  size="8" value= "' . $total4 . '" ></td>
            </tr>
            <tr>
               <td>5. </td>
               <td><input type="text" readonly name="qty5" size="3" value= "'. $qty5 .'" ></td>
               <td><input type="text" readonly name="item5" size="70" value= "' . $item5 . '" ></td>
			   <td><input type="text" readonly name="vendor5" size="25" value= "' . $vendor5 . '" ></td>
               <td><input type="text" readonly name="cost5"  size="8" value= "' . $cost5 . '" ></td>
               <td><input type="text" readonly name="tota5"  size="8" value= "' . $total5 . '" ></td>
            </tr>
            <tr>
               <td>6. </td>
               <td><input type="text" readonly name="qty6" size="3" value= "'. $qty6 .'" ></td>
               <td><input type="text" readonly name="item6" size="70" value= "' . $item6 . '" ></td>
			   <td><input type="text" readonly name="vendor6" size="25" value= "' . $vendor6 . '" ></td>
               <td><input type="text" readonly name="cost6"  size="8" value= "' . $cost6 . '" ></td>
               <td><input type="text" readonly name="tota6"  size="8" value= "' . $total6 . '" ></td>
            </tr>
            <tr>
               <td>7. </td>
               <td><input type="text" readonly name="qty7" size="3" value= "'. $qty7 .'" ></td>
               <td><input type="text" readonly name="item7" size="70" value= "' . $item7 . '" ></td>
			   <td><input type="text" readonly name="vendor7" size="25" value= "' . $vendor7 . '" ></td>
               <td><input type="text" readonly name="cost7"  size="8" value= "' . $cost7 . '" ></td>
               <td><input type="text" readonly name="tota7"  size="8" value= "' . $total7 . '" ></td>
            </tr>
            <tr>
               <td>8. </td>
               <td><input type="text" readonly name="qty8" size="3" value= "'. $qty8 .'" ></td>
               <td><input type="text" readonly name="item8" size="70" value= "' . $item8 . '" ></td>
			   <td><input type="text" readonly name="vendor8" size="25" value= "' . $vendor8 . '" ></td>
               <td><input type="text" readonly name="cost8"  size="8" value= "' . $cost8 . '" ></td>
               <td><input type="text" readonly name="tota8"  size="8" value= "' . $total8 . '" ></td>
            </tr>
            <tr>
               <td>9. </td>
               <td><input type="text" readonly name="qty9" size="3" value= "'. $qty9 .'" ></td>
               <td><input type="text" readonly name="item9" size="70" value= "' . $item9 . '" ></td>
			   <td><input type="text" readonly name="vendor9" size="25" value= "' . $vendor9 . '" ></td>
               <td><input type="text" readonly name="cost9"  size="8" value= "' . $cost9 . '" ></td>
               <td><input type="text" readonly name="tota9"  size="8" value= "' . $total9 . '" ></td>
            </tr>
            <tr>
               <td>10. </td>
               <td><input type="text" readonly name="qty10" size="3" value= "'. $qty10 .'" ></td>
               <td><input type="text" readonly name="item10" size="70" value= "' . $item10 . '" ></td>
			   <td><input type="text" readonly name="vendor10" size="25" value= "' . $vendor10 . '" ></td>
               <td><input type="text" readonly name="cost10"  size="8" value= "' . $cost10 . '" ></td>
               <td><input type="text" readonly name="tota10"  size="8" value= "' . $total10 . '" ></td>
            </tr>

            <tr>
               <td>11. </td>
               <td><input type="text" readonly name="qty11" size="3" value= "'. $qty11 .'" ></td>
               <td><input type="text" readonly name="item11" size="70" value= "' . $item11 . '" ></td>
			   <td><input type="text" readonly name="vendor11" size="25" value= "' . $vendor11 . '" ></td>
               <td><input type="text" readonly name="cost11"  size="8" value= "' . $cost11 . '" ></td>
               <td><input type="text" readonly name="tota11"  size="8" value= "' . $total11 . '" ></td>
            </tr>

            <tr>
               <td>12. </td>
                  <td><input type="text" readonly name="qty12" size="3" value= "'. $qty12 .'" ></td>
               <td><input type="text" readonly name="item12" size="70" value= "' . $item12 . '" ></td>
			   <td><input type="text" readonly name="vendor12" size="25" value= "' . $vendor12 . '" ></td>
               <td><input type="text" readonly name="cost12"  size="8" value= "' . $cost12 . '" ></td>
               <td><input type="text" readonly name="tota12"  size="8" value= "' . $total12 . '" ></td>
            </tr>

            <tr>
              <td>&nbsp</td>
              <td>&nbsp</td>
              <td>&nbsp</td>
			   <td>&nbsp</td>
        			<td class="boldtext"> Subtotal: </td>
        			<td>$<input type="text" readonly size="7" name = "subtotal" value="' .   $subtotal  .'"  ></td>
        		</tr>

          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
			 <td>&nbsp</td>
      			<td class="boldtext"> Tax: </td>
      			<td>$<input type="text" readonly name = "tax" size="7" value="' . $tax  .' "  ></td>
      		</tr>
      		
		</tr>
			<tr>
			<td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
      		<td class="boldtext"> Shipping: </td>
      		<td>$<input type="text" readonly name = "shipping" size="7" value="' . $shipping .'"  ></td>
		</tr>

		<tr>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
	   <td>&nbsp</td>
	  
			<td class="boldtext"> Total: </td>
			<td>$<input type="text" readonly name = "totalcost" size="7" value="' .  $totalcost .' "  ></td>
		</tr>
		</table>
	</div>
	<br />
	<div id="bx5">
		<table>			
				<tr>
					<td>NOTES: </td>
				</tr>
				<tr>
					<td> <textarea readonly name="ponotes" rows="4" cols="70">' . $poNotes . '</textarea> </td>
				</tr>
		</table>
	</div>
<br />
<div id="payments">
<table>
	<tr>
		<td class="boldtext">Payment Method: </td>
		<td><input type="text" size="25" readonly value="' .  $paymentMethod .' "   ></td>
	</tr>
	<tr>
		<td class="boldtext">Account: </td>
		<td><input type="text" size="25" readonly value="' .  $account .'  "  ></td>
	 </tr>
	 
	 <tr>
		<td class="boldtext"> Attached File: </td>
		<td>';  if($url_A){echo '<a href="' . $url_A  . '"> ' . $url_A . '</a>'; }  echo '</td>
	 </tr>
	 
	 <tr>
		<td class="boldtext">Attached File 2: </td>
		<td>';  if($url_B){echo '<a href="' . $B  . '"> ' . $url_B . '</a>'; }  echo '</td>
	 </tr>
  </table>
  </div>
  <br  />

  </div> <!-- page div -->
  <br />
 
     </body>
  </html>';
  
   }
            
            ?>
            </body>
            </html>
            
            

 
