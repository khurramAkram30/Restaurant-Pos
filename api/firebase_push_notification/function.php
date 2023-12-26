<?php
require "../config/conn.php";
function createtokenfcm($token){
    global $conn;

    $name=mysqli_real_escape_string($conn,$token['name']);
    $token=mysqli_real_escape_string($conn,$token['token']);

    $selectQuery="select * from fcmtoken where name='$name'";
    $res=mysqli_query($conn,$selectQuery);
    if(mysqli_num_rows($res)>0){
        $updatequery="update fcmtoken set token='$token' where name='$name'";
        $updres=mysqli_query($conn,$updatequery);
        if($updres){
            $data=[
                'status' => 201,
                'message' => "token updated",
            ];
            header("HTTP:/1.0 201 created");
            return json_encode($data);
        
        }
    }else{

        $query="insert into fcmtoken VALUES (NULL, '$name','$token')";
        $result=mysqli_query($conn,$query);
        if($result){
            $data=[
                'status' => 201,
                'message' => "token inserted",
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
?>