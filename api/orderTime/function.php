<?php
require "../config/conn.php";

function createOrderTime($data){
    global $conn;
    $name=$data["name"];
    $time=$data["time"];
    $sql= "insert into times values(NULL,'$name','$time')";

    $result=mysqli_query($conn,$sql);
    if($result){
        $data=[
            'status'=>200,
            'message'=>"Order times inserted",
        ];
        header("HTTP:/200 ok");
        return json_encode($data);
    }
    else{
        $data=[
            'status' => 404,
            'message' => "Error",
        ];
        header("HTTP:/ 404 Order Found");
        return json_encode($data);
    }

}


function getOrderTime(){
    $getOrderTime=array();
    global $conn;
    $sql="select * from times";
    $result=mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)> 0){
            while($row = mysqli_fetch_assoc($result)) {
                $getOrderTime[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"Order times Found",
                'response'=>$getOrderTime,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "Order times not found ",
            ];
            header("HTTP:/ 404 Order Found");
            return json_encode($data);
        }
        }
}

function updateOrderTime($data){
    global $conn;   
    $id= $data["id"];
    $name= $data["name"];
    $time= $data["time"];
    $sql= "update times set time='$time' where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        $data=[
            'status'=>200,
            'message'=>"Order times updated",
        ];
        header("HTTP:/200 ok");
        return json_encode($data);
    }
    else{
        $data=[
            'status' => 404,
            'message' => "Error",
        ];
        header("HTTP:/ 404 not updated");
        return json_encode($data);
    }      
}



?>