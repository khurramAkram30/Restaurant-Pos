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

function createTable($table){
    global $conn;

    $name=mysqli_real_escape_string($conn,$table['name']);

    if(empty(trim($name))){
        return error422('Enter table name');
    }
    else{
        $query="insert into tables VALUES (NULL, '$name', 'Available')";
        $result=mysqli_query($conn,$query);
        if($result){
            $data=[
                'status' => 201,
                'message' => "table Created",
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

// update table

function updateTable($catdata,$cat){
    global $conn;
    if(!isset($cat['id'])){
        return error422('tableId not found in url');
    }else if($cat['id'] == null){
        return error422('Enter id');
    }
    $id=mysqli_real_escape_string($conn,$cat['id']);
    $status=mysqli_real_escape_string($conn,$catdata['Status']);

    if(empty(trim($status))){
        return error422('Enter name');
    }
    else{
        $query="update tables set staus='$status' where id = '$id'";
        $result=mysqli_query($conn,$query);
        if($result){
            $data=[
                'status' => 201,
                'message' => "Table updated",
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

// print all tables

function getallTable(){
    global $conn;

    $query="select * from tables";
    $result=mysqli_query($conn,$query);

    if($result){
        if(mysqli_num_rows($result) > 0){
             $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
             $data=[
                'status' => 200,
                'message' => "Tables List",
                'response' => $res
            ];
            header("HTTP:/1.0 200 ok");
            return json_encode($data);
            } 
        else{
        $data=[
            'status' => 404,
            'message' => "No Table Found",
        ];
        header("HTTP:/1.0 404 No Table Found");
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



?>