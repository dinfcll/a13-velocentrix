<?php require_once('./stripe.php'); ?>

    <html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
                            <?php

                            $prenom = $_POST['prenom'];
                            $nom = $_POST['nom'];
                            $email = $_POST['email'];

                            echo('
                                      <h4>Cliquez sur le bouton "Pay with card" pour effectuer le paiement</h4>
                                      </br>
                                      <form action="Membre.php" method="post">
                                      <input type="hidden" name="valid" value="yes">
                                      <script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
                                      data-key="'
                                );
                            echo $stripe['publishable_key'];
                            echo('    " data-description="Abonnement annuel"></script>
                                      </form>
                                ');
                            ?>
                        </center>

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
                </div>
            </div>
            l
        </div>
        <div id="push"></div>
    </div>
    <?php
    include("Footer.php")
    ?>
    </body>
    </html>

