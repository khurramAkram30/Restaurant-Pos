<?php require "../api/config/conn.php"; ?>
<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    margin-top: 0px;
    margin-bottom: 0px;
}
#invoice-POS {
	 box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
	 /* padding: 2mm; */
	 /* margin: 0 auto; */
	 /* width: 44mm; */
	 background: #fff;
}
 #invoice-POS ::selection {
	 background: #f31544;
	 color: #fff;
}
 #invoice-POS ::moz-selection {
	 background: #f31544;
	 color: #fff;
}
 #invoice-POS h1 {
	 font-size: 1.5em;
	 color: black;
}
 #invoice-POS h2 {
	 font-size: 1.5em;
     margin-top: 0px;
     margin-bottom: 0px;
}
 #invoice-POS h3 {
	 font-size: 1.2em;
	 font-weight: 300;
	 line-height: 2em;
}
 #invoice-POS p {
	 font-size: 0.7em;
	 color: black;
	 line-height: 1.2em;
     margin-bottom: 0px;
}
 #invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot {
	/* Targets all id with 'col-' */
	 border-bottom: 1px solid #eee;
}
 #invoice-POS #top {
	 min-height: 100px;
}
 #invoice-POS #mid {
	 min-height: 80px;
}
 #invoice-POS #bot {
	 min-height: 50px;
}
 #invoice-POS #top .logo {
	 height: 60px;
	 width: 60px;
	 background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
	 background-size: 60px 60px;
}
 #invoice-POS .clientlogo {
	 float: left;
	 height: 60px;
	 width: 60px;
	 background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
	 background-size: 60px 60px;
	 border-radius: 50px;
}
 #invoice-POS .info {
	 display: block;
	 margin-left: 0;
}
 #invoice-POS .title {
	 float: right;
}
 #invoice-POS .title p {
	 text-align: right;
}
 #invoice-POS table {
	 width: 100%;
	 border-collapse: collapse;
}
 #invoice-POS .tabletitle {
	 font-size: 0.5em;
	 background: #eee;
}
 #invoice-POS .service {
	 border-bottom: 0.5px solid black;
}
 #invoice-POS .item {
	 width: 24mm;
}
 #invoice-POS .itemtext {
	 font-size: 0.7em;
     /* 0.7em */
}
 #invoice-POS #legalcopy {
	 margin-top: 5mm;
}
 .unitprice{
    text-align: end;
    margin-bottom: 1px;
 }
 @media print {
    .pagebreak { page-break-before: always; } /* page-break-after works, as well */
}

    </style>
</head>
<body>



<!-- ################################################ Customer Copy Start ############################################################### -->




  <div id="invoice-POS">
    
    <center id="top">
      <!-- <div class="logo"></div> -->
      <div class="info"> 
        <h2>North Eatery Restaurant</h2>
        <h4>Thanks for using our app</h4>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
      <div class="info">
        <!-- <h2>Contact Info</h2> -->
        <?php
                $myID = $_GET['id'];
                $query = "select * from `orders` where CustomOrderId = '$myID'";
                $result = mysqli_query($conn,$query);
                if (!$result) {

                    // die("query failed" . mysqli_error());
                } else {
                    $rowsLength = mysqli_num_rows($result);
                    $row = mysqli_fetch_assoc($result);
                }
                ?>

        <p>
            Customeor Copy <br>
       <?php echo  $row['CustomOrderId']; ?><br>
        <?php 
                                                $orderDate = $row['orderDate'];
                                                $newDate = date('m/d/Y h:i A', strtotime($orderDate . '+5 hours'));
                                                echo "Date # " . $newDate; 
                                                ?><br>
        <!--<?php echo "Date # " . date('h:i:s a m/d/Y', strtotime($row['orderDate'])); ?><br>-->
        <?php $server_order_typedepnd =  $row['ordertype'] == 'OnlineOrders' ? 'Online Orders' : $row['ordertype'];
        echo 'Order Type # ' . $server_order_typedepnd; ?>
        <br>
<!-- 

        <p> 
            Address : street city, state 0000</br>
            Email   : JohnDoe@gmail.com</br>
            Phone   : 555-555-5555</br>
        </p> -->
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>SNo</h2></td>
								<td class="Hours"><h2 class="unitprice">Item</h2></td>
								<td class="Rate"><h2 class="unitprice">Qty</h2></td>
								<td class="Rate"><h2 class="unitprice">Unit Price</h2></td>
							</tr>
                            <?php

                            $query1 = "select * from `ordertable` where orderNo = '$myID'";
    
                            $result1 = mysqli_query($connection, $query1);
    
                            if (!$result1) {
    
                                // die("query failed" . mysqli_error());
                            } else {
    
                                $ordersLength = mysqli_num_rows($result1);
    
                                while ($row1 = mysqli_fetch_assoc($result1)) {
                            ?>

							<tr class="service">
								<td class="tableitem"><p class="itemtext"><?php echo $row1['orderID']; ?></p></td>
								<td class="tableitem"><p class="itemtext unitprice"><?php echo $row1['item']; ?></p></td>
								<td class="tableitem"><p class="itemtext unitprice"><?php echo $row1['quantity']; ?></p></td>
								<td class="tableitem"><p class="itemtext unitprice"><?php echo $row1['price']; ?></p></td>
								<!-- <td class="tableitem"><p class="itemtext"><?php echo $row1['quantity']; ?></p></td> -->
							</tr>
<?php
                            }
                        }

                        ?>

                            <!-- <hr> -->
							<tr class="tabletitle">
                                <!-- <hr> -->
								<td class="Rate"><h2>Total</h2></td>
								<td></td>
								<td></td> 
								<td class="payment" style="text-align: right;"><h2>Rs : <?php echo $row['total']; ?></h2></td>
							</tr>
							<tr class="tabletitle">
                                <!-- <hr> -->
								<td class="Rate"><h2>Discount</h2></td>
								<td></td>
								<td></td> 
								<td class="payment" style="text-align: right;"><h2><?php echo $row['discount']." %"; ?></h2></td>
							</tr>
							<tr class="tabletitle">
                                <!-- <hr> -->
								<td class="Rate"><h2>Grand Total</h2></td>
								<td></td>
								<td></td> 
								<td class="payment" style="text-align: right;"><h2>Rs : <?php echo " " . $row['grandTotal']; ?></h2></td>
							</tr>
							<tr class="tabletitle">
                                <!-- <hr> -->
								<td class="Rate"><h2>Received Amount</h2></td>
								<td></td>
								<td></td> 
								<td class="payment" style="text-align: right;"><h2>Rs : <?php echo " " . $row['receivedamount']; ?></h2></td>
							</tr>
							<tr class="tabletitle">
                                <!-- <hr> -->
								<td class="Rate"><h2>Returned Amount</h2></td>
								<td></td>
								<td></td> 
								<td class="payment" style="text-align: right;"><h2>Rs : <?php echo $row['receivedamount'] - $row['grandTotal']; ?></h2></td>
							</tr>

						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your business!</strong> <br>
                         <!-- Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.  -->
                         Restaurant POS System. Developed By MATZ Solutions 2023.
                        </p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->

<!-- ################################################ Customer Copy END ############################################################### -->



  <div class="pagebreak"> </div>

</body>
</html>
<script>
    function simulateCtrlPKeyPress() {
    var event = new KeyboardEvent('keydown', {
        key: 'p',
        code: 'KeyP',
        ctrlKey: true,
        metaKey: true,
    });

    document.dispatchEvent(event);
}

// Call the function when the page is loaded
document.addEventListener('DOMContentLoaded', function () {
  window.print(); 
    // simulateCtrlPKeyPress();
});
</script>