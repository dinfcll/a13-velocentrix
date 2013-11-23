<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
    <script src="ckeditor/ckeditor.js"></script>
    <link href="ckeditor/samples/sample.css" rel="stylesheet">



</head>
<body>
<div id="wrap">
    <div class="container-fluid">
        <?php
        include("Header.html");
        ?>
        <div class="contenu border-radius">
            <div class="row-fluid">

                <div class="span2">

                </div>

                <div class="span8">
                    <center>
                        <h1 style="color: #88a65e">Vous voulez nous proposer un événement?</h1>

                        <h4>Remplissez les informations ci-dessous et cliquez sur soumettre. Nous étudierons par la suite votre proposition. Merci!</h4>
                    </center>
                        <form action="Proposition.php" method="POST">
                            <center>
                                <h4>
                                    Prenom : <input style="height: 28" type="text" name="prenom">
                                    Nom : <input style="height: 28" type="text" name="nom">
                                </h4>
                                <h4> Courriel : <input style="height: 28; width:475px" type="text" name="email"></h4>
                                </br>
                            </center>

                            <h4>Sujet : <input style="height: 28" type="text" name="sujet"></h4>
                            <textarea cols="80" id="editor1" name="editor1" rows="10"></textarea>
                            <script>
                                CKEDITOR.replace( 'editor1' );
                            </script>
                            </br>
                            <p style="text-align: right"><input type="submit" class="btn btn-primary" value="Soumettre"></p>
                        </form>


                </div>

                <div class="span2">

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


