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
            '$result' => $groupedData,
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




?>
