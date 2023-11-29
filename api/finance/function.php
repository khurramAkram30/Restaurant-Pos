<?php
require "../config/conn.php";




$posOrderByDate=array();

function posOrderByDate($expense){
    global $conn;
    $date1=mysqli_real_escape_string($conn,$expense['date1']);
    $date2=mysqli_real_escape_string($conn,$expense['date2']);
    $query="SELECT * FROM `orders` WHERE order_date BETWEEN '$date1' And '$date2' ORDER BY order_date ASC";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $posOrderByDate[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"Order Found",
                'response'=>$posOrderByDate,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "No Order found",
            ];
            header("HTTP:/ 404 No order Found");
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





$webOrderByDate=array();

function websiteOrderByDate($expense){
    global $conn;
    $date1=mysqli_real_escape_string($conn,$expense['date1']);
    $date2=mysqli_real_escape_string($conn,$expense['date2']);
    $query="SELECT DISTINCT users.firstName,users.lastName,users.address1,users.phone,websiteorder.CustomOrderId,websiteorder.status,websiteorder.total,websiteorder.notes,websiteorder.date,deliveryorders.userId,paymenttransaction.paymentMethod,paymenttransaction.paymentAmount from users INNER JOIN websiteorder on users.id=websiteorder.userId INNER JOIN deliveryorders on deliveryorders.userId=websiteorder.userId INNER JOIN paymenttransaction on paymenttransaction.orderId=websiteorder.CustomOrderId AND websiteorder.status= 'Completed' AND date BETWEEN '$date1'AND '$date2'";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $webOrderByDate[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"Order Found",
                'response'=>$webOrderByDate,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "No Order found",
            ];
            header("HTTP:/ 404 No order Found");
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