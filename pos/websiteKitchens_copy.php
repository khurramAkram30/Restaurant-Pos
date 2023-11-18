<?php
// require '../vendor/autoload.php'; // Include the Composer autoloader
// require_once '../vendor/tecnickcom/tcpdf/tcpdf.php'; // Include TCPDF library

require "../api/config/conn.php";
global $conn;

$idGet=$_GET['id'];
$result;
$query="SELECT * FROM websiteorder WHERE CustomOrderId='$idGet'";
$res=mysqli_query($conn,$query);
if($res){
    if(mysqli_num_rows($res) > 0){
        $result=mysqli_fetch_array($res);
    }
}
require 'fpdf/fpdf.php';
$pdf = new FPDF('P','mm',array(80,200));

// Add a page to the PDF
$pdf->AddPage();

// $pdf->SetFont('Arial','B',8);
// $pdf->Cell(10,5,"Kitchen Copy",0,1,''); // 'C' parameter for center alignment

// Set font and font size for the title (centered)
$pdf->SetFont('Arial','B',16);
$pdf->Cell(60,8,'Brown Munde',1,1,'C'); // 'C' parameter for center alignment

// Set font and font size for the order ID (left-aligned)
$pdf->SetFont('Arial','B',8);
$pdf->Cell(60,5,'Address:7-9 Princes street, Kilmarnock, KA1 3DD', 0, 1,'C'); // 'L' parameter for left alignment
$pdf->Cell(60,5,'Phone Number:01563 508050', 0, 1,'C'); // 'L' parameter for left alignment
$pdf->Cell(60,5,'Email Address:brown_munde@gmail.com', 0, 1,'C'); // 'L' parameter for left alignment
$pdf->Cell(60,5,'Website:www.brownmunde.co.uk', 0, 1,'C'); // 'L' parameter for left alignment

$pdf->Line(7,38,72,38);

$pdf->Ln(1);

$pdf->SetFont('Arial','BI',8);
$pdf->Cell(20,10,"Order-Id:$result[1]",0,0,'C');
 
// $pdf->Cell(60,10,"Table-Id:$result[2]",0,1,'C'); 

$pdf->Cell(60,10,"Date:$result[6]",0,1,'C'); // 'C' parameter for center alignment
// $pdf->Cell(0,10,,0,1,'C'); // 'C' parameter for center alignment

// $pdf->Line(7,50,72,50);

//
$pdf->SetX(7);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,8,"Product",1,0,'C');
$pdf->Cell(15,8,"Qty",1,1,'C');
// $pdf->Cell(25,8,"Customize",1,1,'C');
// $pdf->Cell(12,8,"Price",1,1,'C')
$orderItems="SELECT items.name AS itemName,websiteorderitems.quantity AS qty FROM items INNER JOIN websiteorderitems ON items.id = websiteorderitems.item_id WHERE websiteOrderId = '$idGet'";
$orderResult=mysqli_query($conn,$orderItems);
if($orderResult){
    if(mysqli_num_rows($orderResult) > 0){
        while($row=mysqli_fetch_array($orderResult)){
            $pdf->SetX(7);
            $pdf->SetFont('courier','B',8);
            $pdf->Cell(50,8,"$row[0]",1,0,'C');
            $pdf->Cell(15,8,"$row[1]",1,1,'C');
            // $pdf->SetFont('courier','B',10);
            // $pdf->Cell(25,8,"$row[2]",1,1,'C');
        }
    }

}

// for($i=0;$i<6;$i++){
   
// }

// 





// $pdf->SetX(7);
// $pdf->SetFont('courier','B',8);
// $pdf->Cell(20,5,'',0,0,'L');
// $pdf->Cell(25,5,'SubTotal',1,0,'C'); 
// $pdf->Cell(20,5,'100',1,1,'C'); 


// $pdf->SetX(7);
// $pdf->SetFont('courier','B',8);
// $pdf->Cell(20,5,'',0,0,'L'); 
// $pdf->Cell(25,5,'Discount',1,0,'C'); 
// $pdf->Cell(20,5,'0',1,1,'C'); 

// $pdf->SetX(7);
// $pdf->SetFont('courier','B',8);
// $pdf->Cell(20,5,'',0,0,'L'); 
// $pdf->Cell(25,5,'Payable',1,0,'C'); 
// $pdf->Cell(20,5,'100',1,1,'C'); 

// $pdf->SetX(7);
// $pdf->SetFont('courier','B',8);
// $pdf->Cell(20,5,'',0,0,'L'); 
// $pdf->Cell(25,5,'Payment',1,0,'C'); 
// $pdf->Cell(20,5,'Cash',1,1,'C'); 


// $pdf->Cell(20,5,"",0,0);
// $pdf->SetFont('courier','B',8);
// $pdf->Cell(20,5,'Important notice',0,0,'L'); // 'C' parameter for center alignment

 

// Output the PDF
$pdfss=$pdf->Output();
$pdf->Output();


// $update="UPDATE order_items SET print_status = 'Printed' WHERE order_id = '$idGet'";
// $resupdate=mysqli_query($conn,$update);

?>

<!-- Embed the generated PDF in your HTML page -->

</script>