
<?php
echo "a";
require_once(dirname(__FILE__) . '/stripe.php');
echo "b";
$token = $_POST['stripeToken'];
echo "c";
$customer = Stripe_Customer::create(array(
    'email' => $email,
    'card' => $token
));
echo "d";

$charge = Stripe_Charge::create(array(
    'customer' => $customer->id,
    'amount' => 2000,
    'currency' => "cad"
));
echo "e";
?>