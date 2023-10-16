<?php
require "../config/conn.php";

function createOrder($data){
    global $conn;

    $arrayOfObjects = $data['Items'];
    $orderId = $data['order_Id'];
    $tableId = $data['table_Id'];
    $subTotal=$data['subTotal'];
    $discount=$data['Discount'];
    $payableAmount=$data['paidAmount'];


    $date=date("d/m/Y");
    // $orderId=$otherData[0]['order_Id'];
    // $tableId=$otherData[0]['table_Id'];
    $order ="insert into orders VALUES (NULL,'$orderId','$tableId','In Progress','$date',$subTotal,$discount,$payableAmount)";    
    $orderResult=mysqli_query($conn,$order);
        if($data){

            for($i=0; $i < count($arrayOfObjects); $i++) {
                $pid=$arrayOfObjects[$i]['productid'];  
                $quantity=$arrayOfObjects[$i]['quantity'];
                $price=$arrayOfObjects[$i]['price'];
                $modifiers=$arrayOfObjects[$i]['extname'];
                $modifiers_price=$arrayOfObjects[$i]['extprice'];

                $orders ="insert into order_items VALUES (NULL,'$orderId',$pid,$quantity,$price,'$modifiers',$modifiers_price,'Not Printed')";    
                $ordResult=mysqli_query($conn,$orders);
            }

            if($orderResult){
                $data=[
                    'status' => 201,
                    'message' => "Order Created",
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
        else{
            $data=[
                'status' => 500,
                'message' => "internal Server Error",
            ];
            header("HTTP:/1.0 500 internal Server Error");
            return json_encode($data);
        
    
    }
} 

function getallOrder(){
    global $conn;

    
    $query="SELECT * from orders where order_status='In Progress'";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            $data=[
                'status'=>200,
                'message'=>"Order Found",
                'response'=>$res,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "Order found",
            ];
            header("HTTP:/ 404 Order Found");
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