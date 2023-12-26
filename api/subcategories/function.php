<?php
require "../config/conn.php";

function error422($message){
    $data=[
        'status' => 422,
        'message' => $message,
    ];
    header("HTTP:/1.0 200 ok");
    echo json_encode($data);
    exit();        
}

// Insert Data
function createSubcategories($Subcategories){
    global $conn;
    $catid=mysqli_real_escape_string($conn,$Subcategories['categoryId']);
    $name=mysqli_real_escape_string($conn,$Subcategories['name']);

    if(empty(trim($name))){
        return error422('Enter subacategory name');
    }
    else{
        $query="insert into subcategories VALUES (NULL,$catid,'$name')";
        $result=mysqli_query($conn,$query);
        if($result){
            $data=[
                'status' => 201,
                'message' => "Sub Category Created",
            ];
            header("HTTP:/1.0 201 created");
            return json_encode($data);
        
        }
        else{
            $data=[
                'status' => 500,
                'message' => "internal Server Error",
            ];
            header("HTTP:/1.0 500 internal Server Error");
            return json_encode($data);
        }
    
    }
}

// Update data 

function updateSubcategory($subcategorydata,$subcatid){
    global $conn;
    if(!isset($subcatid['id'])){
        return error422('user id not found in url');
    }else if($subcatid['id'] == null){
        return error422('Enter User Id');
    }
    $id=mysqli_real_escape_string($conn,$subcatid['id']);
    $name=mysqli_real_escape_string($conn,$subcategorydata['name']);
    $cat_id=mysqli_real_escape_string($conn,$subcategorydata['categoryId']);
    
    // $email=mysqli_real_escape_string($conn,$subcategorydata['email']);

    if(empty(trim($name))){
        return error422('Enter name');
    }
    else{
        $query="update subcategories set name='$name', category_id='$cat_id' where id = '$id'";
        $result=mysqli_query($conn,$query);
        if($result){
            $data=[
                'status' => 201,
                'message' => "Subcategories updated",
            ];
            header("HTTP:/1.0 201 updated");
            return json_encode($data); 
        }
        else{
            $data=[
                'status' => 500,
                'message' => "internal Server Error",
            ];
            header("HTTP:/1.0 500 internal Server Error");
            return json_encode($data);
        }
    }
}




// print Data
$getallSubCategories=array();
function getallSubCategories(){
    global $conn;
    $query="SELECT DISTINCT subcategories.id,categories.name AS category_name, subcategories.name
    FROM subcategories
    INNER JOIN categories ON categories.id = subcategories.category_id";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getallSubCategories[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"subCategories Found",
                'response'=>$getallSubCategories,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "No subcategories found",
            ];
            header("HTTP:/ 404 No subCategory Found");
            return json_encode($data);
        }

    }
    else{
        $data=[
            'status' => 500,
            'message' => "internal server error",
        ];
        header('HTTP:/1.0 internal server error');
        return json_encode($data);
    }

}
$getSubCatById=array();
function getSubCatById($customerData){
    global $conn;

    if($customerData['id'] == null){
        return error422('Enter Your Category id');

    }
    $customerId=mysqli_real_escape_string($conn,$customerData['id']);

    $query="select * from subcategories where category_id = $customerId ";
    $result=mysqli_query($conn,$query);

    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getSubCatById[] = $row;
                }
            $data=[
                'status' => 200,
                'message' => "Subacategories Fetched",
                'response'=>$getSubCatById,
            ];
            header("HTTP:/1.0 200 ok");
            return json_encode($data);

        }
        else{
            $data=[
                'status' => 404,
                'message' => "user not found",
            ];
            header("HTTP:/1.0 404 user not found");
            return json_encode($data);
        }
        }
    else{
        $data=[
            'status' => 500,
            'message' => "internal Server Error",
        ];
        header("HTTP:/1.0 500 internal Server Error");
        return json_encode($data);
    }
}

function DeleteSubCategories($data){
    global $conn;
    $query="Delete from subcategories where id=$data[id]";
    $result=mysqli_query($conn,$query);
    if($result){
        $data=[
            'status' => 201,
            'message' => "subcategories Deleted",
        ];
        header("HTTP:/1.0 201 Deleted");
        return json_encode($data); 
    }
    else{
        $data=[
            'status' => 500,
            'message' => "internal Server Error",
        ];
        header("HTTP:/1.0 500 internal Server Error");
        return json_encode($data);
    }  
}
?>