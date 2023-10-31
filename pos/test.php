<?php
// Get the current timestamp
$currentTimestamp = time();

// Create an order ID with minutes and seconds
$orderId = 'ORDER'. date('His', $currentTimestamp).'123';

echo $orderId;

?>