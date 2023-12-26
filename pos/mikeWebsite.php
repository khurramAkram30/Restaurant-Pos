<?php
require '../vendor/autoload.php';

use Mike42\Escpos\PrintConnectors\PrinterPrintConnector;
// use Mike42\Escpos\Printer;

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;

require "../api/config/conn.php";
global $conn;

$idGet = $_GET['id'];
$result;
$query = "SELECT * FROM websiteorder WHERE CustomOrderId='$idGet'";
$res = mysqli_query($conn, $query);
if ($res && mysqli_num_rows($res) > 0) {
    $result = mysqli_fetch_array($res);
}

// Initialize the printer connection
// $connector = new PrinterPrintConnector("Your_Printer_Name"); // Replace with your printer name or connection details
// $printer = new Printer($connector);

$subtotal=0;
$pdfFileName = "output.pdf";

// Use a file-based print connector
$connector = new FilePrintConnector($pdfFileName);
$printer = new Printer($connector);

try {
    // Print header
    $printer->initialize();
    $printer->selectPrintMode(Printer::MODE_DOUBLE_WIDTH | Printer::MODE_DOUBLE_HEIGHT);
    $printer->setJustification(Printer::JUSTIFY_CENTER);

    $printer->text("Brown Munde\n");
    $printer->text("Address: 7-9 Princes street, Kilmarnock, KA1 3DD\n");
    $printer->text("Phone: 01563 508050\n");

    if ($result[5] > 0) {
        $printer->text("Home Delivery\n");
    } else {
        $printer->text("Collection\n");
    }

    $printer->text(str_repeat("-", 40) . "\n");
    $printer->selectPrintMode(); // Reset font and style

    // Print order items
    $orderItems = "SELECT items.name AS itemName,websiteorderitems.quantity AS qty,items.sell,websiteorderitems.subtotal FROM items INNER JOIN websiteorderitems ON items.id = websiteorderitems.item_id WHERE websiteOrderId = '$idGet'";
    $orderResult = mysqli_query($conn, $orderItems);

    if ($orderResult && mysqli_num_rows($orderResult) > 0) {
        while ($row = mysqli_fetch_array($orderResult)) {
            $subtotal += $row[3];
            $printer->text("$row[1] X $row[0]  $row[3]\n");
            // $printer->text("$row[3]\n");
        }
    }

    // Print totals
    $printer->text("SubTotal: $subtotal\n");
    $printer->text("Service Charges: $result[4]\n");

    if ($result[5] > 0) {
        $printer->text("Delivery Charges: $result[5]\n");
    }

    $printer->text("Total: $result[6]\n");

    // Print user details
    $getUser = "SELECT * FROM users WHERE id=$result[2]";
    $getUserResult = mysqli_query($conn, $getUser);

    if ($getUserResult && mysqli_num_rows($getUserResult) > 0) {
        $userRow = mysqli_fetch_array($getUserResult);
        $printer->text("$userRow[1]\n");
        $printer->text("$userRow[8]\n");
        $printer->text("$userRow[7]\n");
        $printer->text("$userRow[4]\n");
    }

    // Print payment information
    $printer->text("Debit / Credit Card\n");
    $printer->text("Paid\n");

    // Cut the paper
    $printer->cut();

    echo "Printed successfully!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Close the printer connection
    $printer->close();
}
?>
