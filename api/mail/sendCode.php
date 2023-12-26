<?php
require_once "../config/conn.php";
use PHPMailer\PHPMailer\PHPMailer;


function sendCode($email)
{
    global $conn;
    $randomCode = rand(1000, 9999);
    $selectquery = "select * from forget_password where email='$email'";
    $resquery = mysqli_query($conn, $selectquery);
    if (mysqli_num_rows($resquery)) {
        $updatequery = "update forget_password set code=$randomCode where email='$email'";
        $updatedRes = mysqli_query($conn, $updatequery);
    } else {
        $sql = "insert into forget_password values (NULL,'$email',$randomCode)";
        $result = mysqli_query($conn, $sql);
    }

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = "smtp.gmail.com"; // host name
    $mail->SMTPAuth = true;
    $mail->Username = "khurram.akram43@gmail.com";
    $mail->Password = 'abhokbcfgvvftutg';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->isHTML(true);
    $mail->setFrom('Khurram.akram43@gmail.com', 'Brown Munde'); //from email
    $mail->addAddress('khurram.akram43@gmail.com');
    $mail->Subject = ("Code");
    $mail->Body = "Your Code is :$randomCode";

    if($mail->send()){
        // $status = "success";
        // $response = "Email is sent!";
      return true;
    }
        else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
        return (json_encode($response));
    }
}

// sendCode("khurram.akram39@gmail.com");
// Output the generated code




?>