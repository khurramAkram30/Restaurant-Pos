<?php

require "../config/conn.php";
require "../inventory/function.php";
// require "../../vendor/autoload.php";
function error422($message){
    $data=[
        'status' => 422,
        'message' => $message,
    ];
    header("HTTP:/1.0 200 ok");
    echo json_encode($data);
    exit();        
}
function createOrder($data){
    global $conn;

    $arrayOfObjects = $data['Items'];
    $orderId = $data['order_Id'];
    $tableId = $data['table_Id'];
    $subTotal=$data['subTotal'];
    $discount=$data['Discount'];
    $payableAmount=$data['paidAmount'];
    if($discount > 0){
        $discount=$data['Discount'];
    }
    else{
        $discount=0;
    }


    $date=date("d/m/Y");
    // $orderId=$otherData[0]['order_Id'];
    // $tableId=$otherData[0]['table_Id'];
    $selectOrder="SELECT * FROM `orders`WHERE CustomOrderId='$orderId'";
    $selectOrderResult=mysqli_query($conn,$selectOrder);
    if($selectOrderResult){
        if(mysqli_num_rows($selectOrderResult) > 0){
            $updateorder="UPDATE orders SET Subtotal = $subTotal, Discount = $discount, Total = $payableAmount WHERE CustomOrderId = '$orderId'";
            $updateRes=mysqli_query($conn,$updateorder);
        }
    else{
        $order ="insert into orders VALUES (NULL,'$orderId','$tableId','In Progress','$date',$subTotal,$discount,$payableAmount,'Not selected')";    
        $orderResult=mysqli_query($conn,$order);
        $updatetable="Update tables set staus='occupied' where id=$tableId";    
        $updatetableRes=mysqli_query($conn,$updatetable);
    }
}
    
    $ordResult="";
    if($data){
            for($i=0; $i < count($arrayOfObjects); $i++) {
                $pid=$arrayOfObjects[$i]['productid'];  
                $quantity=$arrayOfObjects[$i]['quantity'];
                $price=$arrayOfObjects[$i]['price'];
                $modifiers=$arrayOfObjects[$i]['extname'];
                $modifiers_price=$arrayOfObjects[$i]['extprice'];

                $updateInventory=updateinventory($pid,$quantity);

                $orders ="insert into order_items VALUES (NULL,'$orderId',$pid,$quantity,$price,'$modifiers',$modifiers_price,'Not Printed')";    
                $ordResult=mysqli_query($conn,$orders);
            }

            if($ordResult){
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


$getallOrder=array();
function getallOrder(){
    global $conn;
    $query="SELECT * from orders where order_status='In Progress'";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getallOrder[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"Order Found",
                'response'=>$getallOrder,
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
$getFinishOrder=array();
function getFinishOrder(){
    global $conn;
    $query="SELECT * from orders where order_status='Finish'";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getallOrder[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"Order Found",
                'response'=>$getallOrder,
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

$getCompletedOrder=array();
function getCompletedOrder(){
    global $conn;
    $query="SELECT * from orders where order_status='Completed'";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getallOrder[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"Order Found",
                'response'=>$getallOrder,
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

$getOrderById=array();
function getOrderById($orderId){
    global $conn;
    $id=mysqli_real_escape_string($conn,$orderId['id']);
    $query="SELECT items.name AS Product_Name, order_items.order_id, order_items.quantity, order_items.subtotal, order_items.modifiers, order_items.modifier_price, orders.table_id,order_items.order_items_id As itemId FROM items INNER JOIN order_items ON items.id = order_items.item_id INNER JOIN orders ON orders.CustomOrderId = order_items.order_id WHERE order_items.order_id = '$id';";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getOrderById[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"order items Found",
                'response'=>$getOrderById,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "No order item found ",
            ];
            header("HTTP:/ 404 No order items found ");
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

function deleteItemById($itemId){
    global $conn;
    if(!isset($itemId['id'])){
        return error422('item Id not found in the url');
    }else if($itemId['id']==null){
        return error422('Enter the item id');
    }

    $id=mysqli_real_escape_string($conn,$itemId['id']);
    $query="DELETE FROM order_items WHERE order_items_id =$id ";
    $result=mysqli_query($conn,$query);
    if($result){
        $data=[
            'status' => 200,
            'message' => "order item Delete Successfully ",
        ];
        header("HTTP:/ 200 Deleted Successfully");
        return json_encode($data);
    }
    else{
        $data=[
            'status' => 404,
            'message' => "order item found ",
        ];
        header("HTTP:/ 404 No order items found ");
        return json_encode($data);
    }

}

function updateorderStatus($status){
    global $conn;
    if(!isset($status["id"])){
    return error422("Please Enter id");
    }
$id=mysqli_real_escape_string($conn,$status["id"]);
$payment=mysqli_real_escape_string($conn,$status["payment"]);
$query= "update orders set order_status='Completed',paymentMethod='$payment' where CustomOrderId='$id'";
$result=mysqli_query($conn,$query);
if($result){
    updateTable($id);
    $data=[
        "status"=> 200,
        "message"=> "Data Updated",
        ];
        header("HTTP:/1.0 201 created");
        return json_encode($data);
}
}

function getOrderStatusById($data){
    global $conn;
    $query="Select order_status from orders where CustomOrderId='$data[id]'";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            $orderstatus=$row['order_status'];
            $data=[
                "status"=> 200,
                "message"=> "Order Status",
                "Statuss"=>$orderstatus,
                ];
                header("HTTP:/1.0 201 created");
                return json_encode($data);
       
        }
         }
        // return json_encode($status);

}

function updateTable($id){
    global $conn;
    $query="select * from orders where CustomOrderId='$id'";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res) > 0){
        while($row=mysqli_fetch_assoc($res)){
            // print_r($row);
          $table_id = $row['table_id'];
          $updateTable="UPDATE tables set staus='Available' where id=$table_id";
          $result=mysqli_query($conn,$updateTable);
          if($result){
            // echo "updated";
          }
        }
    }
}

?>


