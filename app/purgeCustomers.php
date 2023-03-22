<?php


$host = "my-mysql";
$dbname = "my-form-db";
$user = "root";
$pass = "root";
// $charset = "utf8";
// $port = "3306";

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect($host, $user, $pass, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
// $sql = "DELETE FROM customers WHERE name=''";
$sql = "DELETE FROM customers";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?> 