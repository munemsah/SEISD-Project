<?php
require('config.php');

if(isset($_POST['stripeToken'])){
    \Stripe\Stripe::setVerifySslCerts(false);

    $token=$_POST['stripeToken'];

    $data=\stripe\Charge::create(array(
        "amount"=>10000,
        "currency"=>"BDT",
        "description"=>"Donate for Poor",
        "source"=>$token,
    ));
    echo "<pre>";
    print_r($data);

    $tx_id=$data['id'];
}


?>