<?php include("/var/www/includes/po-includes.php"); ?>
<!-- Search page -->
<html>
<head>
	<link rel="stylesheet" href="searchstyle.css">
	<title>Search Results | Purchase Orders </title>
</head>


<body>

	<div id='pagediv'>
        <a href="index.php"><img src='images/createicon.png' height='30px' width=auto></a>

        
    <h1>Search Purchase Orders</h1>
    
    
	<span id='poInfo'>Last PO Entered was: </span>
	<?php
	
	echo "<span id='boldRed'>";
						$query = "SELECT id FROM tech_po ORDER by id DESC LIMIT 1";
						$result = mysqli_query($connection, $query);
						/* associative array */
						$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
						$poNumber = $row["id"] ;
						//printf ("%s", $row["id"]);
						if ($poNumber < 100){
							echo "000" . $poNumber;
						}
						else if ($poNumber < 1000 && $poNumber > 99){
							echo "00" . $poNumber;
						}
						echo "</span>";
	?>
    
<hr>
<div id='mainSearch'>
    <h3>Search by string</h3>
    	<form action="searchresults.php" method="post">
		<table>
			<tr>
				<td>Search by:</td>
				<td><select name="searchby">
						<option value="">Select a Search Option</option>
						<option value="PO">PO Number</option>
						<option value="Date">Date</option>
						<option value="Payment Type">Payment Type</option>
						<option value="Account">Account</option>
						<option value="Total">Total</option>
						<option value="Vendor">Vendor</option>
						<option value="Description">Description</option>
						<option value="Notes">Notes</option>
						<option value="Receipt Name">Receipt Name</option>
				</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp; </td>
				<td><input type="text" name="searchdata" placeholder="Enter search here" size="30"> </td>
				<td>&nbsp;</td>
			</tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan='2' class='italicfont'>date format: yyyy-mm-dd</td>
            </tr>
            </table>
            </div> <!-- main search div -->
         
            <div id='daterangeSearch'>
                <h3>Search by Date Range</h3>
            <table>
           
                <td>Date Start: </td>
                <td><input type="date" name="timeStart" > </td>
            </tr>
            
            <tr>
                <td>Date End: </td>
                <td><input type="date" name="timeEnd" > </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
			
        </table>
        </div> <!-- end date range search -->
        <div id='submitDiv'>
             <span class='centertext'>SEARCH FIELDS ON LEFT</span> <span class='centertext'><br />-OR-<br /></span> <span class='centertext'>SELECT DATE RANGE ON RIGHT</span>
             <p></p>
		<hr>
               
   <input type="submit" name="submitsearch" value="Search">
    
	</form>
    </div> <!-- end search div  -->
    <br />
    <br />
    <p></p>
    <p></p>
    <div id='infoDiv'>
	<table>
	
	<tr>
		<th class="searchTH">Search Account</th>	<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>	<th class="searchTH">Search Payments</th>

		
	</tr>
	
	<tr>
		<td>Technology</td>	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	<td>PayPal</td>
	</tr>
	<tr>
		<td>Robotics</td>	 <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	<td>Terms</td>
	</tr>
	<tr>		
		<td>Network</td>	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	<td>Cash</td>
	</tr>
	<tr>		
		<td>Faculty</td>	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	<td>Other</td>
	</tr>
	<tr>		
		<td>Students</td> <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>		
		<td>Admissions</td> <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>		
		<td>Development</td> <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>		
		<td>Business_Office</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>		
		<td>Administration</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>		
		<td>Classroom</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>		
		<td>Office</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>		
		<td>Library</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	
	</tr>
	


	</table>
    </div> <!-- end info div -->
    </div> <!-- end page div -->

</body>


</html>
