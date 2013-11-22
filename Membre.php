<?php require_once('./stripe.php'); ?>

<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>



</head>
<body>
<div id="wrap">
    <div class="container-fluid">
        <?php
        include("Header.html");
        ?>
        <div class="contenu border-radius">
            <div class="row-fluid">
                <div class="span6">
                    <center>
                        <h2 style="color: #88a65e">Devenir membre vous intéresse?</h2>
                        </br>
                        <h4>Le prix de l'abonnement annuel est de 20$</h4>
                        <h4>Pour devenir membre, il suffit de remplir le formulaire suivant et de cliquer sur "Pay with card"
                            pour complèter le paiement de l'abonnement.</h4>
                        </br>

                        <form action="Membre.php" method="post">
                            <b><h4>Prénom</h4></b>
                            <input style="height: 30px" type="text" name="prenom" id="asdf" size = "40">
                            <b><h4>Nom</b></h4>
                            <input style="height: 30px" type="text" name="nom" size="40">
                            <b><h4>Adresse email</h4></b>
                            <input style="height: 30px" type = "text" name="email" size="40">
                            </br></br>
                            <script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
                                    data-key="<?php echo $stripe['publishable_key']; ?>"
                                    data-description="Abonnement annuel"></script>

                        </form>
                        <p style="color: red;">***Tous les champs sont obligatoire***</p>
                    </center>

                    <?php


                    ?>

                </div>

                <div class="span6">
                    <center>
                        <h2 style="color: #88a65e">Les avantages d'être membre de Vélocentrix</h2>
                        </br>
                        <h4>Des prix réduits sur les activités organisée pas Vélocentrix</h4>
                        <h1 style="color: #88a65e">_______________</h1>
                        </br>
                        <h4>L'accès à l'atelier gratuitement durant les heures d'ouvertures</h4>
                        <h1 style="color: #88a65e">_______________</h1>
                        </br>
                        <h4>Des rabais de 10% dans la boutique Louis Garneau</h4>
                    </center>
                </div>

                <div class="span12">
                    <center>
                        <?php
                            if (isset($_POST['email']) && isset($_POST['prenom']) && isset($_POST['nom']))
                            {

                                require_once(dirname(__FILE__) . '/stripe.php');

                                $token = $_POST['stripeToken'];

                                $customer = Stripe_Customer::create(array(
                                    'email' => $_POST['email'],
                                    'card' => $token
                                ));

                                $charge = Stripe_Charge::create(array(
                                    'customer' => $customer->id,
                                    'amount' => 2000,
                                    'currency' => 'cad'
                                ));

//                                $email = $_POST['email'];
//                                $message = 'Bonjour, votre abonnement a fonctionné.';
//
//                                mail($email,'Abonnement à Vélocentrix',$message);


                                echo '<h4>Votre abonnement à été complété avec succès avec les informations suivantes : </h4>';
                                echo '<h4>Prénom : '.$_POST['prenom'].'</h4>';
                                echo '<h4>Nom : '.$_POST['nom'].'</h4>';
                                echo '<h4>Adresse email : '.$_POST['email'].'</h4>';
//                                echo '<h4>Un email de confirmation de votre abonnement vous a été envoyé à votre adresse email.</h4>';
                                echo '<h4>Merci!</h4>';

                            }

                            else
                            {

                            }
                        ?>
                    </center>
                </div>

            </div>
        </div>

    </div>
    <div id="push"></div>
</div>
<?php
include("Footer.html")
?>
</body>
</html>


