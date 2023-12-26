<?php
require "../config/conn.php";
function createUser($userinfo)
{
    global $conn;
    $sql = "insert into users VALUES (NULL,'" . $userinfo['fname'] . "','" . $userinfo['lname'] . "','" . $userinfo['email'] . "','" . $userinfo['telephone'] . "','" . $userinfo['fax'] . "','" . $userinfo['password'] . "','" . $userinfo['postCode'] . "','" . $userinfo['address1'] . "','" . $userinfo['city'] . "','user')";
    $res = $conn->query($sql);
    if ($res) {
        $data = [
            "result" => "success"
        ];
        header("HTTP:/1.0 201 created");
        return json_encode($data);
    } else {
        $data = [
            "result" => "Error"
        ];
        header("HTTP:/1.0 500 Error");
        return json_encode($data);

    }
}

$user=array();
function login($data)
{
    global $conn;
    $sql = "select * from users where email='".$data['email']."' and password = '".$data['password']."' and userType='user'";
    $res = $conn->query($sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $user[] = $row; 
        }
        $data = [  
            "result"=> "user fetched",
            "user"=>$user
        ];
        header("HTTP:/1.0 201 fetched");
        return json_encode($data);
    }
    else{
        $data = [  
            "result"=> "user Not Found",
        ];
        header("HTTP:/1.0 500 Error");
        return json_encode($data);
    }
}

function getUserHistory($userId){
    $getUserHistory=array();
    global $conn;
    $sql="select * from  websiteorder where userId = '".$userId['id']."'";
    $res=$conn->query($sql);
    if (mysqli_num_rows($res) > 0) {
        while($row=mysqli_fetch_assoc($res)){
            $getUserHistory[] = $row;
        }  
        $data=[
            "success"=>"users order history",
            "result"=> $getUserHistory,
        ];
        header("HTTP:/1.0 200 fetched");
        return json_encode($data);
    }
    else{
        $data = [  
            "result"=> "No Order Found",
        ];
        header("HTTP:/1.0 500 Error");
        return json_encode($data); 
    }
}

function getAllUser(){
    $getAllUser=array();
global $conn;
$sql= "select * from users";
$res=$conn->query($sql);
if (mysqli_num_rows($res) > 0) {
    while($row=mysqli_fetch_assoc($res)){
        $getAllUser[] = $row;
    }  
    $data=[
        "success"=>"users found",
        "result"=> $getAllUser,
    ];
    header("HTTP:/1.0 200 fetched");
    return json_encode($data);
}
else{
    $data = [  
        "result"=> "No user Found",
    ];
    header("HTTP:/1.0 500 Error");
    return json_encode($data); 
}
}


function updateAddress($data){
global $conn;
$query="update users set address1= '".$data["address1"]."',postcode='".$data["postcode"]."' where id='".$data["id"]."'";
$result=mysqli_query($conn,$query);
if ($result) {
    $data = [
        "result" => "Updated"
    ];
    header("HTTP:/1.0 201 updated");
    return json_encode($data);
} else {
    $data = [
        "result" => "Error"
    ];
    header("HTTP:/1.0 500 Error");
    return json_encode($data);

}
}

function getOrderDetail($orderid){
    $getAllOrder=array();
    global $conn;
    $order=mysqli_real_escape_string($conn,$orderid['id']);
    $sql="SELECT * FROM websiteorderitems INNER JOIN items on websiteorderitems.item_id=items.id WHERE websiteorderitems.websiteOrderId=$order";
    $res=$conn->query($sql);
    if (mysqli_num_rows($res) > 0) {
        while($row=mysqli_fetch_assoc($res)){
            $getAllOrder[] = $row;
        }  
        $data=[
            "success"=>"order found",
            "result"=> $getAllOrder,
        ];
        header("HTTP:/1.0 200 fetched");
        return json_encode($data);
    }
    else{
        $data = [  
            "result"=> "No user Found",
        ];
        header("HTTP:/1.0 500 Error");
        return json_encode($data); 
    }
}

?>