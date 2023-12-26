<?php
// require '../vendor/autoload.php'; // Include the Composer autoloader
// require_once '../vendor/tecnickcom/tcpdf/tcpdf.php'; // Include TCPDF library

require "../api/config/conn.php";
global $conn;

$idGet=$_GET['id'];
$result;
$query="SELECT * FROM orders WHERE CustomOrderId='$idGet'";
$res=mysqli_query($conn,$query);
if($res){
    if(mysqli_num_rows($res) > 0){
        $result=mysqli_fetch_array($res);
    }
}
require 'fpdf/fpdf.php';
define('EURO',chr(128));
$pdf = new FPDF('P','mm',array(80,200));
// Add a page to the PDF
$pdf->AddPage();

// $pdf->SetFont('Arial','B',8);
// $pdf->Cell(10,5,"Kitchen Copy",0,1,''); // 'C' parameter for center alignment

$pdf->SetFont('Arial','B',16);
$pdf->Cell(60,8,'Brown Munde',0,1,'C'); // 'C' parameter for center alignment

// Set font and font size for the order ID (left-aligned)
$pdf->SetFont('Arial','B',8);
$pdf->Cell(60,5,'Address:7-9 Princes street, Kilmarnock, KA1 3DD', 0, 1,'C'); // 'L' parameter for left alignment
$pdf->Cell(60,5,'01563 508050', 0, 1,'C'); // 'L' parameter for left alignment
$pdf->Cell(60,5,'DINE', 0, 1,'C'); // 'L' parameter for left alignment
// $pdf->Cell(60,5,'Website:www.brownmunde.co.uk', 0, 1,'C'); // 'L' parameter for left alignment


$pdf->SetFont('Arial','BI',8);
// $pdf->Cell(20,10,"Order-Id:$result[1]",0,0,'C');
 
$pdf->Cell(20,10,"Table:T$result[2]",0,1,'C'); 

$pdf->Line(7,41,72,41);

$pdf->Ln(1);
// $pdf->Cell(2,5,'Date:',0,0,'C'); // 'C' parameter for center alignment
// $pdf->Cell(20,5,$result[4],0,1,'C'); // 'C' parameter for center alignment

// $pdf->Line(7,50,72,50);

//
$pdf->SetX(7);
// $pdf->SetFont('courier','B',8);
// $pdf->Cell(2,8,"Qty",0,0,'C');
// $pdf->Cell(20,8,"Product",0,0,'C');
// $pdf->Cell(60,8,"Customize",0,1,'C');
// $pdf->Cell(12,8,"Price",1,1,'C')
$orderItems="SELECT items.name AS itemName , order_items.quantity AS qty,order_items.modifiers,order_items.subtotal FROM items INNER JOIN order_items ON items.id = order_items.item_id WHERE order_id = '$idGet' AND print_status = 'Not Printed'";
$orderResult=mysqli_query($conn,$orderItems);
if ($orderResult) {
    if (mysqli_num_rows($orderResult) > 0) {
        while ($row = mysqli_fetch_array($orderResult)) {
            $pdf->SetX(7);
            $pdf->SetFont('courier', 'B', 9);
            $pdf->Cell(5, 5, "$row[1]X", 0, 0, 'C');

            $y = $pdf->GetY();
            $x = $pdf->GetX();
            $width = 50;

            // Save Y position before MultiCell
            $beforeMultiCellY = $pdf->GetY();

            $pdf->MultiCell($width, 5, "$row[0]", 0, 'L');

            // Set XY to the right of the MultiCell
            $pdf->SetXY($x + $width, $beforeMultiCellY + 2); // Adjust the Y position

            // Third Cell
            $pdf->Cell(10, 3, "$row[3]", 0, 1, "l");
           

            if ($row[2] != "") {
                $pdf->SetY($pdf->GetY() + 5);
                $pdf->SetX(5);
                $pdf->Cell(10, 3, "$row[2]", 0, 1, "l");
            }

            // Ensure enough space before the next line
            $pdf->SetY($pdf->GetY() + 5);

            // Draw a line to separate the entries
            // $pdf->Line(7, $pdf->GetY(), 72, $pdf->GetY());
        }
    }
}

    // Draw line after the last product entry
    $pdf->Line(7, $pdf->GetY(), 72, $pdf->GetY(), array('width' => 0.5));
//   }
  

// $pdf->Line(7,50,72,50);


$pdf->Ln(2);

$pdf->SetX(9);
$pdf->SetFont('courier','B',8);
$pdf->Cell(20,5,'',0,0,'L');
$pdf->Cell(25,5,'SubTotal',0,0,'C'); 
$pdf->Cell(20,5,EURO.$result[5],0,1,'C'); 


// $pdf->SetX(9);
// $pdf->SetFont('courier','B',8);
// $pdf->Cell(20,5,'',0,0,'L'); 
// $pdf->Cell(25,5,'Discount',1,0,'C'); 
// $pdf->Cell(20,5,"$result[6]",1,1,'C'); 

$pdf->SetX(9);
$pdf->SetFont('courier','B',8);
$pdf->Cell(20,5,'',0,0,'L'); 
$pdf->Cell(25,5,'Total',0,0,'C'); 
$pdf->Cell(20,5, EURO.$result[7],0,1,'C'); 

// $pdf->SetX(9);
// $pdf->SetFont('courier','B',8);
// $pdf->Cell(20,5,'',0,0,'L'); 
// $pdf->Cell(25,5,'Payment',1,0,'C'); 
// $pdf->Cell(20,5,'Cash',1,1,'C'); 

 

// Output the PDF
$pdf->Output();

// $update="UPDATE order_items SET print_status = 'Printed' WHERE order_id = '$idGet'";
// $resupdate=mysqli_query($conn,$update);

?>

<!-- Embed the generated PDF in your HTML page -->

