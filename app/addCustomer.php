<?php
echo 'addCustomer()';

$name = $_POST["name"];
$address1 = $_POST["address_1"];
$address2 = $_POST["address_2"];

?> 
<br>
<?php echo ($name); ?>
<br>
<?php echo ($address1); ?>
<br>
<?php echo ($address2); ?>
<br>
<?php //echo ($input); ?>

 
<?php
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
