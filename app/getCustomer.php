<?php
$host = "my-mysql";
$dbname = "my-form-db";
$charset = "utf8";
$port = "3306";

try {
    $pdo = new PDO(
        dsn: "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port",
        username: "root",
        password: "root",
    );

    $customer = $pdo->query("SELECT * FROM customers");

    // echo '<pre>';
    foreach ($customer->fetchAll(PDO::FETCH_ASSOC) as $customer) {
        print_r($customer);
        // print_r($customer['fax']);
        ?>
        <div>
            <span><?php echo $customer['id'] ?> - <?php echo $customer['name'] ?></span>
            <button data-id="<?php echo $customer['id'] ?>"  onclick="removeMe(<?php echo $customer['id'] ?>)">X</button>
        </div>
        <?php
    }
    // echo '</pre>';

} catch (PDOException $e) {
    throw new PDOException(
        message: $e->getMessage(),
        code: (int)$e->getCode()
    );
} 



?>