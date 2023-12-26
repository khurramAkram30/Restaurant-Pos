<?php
require '../../vendor/autoload.php';
// Set the response content type to JSON
header("Access-Control-Allow-Origin: *");
// Set the Content-Type header to specify that the response will be in JSON format
header("Content-Type: application/json");
// Set allowed HTTP methods (in this case, only GET is allowed)
header("Access-Control-Allow-Methods: POST");
// Set allowed HTTP headers (you can customize this based on your requirements)
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include 'function.php';
$requestMethod=$_SERVER["REQUEST_METHOD"];

if($requestMethod == "POST"){
    $options = array(
        'cluster' => 'ap2',
        'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
        '13f373ebd75cbc52d306',
        '8488a70efe634002c44c',
        '1727775',
        $options
    );

    $inputdata=json_decode(file_get_contents("php://input"),true);
    if(empty($inputdata)){
        $createOrder=createorder($_POST);
    }else{
        $createOrder=createorder($inputdata);
    }
    echo $createOrder;
    $pusher->trigger('my-channel', 'my-event', "khurram");
    }
else{
    $data=[
        'status' => 405,
        'message' => $requestMethod."Method Not Allowed",
    ];
    header("HTTP:/1.0 405 Method Not Allowed");
    echo json_encode($data);
}
?>
