<?php

require_once 'app/init.php';

if(isset($_POST['stripeToken'])){

    $token = $_POST['stripeToken'];

try{
    \Stripe\Charge::create([
        "amount" => 1000,
        "currency" => "gbp",
        "source" => "$token", // obtained with Stripe.js
        "description" => $user->email
      ]);

        $db->query("
        UPDATE users
        SET premium = 1
        WHERE id = {$user->id}
        ");

}catch(Stripe_CardError $e) {
    // Do something with the error
}
header('Location: index.php');
exit();
}