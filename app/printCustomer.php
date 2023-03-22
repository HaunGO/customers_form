<?php
require('./libs/fpdf/fpdf.php');

$host = "my-mysql";
$dbname = "my-form-db";
$charset = "utf8";
$port = "3306";

$id = $_GET["id"]; 

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

    $customer = $pdo->query("SELECT * FROM customers WHERE id='$id' LIMIT 1 " );

    foreach ($customer->fetchAll(PDO::FETCH_ASSOC) as $customer) {
    }
    $pdf->Cell(0,0, $customer['id']);
    $pdf->Ln(10);
    $pdf->Cell(0,0, $customer['name']);
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(0,0, $customer['address1']);
    $pdf->Ln(5);
    $pdf->Cell(0,0, $customer['address2']);
    $pdf->Output(); 

} catch (PDOException $e) {
    throw new PDOException(
        message: $e->getMessage(),
        code: (int)$e->getCode()
    );
} finally {


}


?> 