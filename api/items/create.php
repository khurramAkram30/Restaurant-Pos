<?php
// error_reporting(0);
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include 'function.php';

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $catId = $_POST['CategoryId'];
    $subcatId = $_POST['subCategoryId'];
    

    // Check if the file upload is successful
    if ($image['error'] === UPLOAD_ERR_OK) {
        $imageFileName = $image['name'];
        $imageTempName = $image['tmp_name'];
        
        // Move the uploaded image to the "images" folder
        $uploadPath = '../images/' . $imageFileName;
        move_uploaded_file($imageTempName, $uploadPath);

        // Store user data in the database, including the image file name
        $inputData = [
            'name' => $name,
            'price' => $price,
            'image' => $imageFileName,
            'CategoryId'=>$catId,
            'subCategoryId'=>$subcatId,
        ];

        $storeUser = storeItems($inputData);

        echo $storeUser;
    } else {
        $data = [
            'status' => 400,
            'message' => 'Image upload failed',
        ];
        echo json_encode($data);
    }
} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . " Method Not Allowed",
    ];
    header("HTTP:/1.0 405 Method Not Allowed");
    echo json_encode($data);
}
?>
