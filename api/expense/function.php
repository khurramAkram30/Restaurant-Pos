<?php
require "../config/conn.php";

function createexpense($expense){
    global $conn;
    $expense_type=mysqli_real_escape_string($conn,$expense['type']);
    $amount=mysqli_real_escape_string($conn,$expense['amount']);
    $description=mysqli_real_escape_string($conn,$expense['description']);
    $date=mysqli_real_escape_string($conn,$expense['date']);

    $query= "insert into expenses VALUES (NULL, '$expense_type',$amount,'$description','$date')";
    $result=mysqli_query($conn,$query);
    if($result){
        $data=[
            'status' => 201,
            'message' => "expense Created",
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

$getallExpense=array();
function displayData(){
    global $conn;

    $query="select * from expenses";
    $result=mysqli_query($conn,$query);

    if($result){
        if(mysqli_num_rows($result) > 0){
            // $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
            while($row = mysqli_fetch_assoc($result)) {
                $getallExpense[] = $row;
                }
            $data=[
                'status'=>200,
                'message'=>"Categories Found",
                'response'=>$getallExpense,
            ];
            header("HTTP:/200 ok");
            return json_encode($data);
        }
        else{
            $data=[
                'status' => 404,
                'message' => "No categories found",
            ];
            header("HTTP:/ 404 No Category Found");
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

function updateExpense($expense){
    global $conn;  
    $expense_id=mysqli_real_escape_string($conn,$expense['id']);
    $expense_type=mysqli_real_escape_string($conn,$expense['type']);
    $amount=mysqli_real_escape_string($conn,$expense['amount']);
    $description=mysqli_real_escape_string($conn,$expense['description']);
    $date=mysqli_real_escape_string($conn,$expense['date']);

   $udpate="update expenses set expense_type='$expense_type',expense_amount=$amount,expense_description='$description',expense_date='$date' where expense_id=$expense_id";
    $updres=mysqli_query($conn,$udpate);
    if($updres){
        $data=[
            'status' => 201,
            'message' => "Expense updated",
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


 function DeleteExpense($data){
        global $conn;
        $query="Delete from expenses where expense_id=$data[id]";
        $result=mysqli_query($conn,$query);
        if($result){
            $data=[
                'status' => 201,
                'message' => "expense Deleted",
            ];
            header("HTTP:/1.0 201 Deleted");
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
?>