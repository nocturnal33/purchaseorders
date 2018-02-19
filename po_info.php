<?php include("/var/www/includes/po-includes.php"); ?>


<!DOCTYPE html>
<head>
		<link rel="stylesheet" href="style.css">
<title>PO Info</title>
</head>

<body>


<div id="pagediv">
     <a href="index.php"><img src='images/createicon.png' height='30px' width=auto></a> <a href="search.php"><img src='images/searchicon.png' height='30px' width=auto></a>  
	
	<div id="tabeldiv">
	
	
		<div id="banner">
			<div id="headerLeft">
			
			<!-- change this to your company name -->
				<h2>Company Name</h2> 
				
				<h3>Purchase Order</h3>
			</div>
			<div id="headerRight">
				<span id="boldHeader">PO Number:
				
			
				<?php
				
					if (mysqli_connect_errno()) {
						printf("Connect failed: %s\n", mysqli_connect_error());
						exit();
					}
					else{
						echo "<span class='boldRed'>";
						$query = "SELECT id FROM $table ORDER by id DESC LIMIT 1";
						$result = mysqli_query($connection, $query);
						$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
						$poNumber = $row["id"] ;
						echo $poNumber;
					}
					?>	</span>		<br />
				Was Successfully Entered
		</div>		
		</div>		

</div>

</div>

</body>
</html>
