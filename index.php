<?php

require_once 'app/init.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
<div class="container center-align">
    
    <?php if($user->premium): ?>
        <p class="flow-text">You already have a membership.</p>
    <?php else: ?>
    <p class="flow-text">You doesn't have a membership. <a href="premium.php">Get a membership.</a></p>
    <?php endif; ?>
   
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>