<?php
require_once 'app/init.php';

if($user->premium){
    header('Location: index.php');
    exit();
}

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

    <p class="flow-text">Press the button and get your membership!</p>
  <form action="premium_charge.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $stripe['publishable']; ?>"
    data-amount="1000"
    data-name="Demo Site"
    data-description="Premium membership"
    data-currency="gbp"
    data-email="<?php echo $user->email; ?>""
    data-locale="auto">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </script>
  </form>
</div>
</body>
</html>