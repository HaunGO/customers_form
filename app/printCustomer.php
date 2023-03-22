<?php
require('./libs/fpdf/fpdf.php');

// $host = "my-mysql";
// $dbname = "my-form-db";
// $user = "root";
// $pass = "root";
// $id = $_GET["id"]; 

// $link = mysqli_connect($host, $user, $pass, $dbname);
    
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }

// // $sql = "DELETE FROM customers WHERE id='$id' ";

// if(mysqli_query($link, $sql)){
//     echo "Records were deleted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
    
// mysqli_close($link);


$host = "my-mysql";
$dbname = "my-form-db";
$charset = "utf8";
$port = "3306";

$id = $_GET["id"]; 


$name = "default";



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
// $pdf->Cell(40,10,'Hello World!');



try {
    $pdo = new PDO(
        dsn: "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port",
        username: "root",
        password: "root",
    );

    // $customer = $pdo->query("SELECT * FROM customers WHERE id='$id' " );
    $customer = $pdo->query("SELECT * FROM customers WHERE id='$id' LIMIT 1 " );

    foreach ($customer->fetchAll(PDO::FETCH_ASSOC) as $customer) {
    //     $name = $customer['name'];

    //     // $pdf->Cell(40,10,$id);
    //     // $pdf->Cell(40,10,$customer['name']);
    //     $name = $customer['name'];
    //     // $pdf->Output();
    }

    // $pdf->Cell(40,10,$name);
    // $pdf->Cell(40,10,$customer['name']);
// $pdf->Output(); 

// print_r( $customer);
// print_r();

} catch (PDOException $e) {
    throw new PDOException(
        message: $e->getMessage(),
        code: (int)$e->getCode()
    );
} finally {
    $pdf->Cell(40,10,$customer['id']);
    $pdf->Cell(40,10,$customer['name']);
    $pdf->Output(); 
}



// $pdf->Cell(40,10,$name);
// $pdf->Output(); 



?> 