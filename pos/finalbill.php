

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

// Set font and font size for the title (centered)
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
// $pdf->Cell(10,8,"Qty",0,0,'C');
// $pdf->Cell(40,8,"Product",0,0,'C');
// $pdf->Cell(12,8,"Price",0,0,'C');
// $pdf->Cell(10,8,"Subtotal",0,1,'C');
$orderItems="SELECT items.name AS itemName , order_items.quantity AS qty,order_items.modifiers,order_items.subtotal FROM items INNER JOIN order_items ON items.id = order_items.item_id WHERE order_id = '$idGet'";
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
            //  $row[0]="chicken addasd dadsad asda dsa";
            // $name=
            $pdf->MultiCell($width, 5, "$row[0]", 0, 'L');

            $name=strlen($row[0]);
            // echo $name;
            if($name > 21 && $name < 41){
                $pdf->SetXY($x + $width, $beforeMultiCellY + 2); // Adjust the Y position
                $pdf->Cell(10, 3, "$row[3]", 0, 1, "l");
                $pdf->SetY($pdf->GetY() +4);
            }
           else if($name > 42)
            {
                // echo "asd";
                $pdf->SetXY($x + $width, $beforeMultiCellY + 6); // Adjust the Y position
                $pdf->Cell(10, 3, "$row[3]", 0, 1, "l");
                $pdf->SetY($pdf->GetY() +5);
            }
            else{
                $pdf->SetXY($x + $width, $beforeMultiCellY + 2); // Adjust the Y position
                $pdf->Cell(10, 2, "$row[3]", 0, 1, "l");
                $pdf->SetY($pdf->GetY() +0);
            }
            // 42
            // Set XY to the right of the MultiCell
           
            // Third Cell
           
            
            if ($row[2] != "") {
                
                $pdf->SetX(7);
               
               
                $pdf->MultiCell(80, 3, "$row[2]", 0, "l");
            }

            // Ensure enough space before the next line
            $pdf->SetY($pdf->GetY() + 0);

            // Draw a line to separate the entries
            // $pdf->Line(7, $pdf->GetY(), 72, $pdf->GetY());
        }
    }
}
$pdf->SetY($pdf->GetY() + 2);

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


$updateTable="UPDATE tables set staus='Available' where id=$result[2]";
// $Order_status="UPDATE orders set order_status='Finish' where CustomOrderId='$idGet'";

$res=mysqli_query($conn,$updateTable);
// $res1=mysqli_query($conn,$Order_status);
?>

<!-- $multiCellY = $pdf->GetY();
$pdf->MultiCell(35, 5, " Khurram akram kahahn adhahui", 0, 'C');

// Set X to move to the right side of the MultiCell
$pdf->SetX(7 + 10 + 40);

$pdf->Cell(15, 5, "$row[3]", 0, 1, 'C');

// Set Y to the greater of the Y position after MultiCell and the Y position before the MultiCell
$pdf->SetY(max($pdf->GetY(), $multiCellY)); -->


