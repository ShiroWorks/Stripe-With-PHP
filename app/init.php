<?php

session_start();

require_once 'vendor/autoload.php';

$stripe = [
    'publishable' =>'your public key',
    'private' => 'your private key'
];

\Stripe\Stripe::setApiKey($stripe['private']);

$_SESSION['user_id'] = 2;

$db = new PDO('mysql:host=127.0.0.1;dbname=payments', 'root', '');

$userQuery = $db->prepare("SELECT id, username, email, premium
FROM users
WHERE id = :user_id

");

$userQuery->execute(['user_id' => $_SESSION['user_id']]);

$user = $userQuery->fetchObject();

