<?php
require "../config/conn.php";
require "../inventory/function.php";
function error422($message){
    $data=[
        'status' => 422,
        'message' => $message,
    ];
    header("HTTP:/1.0 200 ok");
    echo json_encode($data);
    exit();        
}

$getOrderById=array();
// getItem by cat id and Subcat id
function getOrderById($item){
    global $conn;
    $CategoryId=mysqli_real_escape_string($conn,$item['CategoryId']);
    $subCategoryId=mysqli_real_escape_string($conn,$item['subCategoryId']);
    
    if(empty(trim($CategoryId))){
        return error422('Enter CategoryId');
    }
    else{
        $query="Select * from items  WHERE category_id = $CategoryId and subcategory_id = $subCategoryId";
        $result=mysqli_query($conn,$query);
        if($result){
            if(mysqli_num_rows($result) > 0){
                //$res=mysqli_fetch_all($result,MYSQLI_ASSOC);
                while($row = mysqli_fetch_assoc($result)) {
                    $getOrderById[] = $row;
                    }
                   
                $data=[
                    'status' => 201,
                    'message' => "items Fetched",
                    'response' => $getOrderById,
                ];
                header("HTTP:/1.0 201 Fetched");
                return json_encode($data);
            
            } 
            else{
                $data=[
                    'status' => 404,
                    'message' => "No items found",
                ];
                header("HTTP:/ 404 No items Found");
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
}

// insert item
function storeItems($Subcategories){
    global $conn;
    $itemname=mysqli_real_escape_string($conn,$Subcategories['name']);
    $price=mysqli_real_escape_string($conn,$Subcategories['price']);
    // $image=mysqli_real_escape_string($conn,$Subcategories['image']);
    $CategoryId=mysqli_real_escape_string($conn,$Subcategories['CategoryId']);
    $subCategoryId=mysqli_real_escape_string($conn,$Subcategories['subCategoryId']);
    $web_mobile=mysqli_real_escape_string($conn,$Subcategories['web_mobile']);
    $desc=mysqli_real_escape_string($conn,$Subcategories['description']);
    
    if(empty(trim($itemname))){
        return error422('Enter subacategory name');
    }
    else{
        $query="insert into items VALUES (NULL,'$CategoryId','$subCategoryId','$itemname',$price,'$web_mobile','$desc')";
        $result=mysqli_query($conn,$query);
        if($result){
            insertInventory();
            $data=[
                'status' => 201,
                'message' => "items Created",
            ];
            header("HTTP:/1.0 200 created");
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
// getallitem
$getallitems=array();
function getallitems(){
    global $conn;
    $query="SELECT i.id,c.name AS Category,s.name AS Subcategory,i.name,i.sell,i.type,i.description FROM items AS i INNER JOIN subcategories AS s ON i.subcategory_id = s.id INNER JOIN categories AS c ON s.category_id = c.id";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getallitems[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"items Found",
                'response'=> $getallitems,
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

// getItem by category id

$getItemsById=array();
function getItemsById($item){
    global $conn;
    $id=mysqli_real_escape_string($conn,$item['id']);
    $query="select * from items where category_id=$id";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getItemsById[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"items Found",
                'response'=>$getItemsById,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "No items found in this category",
            ];
            header("HTTP:/ 404 No items found in this category");
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


// update Item
function updateitem($itemdata,$itemID){
    global $conn;
    if(!isset($itemID['id'])){
        return error422('item id not found in url');
    }else if($itemID['id'] == null){
        return error422('Enter item Id');
    }
    $id=mysqli_real_escape_string($conn,$itemID['id']);
    $name=mysqli_real_escape_string($conn,$itemdata['name']);
    $cat_id=mysqli_real_escape_string($conn,$itemdata['categoryId']);
    $subcat_id=mysqli_real_escape_string($conn,$itemdata['subCategoryId']);
    $price=mysqli_real_escape_string($conn,$itemdata['price']);
    $desc=mysqli_real_escape_string($conn,$itemdata['description']);
    // $email=mysqli_real_escape_string($conn,$subcategorydata['email']);

    if(empty(trim($name))){
        return error422('Enter name');
    }
    else{
        $query="update items set category_id=$cat_id,subcategory_id=$subcat_id,name='$name',sell='$price',description='$desc' where id = '$id'";
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
$mobileItems=array();
function mobileItems(){
    global $conn;
    $query="SELECT i.id,c.name AS Category,s.name AS Subcategory,i.name,i.sell FROM items AS i INNER JOIN subcategories AS s ON i.subcategory_id = s.id INNER JOIN categories AS c ON s.category_id = c.id where i.type='mobile'";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $mobileItems[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"items Found",
                'response'=> $mobileItems,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "No item found",
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

$webItems=array();
function webItems(){
    global $conn;
    $query="SELECT i.id,c.name AS Category,s.name AS Subcategory,i.name,i.sell FROM items AS i INNER JOIN subcategories AS s ON i.subcategory_id = s.id INNER JOIN categories AS c ON s.category_id = c.id where i.type='Website'";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getallitems[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"items Found",
                'response'=> $getallitems,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "No item found",
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

$itemsByName=array();
function itemsByName($itemData){
    global $conn;
    $catid=$itemData['catId'];
    $itemname=$itemData['itemName'];
    $query="";
    if($catid != Null){
    $query="SELECT i.id,c.name AS Category,s.name AS Subcategory,i.name,i.sell,i.type FROM items AS i INNER JOIN subcategories AS s ON i.subcategory_id = s.id INNER JOIN categories AS c ON s.category_id = c.id where c.id= $catid And i.type='Mobile' AND i.name LIKE '%$itemname%'";
    }
    else{
    $query="SELECT i.id,c.name AS Category,s.name AS Subcategory,i.name,i.sell,i.type FROM items AS i INNER JOIN subcategories AS s ON i.subcategory_id = s.id INNER JOIN categories AS c ON s.category_id = c.id where i.type='Mobile' And i.name LIKE '%$itemname%'";

    }
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $itemsByName[]=$row;
        }
        
        $data=[
            'status'=>200,
            'message'=>"items Found",
            'response'=> $itemsByName,
        ];
        header("HTTP:/200 ok");
        return json_encode($data);
    }
    else{
        $data=[
            'status' => 404,
            'message' => "No item found",
        ];
        header("HTTP:/ 404 No subCategory Found");
        return json_encode($data);
    }   
    }

function Deleteitems($data){
    global $conn;
    $query="Delete from items where id=$data[id]";
    $result=mysqli_query($conn,$query);
    if($result){
        $data=[
            'status' => 201,
            'message' => "items Deleted",
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

function getItemFilter($data){
    global $conn;
    $getItemFilter=array();
    $catid=mysqli_real_escape_string($conn,$data['catid']);
    $subid=mysqli_real_escape_string($conn,$data['subcatid']);
    $query="select * from items where category_id=$catid And subcategory_id=$subid";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getItemFilter[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"items Found",
                'response'=>$getItemFilter,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "No items found in this category",
            ];
            header("HTTP:/ 404 No items found in this category");
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
?>