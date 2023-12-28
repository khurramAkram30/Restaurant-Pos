<?php
// require '../vendor/autoload.php'; // Include the Composer autoloader
// require_once '../vendor/tecnickcom/tcpdf/tcpdf.php'; // Include TCPDF library

require "../api/config/conn.php";
global $conn;

$idGet = $_GET['id'];
$result;
$query = "SELECT * FROM websiteorder WHERE CustomOrderId='$idGet'";
$res = mysqli_query($conn, $query);
if ($res) {
    if (mysqli_num_rows($res) > 0) {
        $result = mysqli_fetch_array($res);
    }
}
require 'fpdf/fpdf.php';
define('EURO',chr(128));
$pdf = new FPDF('P', 'mm', array(80, 200));
$timefor;
// Add a page to the PDF
$pdf->AddPage();

// $pdf->SetFont('Arial','B',8);
// $pdf->Cell(10,5,"Kitchen Copy",0,1,''); // 'C' parameter for center alignment

// Set font and font size for the title (centered)
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(60, 8, 'Brown Munde', 0, 1, 'C'); // 'C' parameter for center alignment


// Set font and font size for the order ID (left-aligned)
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(60, 5, 'Address:7-9 Princes street, Kilmarnock, KA1 3DD', 0, 1, 'C'); // 'L' parameter for left alignment
$pdf->Cell(60, 5, '01563 508050', 0, 1, 'C'); // 'L' parameter for left alignment
if($result[5]>0){
    $pdf->Cell(60, 5, 'Home Delivery', 0, 1, 'C'); // 'L' parameter for left alignment
    $home="select * from deliveryorders where CustomOrderId='$idGet'";
    $homeRes=mysqli_query($conn,$home);
    if(mysqli_num_rows($homeRes)>0){
        while($row=mysqli_fetch_array($homeRes)){
            $time=$row[3];
        }
    }

}else{

    $pdf->Cell(60, 5, 'Collection', 0, 1, 'C'); // 'L' parameter for left alignment
    $home="select * from collectionorder where CustomOrderId='$idGet'";
    $homeRes=mysqli_query($conn,$home);
    if(mysqli_num_rows($homeRes)>0){
        while($row=mysqli_fetch_array($homeRes)){
            $time=$row[2];
        }
    }
}
// $pdf->Cell(60,5,'Website:www.brownmunde.co.uk', 0, 1,'C'); // 'L' parameter for left alignment


$pdf->SetFont('Arial', 'BI', 8);
// $pdf->Cell(20,10,"Order-Id:$result[1]",0,0,'C');

$pdf->Cell(20, 10, "Order-Id#$result[1]", 0, 1, 'C');

$pdf->Line(7, 41, 72, 41);

$pdf->Ln(1);

// $pdf->SetFont('Arial','BI',8);
// $pdf->Cell(20,10,"Order-Id:$result[1]",0,0,'C');

// $pdf->Cell(60,10,"Date:$result[6]",0,1,'C');
// $pdf->Cell(60,10,"Table-Id:$result[2]",0,1,'C'); 

// $pdf->Cell(2,5,'Date:',0,0,'C'); // 'C' parameter for center alignment
// $pdf->Cell(20,5,$result[4],0,1,'C'); // 'C' parameter for center alignment

// $pdf->Line(7,50,72,50);
$subtotal=0;
//
$pdf->SetX(7);
// $pdf->SetFont('courier','B',8);
// $pdf->Cell(30,8,"Product",1,0,'C');
// $pdf->Cell(10,8,"Qty",1,0,'C');
// $pdf->Cell(12,8,"Price",1,0,'C');
// $pdf->Cell(15,8,"Subtotal",1,1,'C');
$orderItems = "SELECT items.name AS itemName,websiteorderitems.quantity AS qty,items.sell,websiteorderitems.subtotal FROM items INNER JOIN websiteorderitems ON items.id = websiteorderitems.item_id WHERE websiteOrderId = '$idGet'";
$orderResult = mysqli_query($conn, $orderItems);
if ($orderResult) {
    if (mysqli_num_rows($orderResult) > 0) {
        while($row=mysqli_fetch_array($orderResult)){
            $subtotal+=$row[3];
            $pdf->SetX(7);
            $pdf->Cell(5, 5, "$row[1] X", 0, 0, 'C');

            $y = $pdf->GetY();
            $x = $pdf->GetX();
            $width = 50;
        
            // Save Y position before MultiCell
           $beforeMultiCellY = $pdf->GetY();

    $pdf->MultiCell($width, 5, "$row[0]", 0, 'L');

    // Set XY to the right of the MultiCell
    $pdf->SetXY($x + $width, $beforeMultiCellY);

    // Third Cell
    $pdf->Cell(10, 5, "$row[3]", 0, 1, "l");
    // $pdf->SetY($pdf->GetY() + 5);

    // $pdf->Line(7, $pdf->GetY(), 72, $pdf->GetY());
        }
        $pdf->SetY($pdf->GetY() );

        $pdf->Line(7, $pdf->GetY(), 72, $pdf->GetY());
    }

}


$pdf->Ln(2);

$pdf->SetX(9);
$pdf->SetFont('courier', 'B', 8);
$pdf->Cell(20, 5, '', 0, 0, 'L');
$pdf->Cell(25, 5, 'SubTotal', 0, 0, 'R');
$pdf->Cell(20, 5, EURO.$subtotal, 0, 1, 'C');


$pdf->SetX(9);
$pdf->SetFont('courier','B',8);
$pdf->Cell(20,5,'',0,0,'L'); 
$pdf->Cell(25,5,'Service Charges',0,0,'R'); 
$pdf->Cell(20,5,EURO.$result[4],0,1,'C'); 

if($result[5]>0){
    $pdf->SetX(9);
    $pdf->SetFont('courier', 'B', 8);
    $pdf->Cell(20, 5, '', 0, 0, 'L');
    $pdf->Cell(25, 5, 'Delivery Charges', 0, 0, 'R');
    $pdf->Cell(20, 5, EURO.$result[5], 0, 1, 'C');
    
}

$pdf->SetX(9);
$pdf->SetFont('courier','B',8);
$pdf->Cell(20,5,'',0,0,'L'); 
$pdf->Cell(25,5,'Total',0,0,'R'); 
$pdf->Cell(20,5,EURO.$result[6],0,1,'C'); 

$pdf->SetY($pdf->GetY() );

$pdf->Line(7, $pdf->GetY(), 72, $pdf->GetY());

$user="select * from users where id=$result[2]";
// echo $user;
$getResult=mysqli_query($conn,$user);
if($getResult){
    while($row=mysqli_fetch_array($getResult)){
    $pdf->SetFont('courier', 'B', 8);
    $pdf->Cell(20, 5, "$row[1]", 0, 1, 'L');
    
    $pdf->SetX(10);

    $pdf->MultiCell(60, 5, "$row[8]", 0, 'L');
    
    $pdf->Ln(5);

    $pdf->Cell(20, 5, "$row[7]", 0, 1, 'L');
    $pdf->Cell(20, 5, "$row[4]", 0, 1, 'L');
        
    }
}
$paymentTime="select * from paymenttransaction where orderId='$idGet'";
$paymentTimeRes=mysqli_query($conn,$paymentTime);
if(mysqli_num_rows($paymentTimeRes)>0){
    while($row=mysqli_fetch_array($paymentTimeRes)){
        $orderTime=$row[4]; 

        preg_match('/(\d+)/', $time, $matches);
        $time = isset($matches[1]) ? intval($matches[1]) : 0;
        
        $dateTime = DateTime::createFromFormat('h:i:sa', $orderTime);
        // $orderTime = str_replace('pm', '', $orderTime);

        // Add the fetched duration
        $dateTime->add(new DateInterval("PT{$time}M"));

        // Format the result
        $newTime = $dateTime->format('h:i:sa');
        $pdf->Cell(20, 5, "Requested For :$newTime", 0, 1, 'L');
    }
}
   

// $pdf->Ln(5);
$pdf->Cell(60, 5, "Debit / Credit Card", 0, 1, 'C');
$pdf->Cell(60, 5, "Paid", 0, 1, 'C');
    

// print_r ($getResult);

// Output the PDF
$pdf->Output();


// $updateTable="UPDATE tables set staus='Available' where id=$result[2]";
$Order_status="UPDATE websiteorder set status='Completed' where CustomOrderId='$idGet'";

// // $res=mysqli_query($conn,$updateTable);
$res1=mysqli_query($conn,$Order_status);
?>