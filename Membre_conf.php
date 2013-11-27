
<?php

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





?>