<?php
echo 'addCustomer()';

$name = $_POST["name"];
$address1 = $_POST["address_1"];
$address2 = $_POST["address_2"];

echo ('<br/>'); 
echo ($name); 
echo ('<br/>'); 
echo ($address1); 
echo ('<br/>'); 
echo ($address2); 
echo ('<br/>'); 

$servername = "my-mysql";
$username = "root";
$password = "root";
$dbname = "my-form-db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the statement
$stmt = $conn->prepare("INSERT INTO customers (name, address1, address2 ) VALUES (?,?,?)");
$stmt->bind_param("sss", $name, $address1, $address2 );

// Execute the statement
$stmt->execute();

echo "New record created successfully";

// Close the statement and connection
$stmt->close();
$conn->close();





?>
