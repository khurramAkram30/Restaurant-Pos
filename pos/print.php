<?php

// require '../vendor/autoload.php'; // Include the Composer autoloader
require_once '../vendor/tecnickcom/tcpdf/tcpdf.php'; // Include TCPDF library

// $pdf = new TCPDF('P','mm',array(80,200));

// $pdf->AddPage();

// $pdf->setFont('Aerial','B',16);

// $pdf->Output();
$order_id = date("YmdHis");
echo $order_id;
?>




<!-- try {
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