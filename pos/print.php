<?php

// require '../vendor/autoload.php'; // Include the Composer autoloader
// require_once '../vendor/tecnickcom/tcpdf/tcpdf.php'; // Include TCPDF library

require 'fpdf/fpdf.php';
$pdf = new FPDF('P','mm',array(80,200));

$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(60, 10, 'Brown Munde', 0, 0, 'C');

// $imagePath = '../assets/images/brownmude.png'; // Replace with the path to your image file
// $pdf->Image($imagePath, 20, 20, 30); // Parameters: image path, x, y, width


$pdf->Output();





?>



<!-- try {
    
// $order_id = date("YmdHis");
// echo $order_id;
    // Generate a PDF document
    $pdf = new TCPDF();
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->AddPage();khurramAkram30
    $pdf->SetFont('helvetica', '', 12);

    // Add content to the PDF
    $pdfContent = "Hello, Thermal Printer!\nThis is a test print.";
    $pdf->Write(0, $pdfContent);

    // Specify the local file path where you want to save the PDF
    $pdfFilePath = __DIR__ . '/../pdfs/test.pdf';

    // Save the PDF to the specified file
    $pdf->Output($pdfFilePath, 'F');

    // Display a link to download the PDF
    echo "<a href='../pdfs/test.pdf'>Download PDF</a>";
} catch (\Exception $e) {
    echo "PDF generation failed: " . $e->getMessage() . "\n";
} -->