<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title>B:H + DW</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>B:H + Dealer's Warehouse</h1>







<?php


$host = "my-mysql";
$dbname = "my-form-db";
$charset = "utf8";
$port = "3306";

$id = $_GET["id"]; 


try {
    $pdo = new PDO(
        dsn: "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port",
        username: "root",
        password: "root",
    );

    $customer = $pdo->query("SELECT * FROM customers WHERE id='$id' LIMIT 1 " );

    foreach ($customer->fetchAll(PDO::FETCH_ASSOC) as $customer) {
    }
    
    ?>




    <h1>
        <?php echo $customer['id']; ?>
    </h1>
    <h2><?php echo $customer['name']; ?></h2>
    <h3><?php echo $customer['address1']; ?></h3>
    <h3><?php echo $customer['address2']; ?></h3>


    
    
    <?php


} catch (PDOException $e) {
    throw new PDOException(
        message: $e->getMessage(),
        code: (int)$e->getCode()
    );
} finally {


}



?>












<script src="js/main.js"></script>

</body>

</html>

