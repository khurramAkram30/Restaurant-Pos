<?php
require "../config/conn.php";
require_once "../stripe-php/init.php";
// $stripeToken = $_POST['stripeToken'];

function paymentStripe($userID, $orderID, $token,$amount)
{
    global $conn;
    $query = "select * from users where id = $userID ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // print_r($row);

        // set API Key
        $stripe = array(
        "SecretKey"=>"sk_test_51NuUFzDgVxQRS4HbSuZUqzf40GLEdXesQkgIrivOFhnWHUQMj8ldZ2t0SoN0ItsdfLsvSBDBBE2dpFbSwMlgFDDU00k1p81pEs",
        "PublishableKey"=>"pk_test_51NuUFzDgVxQRS4HbcB17j2prKLxa1wzaKevVlyknHR9D1V0RfQf1EtStSSLgYQ0KHeNfDnmahBG411DU1UmgkX3z00IEnzjizz"
        );

        \Stripe\Stripe::setApiKey($stripe['SecretKey']);

        // Add customer to stripe 
        $customer = \Stripe\Customer::create(array( 
            'email' => $row['email'], 
            'source'  => $token,
            'name' => $row['firstName'],
            'description'=> $row['email'],
        ));
     
       
        // Charge a credit or a debit card 
        $charge = \Stripe\Charge::create(array( 
            'customer' => $customer->id, 
            'amount'   => $amount, 
            'currency' => 'eur', 
            'description' => "testing", 
            'metadata' => array( 
            'order_id' => $orderID 
            ) 
        ));

            $chargeJson = $charge->jsonSerialize();

            return $chargeJson;



    }
}

?>