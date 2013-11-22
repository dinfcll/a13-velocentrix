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
                <div class="span12">
                    <center>
                        <h1 style="color: #88a65e">Authentification pour la section d'administration</h1>
                        </br>
                        <form action="Administration.php" method="POST">
                            <b><p>Nom d'utilisateur : </p></b>
                            <input style="height: 30px" type="text" name="user" size="40">
                            <b><p>Mot de passe : </p></b>
                            <input style="height: 30px" type="text" name="password" size="40">
                            </br>
                            <input class="btn btn-primary" type="submit" value="Entrer">
                        </form>
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


