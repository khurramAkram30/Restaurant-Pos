<?php
// error_reporting(0);
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include 'function.php';

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == "POST") {
    // $name = $_POST['name'];
    // $price = $_POST['price'];
    // $image = $_FILES['image'];
    // $catId = $_POST['CategoryId'];
    // $subcatId = $_POST['subCategoryId'];
    // $web_mobile = $_POST['web_mobile'];

    // Check if the file upload is successful
    // if ($image['error'] === UPLOAD_ERR_OK) {
    //     $imageFileName = $image['name'];
    //     $imageTempName = $image['tmp_name'];
        
    //     // Move the uploaded image to the "images" folder
    //     $uploadPath = '../images/' . $imageFileName;
    //     move_uploaded_file($imageTempName, $uploadPath);

        // Store user data in the database, including the image file name
    $inputdata=json_decode(file_get_contents("php://input"),true);
    // $createexpense=createexpense($inputdata);
    // echo $createexpense;

        // $inputData = [
        //     'name' => $name,
        //     'price' => $price,
        //     'type' => $web_mobile,
        //     'CategoryId'=>$catId,
        //     'subCategoryId'=>$subcatId,
        // ];

        $storeUser = storeItems($inputdata);

        echo $storeUser;
    
} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . " Method Not Allowed",
    ];
    header("HTTP:/1.0 405 Method Not Allowed");
    echo json_encode($data);
}
?>
