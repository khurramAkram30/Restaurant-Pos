<?php
require "../config/conn.php";
require "../inventory/function.php";
require "payment.php";
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
    $paymentType = $datas["paymentMethod"];
    $time = date("h:i:sa");
    $date = date("d-m-Y");
    $usertype = $datas["userType"];
    if ($usertype == "Guest") {
         $userinfo = $datas['userInfo'];
        
        $sql = "insert into users VALUES (NULL,'" . $userinfo['fname'] . "','" . $userinfo['lname'] . "','" . $userinfo['email'] . "','" . $userinfo['telephone'] . "','','','" . $userinfo['postCode'] . "','" . $userinfo['address1'] . "','" . $userinfo['address2'] . "','" . $userinfo['city'] . "','$usertype')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $userID = getUserId();
            // specialInstruction
            $orderID = cusomOrder();
            $websiteOrder = "insert into websiteorder VALUES (NULL,'$orderID',$userID,'In Progress','" . $instruction['serviceCharges'] . "','" . $instruction['collectionPrice'] . "','" . $instruction['total'] . "','$time','$date','" . $instruction['specialInstruction'] . "')";
            $websiteOrderResult = mysqli_query($conn, $websiteOrder);
            if ($websiteOrderResult) {
                $ordResult = "";
                for ($i = 0; $i < count($items); $i++) {
                    $pid = $items[$i]['productid'];
                    $quantity = $items[$i]['quantity'];
                    $price = $items[$i]['price'];

                    $updateInventory = updateinventory($pid, $quantity);

                    $orders = "insert into websiteorderitems VALUES (NULL,'$orderID',$pid,$quantity,$price)";
                    $ordResult = mysqli_query($conn, $orders);
                }
                if ($ordResult) {
                    if ($instruction['deliveryType'] == "collection") {
                        collectionOrder($userID, $instruction['CollectionTime']);
                    } else {
                        deliveryOrder($userID, $time);
                    }

                    $paymentQuery = "insert into paymenttransaction values(NULL,'$orderID','$paymentType','" . $instruction['total'] . "','$time')";
                    $paymentQueryResult = mysqli_query($conn, $paymentQuery);
                    if($paymentType == "card"){
                        $token = $datas["stripeToken"];
                        $amount= $instruction['total'] ;
                        $paymentStatus=paymentStripe($userID, $orderID,$token,$amount);
                        if ($paymentQueryResult) {
                            $data = [
                                'status' => 201,
                                'message' => "Order Created",
                                'PaymentResult' => $paymentStatus,
                            ];
                            header("HTTP:/1.0 201 created");
                            return json_encode($data);
                        }
                    }
                    else{
                        $data = [
                            'status' => 201,
                            'message' => "Order Created",
                        ];
                        header("HTTP:/1.0 201 created");
                        return json_encode($data);
                    }
                   
                }
            }

        }
    }
    else{
            $userID=$datas["userId"];
            $orderID = cusomOrder();
            // $websiteOrder = "insert into websiteorder VALUES (NULL,'$orderID',$userID,'In Progress','" . $instruction['total'] . "','$time','$date','" . $instruction['specialInstruction'] . "')";
            $websiteOrder = "insert into websiteorder VALUES (NULL,'$orderID',$userID,'In Progress','" . $instruction['serviceCharges'] . "','" . $instruction['collectionPrice'] . "','" . $instruction['total'] . "','$time','$date','" . $instruction['specialInstruction'] . "')"; 
            $websiteOrderResult = mysqli_query($conn, $websiteOrder);
            if ($websiteOrderResult) {
                $ordResult = "";
                for ($i = 0; $i < count($items); $i++) {
                    $pid = $items[$i]['productid'];
                    $quantity = $items[$i]['quantity'];
                    $price = $items[$i]['price'];

                    $updateInventory = updateinventory($pid, $quantity);

                    $orders = "insert into websiteorderitems VALUES (NULL,'$orderID',$pid,$quantity,$price)";
                    $ordResult = mysqli_query($conn, $orders);
                }
                if ($ordResult) {
                    if ($instruction['deliveryType'] == "collection") {
                        collectionOrder($userID, $instruction['CollectionTime']);
                    } else {
                        deliveryOrder($userID, $time);
                    }

                    $paymentQuery = "insert into paymenttransaction values(NULL,'$orderID','$paymentType','" . $instruction['total'] . "','$time')";
                    $paymentQueryResult = mysqli_query($conn, $paymentQuery);
                    if($paymentType == "card"){
                        $token = $datas["stripeToken"];
                        $amount= $instruction['total'] ;
                        $paymentStatus=paymentStripe($userID, $orderID,$token,$amount);
                        if ($paymentQueryResult) {
                            $data = [
                                'status' => 201,
                                'message' => "Order Created",
                                'PaymentResult' => $paymentStatus,
                            ];
                            header("HTTP:/1.0 201 created");
                            return json_encode($data);
                        }
                    }

                    else{
                        $data = [
                            'status' => 201,
                            'message' => "Order Created",
                        ];
                        header("HTTP:/1.0 201 created");
                        return json_encode($data);
                    }
                }
            }
    }

}

cusomOrder();
function cusomOrder()
{
    global $conn;
    $query = "SELECT * FROM `websiteorder`ORDER BY id DESC LIMIT 1";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_array($res);
        $customorderid = $row[1];
        $customorderid = ++$customorderid;
        return $customorderid;

    } else {
        return 1;
    }
}




function getUserId()
{
    global $conn;
    $getUserId = "SELECT * FROM `users` ORDER BY id DESC LIMIT 1";
    $getUserIdResult = mysqli_query($conn, $getUserId);
    if (mysqli_num_rows($getUserIdResult) == 1) {
        $row = mysqli_fetch_array($getUserIdResult);
        $userID = $row[0];
        return $userID;
    }
}
function collectionOrder($userid, $time)
{
    global $conn;
    $query = "insert into collectionorder values (Null,$userid,'$time','Confirm')";
    $res = mysqli_query($conn, $query);
}
function deliveryOrder($userid, $time)
{
    global $conn;
    $query = "insert into deliveryorders values (Null,$userid,'$time','Confirm')";
    $res = mysqli_query($conn, $query);
}

$getCollectionOrder = array();
function getCollectionOrder()
{
    global $conn;
    $query = "SELECT users.firstName,users.lastName,users.address1,users.phone,websiteorder.CustomOrderId,websiteorder.status,websiteorder.total,websiteorder.notes,collectionorder.time,paymenttransaction.paymentMethod,paymenttransaction.paymentAmount from users INNER JOIN websiteorder on users.id=websiteorder.userId INNER JOIN collectionorder on collectionorder.userId=websiteorder.userId INNER JOIN paymenttransaction on paymenttransaction.orderId=websiteorder.CustomOrderId AND websiteorder.status='In Progress'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $getCollectionOrder[] = $row;
        }
        $data = [
            'status' => 201,
            'message' => "Order Fetched",
            'Data' => $getCollectionOrder,
        ];
        header("HTTP:/1.0 201 Fetcehd");
        return json_encode($data);
    }
    $data = [
        'status' => 201,
        'message' => "No Data Found",
    ];
    header("HTTP:/1.0 201 Fetched");
    return json_encode($data);
}

$getdeliverOrder = array();
function getdeliverOrder()
{
    global $conn;
    $query = "SELECT users.firstName,users.lastName,users.address1,users.phone,websiteorder.CustomOrderId,websiteorder.status,websiteorder.total,websiteorder.notes,deliveryorders.userId,paymenttransaction.paymentMethod,paymenttransaction.paymentAmount from users INNER JOIN websiteorder on users.id=websiteorder.userId INNER JOIN deliveryorders on deliveryorders.userId=websiteorder.userId INNER JOIN paymenttransaction on paymenttransaction.orderId=websiteorder.CustomOrderId AND websiteorder.status='In Progress'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $getdeliverOrder[] = $row;
        }
        $data = [
            'status' => 201,
            'message' => "Order Fetched",
            'Data' => $getdeliverOrder,
        ];
        header("HTTP:/1.0 201 Fetched");
        return json_encode($data);
    }
}

$getCompleteOrder = array();

function getCompleteOrder()
{
    global $conn;
    $query = "SELECT users.firstName,users.lastName,users.address1,users.phone,websiteorder.CustomOrderId,websiteorder.status,websiteorder.total,websiteorder.notes,deliveryorders.userId,paymenttransaction.paymentMethod,paymenttransaction.paymentAmount from users INNER JOIN websiteorder on users.id=websiteorder.userId INNER JOIN deliveryorders on deliveryorders.userId=websiteorder.userId INNER JOIN paymenttransaction on paymenttransaction.orderId=websiteorder.CustomOrderId AND websiteorder.status= 'Completed'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $getCompleteOrder[] = $row;
        }
        $data = [
            'status' => 201,
            'message' => "Order Created",
            'Data' => $getCompleteOrder,
        ];
        header("HTTP:/1.0 201 created");
        return json_encode($data);
    }

    $data = [
        'status' => 201,
        'message' => "No Data Found",
    ];
    header("HTTP:/1.0 201 created");
    return json_encode($data);

}

?>