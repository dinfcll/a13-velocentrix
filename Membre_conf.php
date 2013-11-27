
<?php

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];

if($prenom && $nom && $email)
{
    echo('
            <h4>Pour effectuer le paiement, cliquez sur le bouton "Pay with card"</h4>
            </br></br>
            <form action="Membre.php" method="POST">
            <input type="hidden" value="yes" name="valid">
            <script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
            data-key="');
    echo $stripe['publishable_key'];
    echo('" data-description="Abonnement annuel"></script> </form>');


}

else
{
    header('Location: Membre.php');
}

require_once(dirname(__FILE__) . '/stripe.php');

$token = $_POST['stripeToken'];

$customer = Stripe_Customer::create(array(
    'email' => $email,
    'card' => $token
));


$charge = Stripe_Charge::create(array(
    'customer' => $customer->id,
    'amount' => 2000,
    'currency' => "cad"
));



?>