<?php
require_once "../config/conn.php";
use PHPMailer\PHPMailer\PHPMailer;
function sendMail($userid,$orderid){
    global $conn;
    $sql="Select users.firstName,users.email,websiteorder.serviceCharges,websiteorder.typeCharges,websiteorder.total,websiteorder.date,websiteorder.notes,items.name,items.sell,websiteorderitems.quantity,websiteorderitems.subtotal FROM users INNER JOIN websiteorder on users.id=websiteorder.userId INNER JOIN websiteorderitems ON websiteorder.CustomOrderId = websiteorderitems.websiteOrderId INNER JOIN items on items.id = websiteorderitems.item_id WHERE users.id=$userid AND websiteorder.CustomOrderId=$orderid";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)> 0){
        $row=mysqli_fetch_assoc($result);
        

    $notes=$row['notes'];
    $name = $row['firstName'];

    $email = $row['email'];
    // echo $name;
    // echo $email;
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = "smtp.gmail.com"; // host name
    $mail->SMTPAuth = true;
    $mail->Username = "romailbutt8@gmail.com";
    $mail->Password = 'gtgkmdgjgepkboxc';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";


    //email settings
    $mail->isHTML(true);
    $mail->setFrom('Khurram.akram43@gmail.com', 'Clarks Power Washing Contact Form'); //from email
    $mail->addAddress('khurram.akram43@gmail.com');
    $mail->Subject = ("$name");
    // $mail->Body = $message;
    // $mail->Body = 'Name : khurram <br>Email : khurram.akram43@gmail.com <br> Subject : 03412802388 <br>Message :testing  ';
    $mail->Body = '
    <html>
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            img {
                max-width: 100%;
                height: auto;
            }
        </style>
    </head>
    <body>

    <h3>Thank you for ordering from Brown Munde</h3>
    <p>This is your order confirmation - please note your order details in case of any queries:</p>
    <p>Store telephone number:01563 508050</p>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
    $productName = $row['name'];
    $quantity = $row['quantity'];
    $price = $row['sell'];
    $subtotal = $row['subtotal'];

    $mail->Body .= "
            <tr>
                <td>$productName</td>
                <td>$quantity</td>
                <td>$price</td>
                <td>$subtotal</td>
            </tr>";
}

$mail->Body .= '
            <!-- Add more rows as needed -->
        </table>
        <h5>Note:</h5>
        <p>'.$notes.'</p>
       
      
    </body>
    </html>
';
    if($mail->send()){
        // $status = "success";
        // $response = "Email is sent!";
      return "successful";
    }
        else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
        return json_encode($response);
    }
    }

    // exit(json_encode(array("status" => $status, "response" => $response)));

}
// sendMail(4,16);

?>