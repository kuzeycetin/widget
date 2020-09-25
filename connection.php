<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Creating connection
$conn = mysqli_connect('localhost:3308', 'root', '', 'websiteproject');

// Checking connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Creating my tables here
$sql = "CREATE TABLE CUSTOMERS (
customerId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
adress VARCHAR(120),
city VARCHAR(30),
state VARCHAR(20),
postalcode INT(8),
country VARCHAR(20),
phone VARCHAR(20),
password VARCHAR(32) NOT NULL,
creditcardID VARCHAR(16),
expDate INT(6),
billingAdress VARCHAR(120),
shippingAdress VARCHAR(120),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table CUSTOMERS created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
