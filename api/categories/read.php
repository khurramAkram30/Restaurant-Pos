<?php
header("Access-Control-Allow-Origin: *");
// Set the Content-Type header to specify that the response will be in JSON format
header("Content-Type: application/json");
// Set allowed HTTP methods (in this case, only GET is allowed)
header("Access-Control-Allow-Methods: GET");
// Set allowed HTTP headers (you can customize this based on your requirements)
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include 'function.php';
$requestMethod=$_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){

        if(isset($_GET['type'])){
            $categoriestype=getCategoryByType($_GET);
            echo $categoriestype; 
        }
        else{
            $categories=getallCategories();
            echo $categories;    
        }

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