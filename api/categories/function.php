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
function createCategories($category){
    global $conn;

    $name=mysqli_real_escape_string($conn,$category['name']);

    if(empty(trim($name))){
        return error422('Enter Category name');
    }
    else{
        $query="insert into categories VALUES (NULL, '$name')";
        $result=mysqli_query($conn,$query);
        if($result){
            $data=[
                'status' => 201,
                'message' => "Category Created",
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

$getallCategories=array();
function getallCategories(){
    global $conn;

    $query="select * from categories";
    $result=mysqli_query($conn,$query);

    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getallCategories[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"Categories Found",
                'response'=>$getallCategories,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "No categories found",
            ];
            header("HTTP:/ 404 No Category Found");
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

function updatecategory($catdata,$cat){
    global $conn;
    if(!isset($cat['id'])){
        return error422('user id not found in url');
    }else if($cat['id'] == null){
        return error422('Enter User Id');
    }
    $id=mysqli_real_escape_string($conn,$cat['id']);
    $name=mysqli_real_escape_string($conn,$catdata['name']);

    if(empty(trim($name))){
        return error422('Enter name');
    }
    else{
        $query="update categories set name='$name' where id = '$id'";
        $result=mysqli_query($conn,$query);
        if($result){
            $data=[
                'status' => 201,
                'message' => "categories updated",
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


?>