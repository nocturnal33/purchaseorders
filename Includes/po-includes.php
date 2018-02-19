
<?php
// put this file outside of the public directory /var/www/includes/
$servername = "localhost";
$username = "MySqlUser";
$password = "MySQLPassword";
$db = "company_purchase_orders_db";
$table = "department_po";

//$link = new mysqli($servername, $username, $password, $db);

// Create connection
$connection = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Purchase Order Database | " . date(Y);
echo "<br />";
?>
