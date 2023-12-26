
<?php
require_once "../config/conn.php";
require_once "../mail/sendCode.php";
function CreateCode($data){
    global $conn;
    $email=mysqli_real_escape_string($conn,$data['email']);
    $sendCode=sendCode($email);
    if($sendCode){
        $data=[
            'status' => 201,
            'message' => "code send",
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

function verifyCode($data){
    global $conn;
    $email=mysqli_real_escape_string($conn,$data['email']);
    $code=mysqli_real_escape_string($conn,$data['code']);
    
    $sql="select * from forget_password where email='$email' And code = $code";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            resetCode($row[1]);
            $data=[
                'status' => 201,
                'message' => "Data Fetched",
                'email' =>$row[1],
                ];
            header("HTTP:/1.0 201 created");
            return json_encode($data);
        
            
        }
        
    
    }
    else{
        $data=[
            'status' => 500,
            'message' => "No Data Fetched",
        ];
        header("HTTP:/1.0 500 created");
        return json_encode($data);
      
    }

}


function changPassword($data){
    global $conn;
    $email=mysqli_real_escape_string($conn,$data['email']);
    $pswd=mysqli_real_escape_string($conn,$data['pswd']);
    
    $sql="update users set password='$pswd' where email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $data=[
            'status' => 201,
            'message' => "Password Updated",
            ];
        header("HTTP:/1.0 201 updated");
        return json_encode($data);
    
    }
    else{
        $data=[
            'status' => 500,
            'message' => "error ",
            ];
        header("HTTP:/1.0 201 error");
        return json_encode($data);
      
    }
}
function resetCode($email){
    global $conn;
    $sql="update forget_password set code=0 where email = '$email'";
    $res=mysqli_query($conn,$sql);
}

?>