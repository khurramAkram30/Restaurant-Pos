<?php
require "../config/conn.php";
require "../inventory/function.php";

function error422($message)
{
    $data = [
        'status' => 422,
        'message' => $message,
    ];
    header("HTTP:/1.0 200 ok");
    echo json_encode($data);
    exit();
}
function createorder($datas)
{
    date_default_timezone_set("America/New_York");
    global $conn;
    $items = $datas['items'];
    $instruction = $datas['instrucion'];
    $userinfo = $datas['userInfo'];
    $paymentType = $datas["paymentMethod"];
    $time = date("h:i:sa");
    $usertype = $datas["userType"];
    if ($usertype == "Guest") {
        $sql = "insert into users VALUES (NULL,'" . $userinfo['fname'] . "','" . $userinfo['lname'] . "','" . $userinfo['email'] . "','" . $userinfo['telephone'] . "','','','" . $userinfo['postCode'] . "','" . $userinfo['address1'] . "','" . $userinfo['address2'] . "','" . $userinfo['city'] . "','$usertype')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $getUserId = "SELECT * FROM `users` ORDER BY id DESC LIMIT 1";
            $getUserIdResult = mysqli_query($conn, $getUserId);
            if (mysqli_num_rows($getUserIdResult) == 1) {
                $row = mysqli_fetch_array($getUserIdResult);
                $userID = $row[0];
                // specialInstruction
                $orderID=cusomOrder();
                $websiteOrder = "insert into websiteorder VALUES (NULL,'$orderID',$userID,'In Progress','" . $instruction['total'] . "','$time','" . $instruction['specialInstruction'] . "')";
                $websiteOrderResult = mysqli_query($conn, $websiteOrder);
                if ($websiteOrderResult) {
                    $ordResult="";
                    for($i=0; $i < count($items); $i++) {
                        $pid=$items[$i]['productid'];  
                        $quantity=$items[$i]['quantity'];
                        $price=$items[$i]['price'];

                        $updateInventory=updateinventory($pid,$quantity);

                        $orders ="insert into websiteorderitems VALUES (NULL,'$orderID',$pid,$quantity,$price)";    
                        $ordResult=mysqli_query($conn,$orders);
                    }
                    if  ($ordResult) {
                            if($datas['deliveryType']== "collection"){
                                collectionOrder($userID,$time);  
                            }
                            else{
                                deliveryOrder($userID,$time);
                            }

                    $data = [
                        'status' => 201,
                        'message' => "Order Created",
                        'item' =>  $userID,
                    ];
                    header("HTTP:/1.0 201 created");
                    return json_encode($data);
                }
            }

        }
    }

}
}   

function cusomOrder()
{
    global $conn;
    $query = "SELECT * FROM `websiteorder`ORDER BY id DESC LIMIT 1";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_array($res);
        $customorderid = $row[1];
        $customorderid=++$customorderid;
        return $customorderid;

    }
}

function collectionOrder($userid,$time){
    global $conn;
    $query="insert into collectionorder values (Null,$userid,'$time','Confirm')";
    $res = mysqli_query($conn, $query);
}
function deliveryOrder($userid,$time){
    global $conn;
    $query="insert into deliveryorders values (Null,$userid,'$time','Confirm')";
    $res = mysqli_query($conn, $query);
}


?>