<?php
require_once "../config/conn.php";

function createinventory($inventory){
    global $conn;
    $item_id=mysqli_real_escape_string($conn,$inventory['item_id']);
    $quantity=mysqli_real_escape_string($conn,$inventory['quantity']);

    $checkInventory="select * from inventory where item_id=$item_id";
    $checkInvent=mysqli_query($conn, $checkInventory);
    if(mysqli_num_rows($checkInvent)== 0){
    $query= "insert into inventory VALUES (NULL, $item_id,$quantity)";
    $result=mysqli_query($conn,$query);
    if($result){
        $data=[
            'status' => 201,
            'message' => "inventory Created",
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
            'message' => "item Already Exist",
        ];
        header("HTTP:/1.0 500 internal Server Error");
        return json_encode($data); 
    }
}

function updateinventory($itemid, $qty){
    global $conn;

    $item_id=mysqli_real_escape_string($conn,$itemid);
    $qty=mysqli_real_escape_string($conn,$qty);
    $query= "select * from inventory where item_id=$item_id";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)> 0){    
        $row=mysqli_fetch_assoc($result);
        $quantity=$row["quantity"];
        $res=$quantity-$qty;
    $udpate="update inventory set quantity=$res where item_id=$item_id";
    $updres=mysqli_query($conn,$udpate);
}
}

function displayData() {
    global $conn;

    // Your SQL query to fetch data from the database
    $query = "SELECT items.name,order_items.quantity,order_items.subtotal,order_items.item_id FROM order_items INNER JOIN items ON items.id=order_items.item_id;    ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Initialize an associative array to group data by item_id
        $groupedData = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $itemId = $row['item_id'];

            if (!array_key_exists($itemId, $groupedData)) {
                $groupedData[$itemId] = $row;
            } else {
                // Update quantities and subtotals for existing item_ids
                $groupedData[$itemId]['quantity'] += $row['quantity'];
                $groupedData[$itemId]['subtotal'] += $row['subtotal'];
                // You can add more fields as needed
            }
        }
        $data=[
            'status' => 201,
            'message' => "Inventory Display ",
            'result' => $groupedData,
        ];
        // Send the JSON response and exit to prevent further output
    // header('Content-Type: application/json');
    header("HTTP:/1.0 201 display");
    return json_encode($data);

    } else {
        $data=[
            'status' => 201,
            'message' => "Inventory Not Found ",
        ];
        header("HTTP:/1.0 500 internal Server Error");
                return json_encode($data);
    }
}

function updateSingleInventory($item){
    global $conn;  
    // $itemid=mysqli_real_escape_string($conn,$itemid['id']);
    $item_id=mysqli_real_escape_string($conn,$item['item_id']);
    $qty=mysqli_real_escape_string($conn,$item['quantity']);

    $query= "select * from inventory where item_id=$item_id";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)> 0){    
        $row=mysqli_fetch_assoc($result);
        $quantity=$row["quantity"];
        $res=$quantity+$qty;
    $udpate="update inventory set quantity=$res where item_id=$item_id";
    $updres=mysqli_query($conn,$udpate);
    if($updres){
        $data=[
            'status' => 201,
            'message' => "Inventory updated",
        ];
    header("HTTP:/1.0 201 updated");
    return json_encode($data);
    }
    else{
        $data=[
            'status' => 201,
            'message' => "Inventory updated ",
        ];
    header("HTTP:/1.0 201 updated");
    return json_encode($data);
    }
}
}

$getallInventory=array();
function displayInventoryData(){
    global $conn;
    $query="SELECT inventory.item_id , items.name FROM items,inventory where inventory.item_id=items.id;";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getallInventory[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"Inventory items Found",
                'response'=>$getallInventory,
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


function insertInventory(){
    global $conn;
    $query= 'SELECT * FROM items ORDER BY id DESC LIMIT 1';
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                $itemid=$row['id'];
                $insertqty="insert into inventory VALUES(NULL,$itemid,0)";
                $insertResult=mysqli_query($conn,$insertqty);
                if($insertResult){
                echo "inserted";
                }
            }
        }
    }
}

$remainingInventory=array();
function remainingInventory(){
global $conn;
$query= "select items.id,items.name,inventory.quantity from items INNER join inventory on inventory.item_id = items.id";
$result=mysqli_query($conn,$query);
if($result){    
    while($row = mysqli_fetch_assoc($result)) {
        $remainingInventory[]=$row;
        $data=[
            'status'=>200,
            'message'=>"Remaining Item",
            'response'=>$remainingInventory,
        ];
        header("HTTP:/200 ok");
        return json_encode($data);
    }
}
else{
    $data=[
        'status' => 404,
        'message' => "No Data Found",
    ];
    header("HTTP:/ 404 No Data Found");
    return json_encode($data);
}
}

?>
