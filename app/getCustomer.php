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

    foreach ($customer->fetchAll(PDO::FETCH_ASSOC) as $customer) {
    ?>
        <table>
            <tr>
                <td>
                    <button data-id="<?php echo $customer['id'] ?>"  onclick="removeMe(<?php echo $customer['id'] ?>)">Remove</button>
                </td>
                <td>
                    <a target="_blank" href="http://localhost/customerDetails.php?id=<?php echo $customer['id'] ?>" ><button>Details</button></a>
                </td>
                <td>
                    <a target="_blank" href="http://localhost/printCustomer.php?id=<?php echo $customer['id'] ?>"  ><button>Print</button></a>
                </td>
                <td>
                    <span><?php echo $customer['id'] ?> </span>
                </td>
                <td>
                    <span><?php echo $customer['name'] ?> </span>
                </td>
                <td>
                    <span><?php echo $customer['address1'] ?> </span>
                </td>
                <td>
                    <span><?php echo $customer['address2'] ?> </span>
                </td>
                <td>
                    <span><?php echo $customer['city'] ?> </span>
                </td>
                <td>
                    <span><?php echo $customer['state'] ?> </span>
                </td>
                <td>
                    <span><?php echo $customer['zip'] ?> </span>
                </td>
            </tr>
        </table>
        <?php
    }

} catch (PDOException $e) {
    throw new PDOException(
        message: $e->getMessage(),
        code: (int)$e->getCode()
    );
} 



?>