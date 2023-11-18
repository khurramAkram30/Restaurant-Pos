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

    $inputdata=json_decode(file_get_contents("php://input"),true);
    if(empty($inputdata)){
        $createOrder=createorder($_POST);
    }else{
        $login=login($inputdata);
    }
    echo $login;
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