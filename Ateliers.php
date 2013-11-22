<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
<div id="wrap">
    <div class="container-fluid">
        <?php
        include("Header.html");
        ?>
        <?php
        $host = "localhost";
        $user = "equipe2";
        $password = "equipe2abc";
        $bd = "a13equipe2";

        mysql_connect($host,$user,$password) or die ("Impossible de se connecter");
        mysql_select_db($bd) or die ("Impossible de se connecter à la base de données");

        $query = "SELECT * FROM Ateliers";
        $result = mysql_query($query);

        $row = mysql_fetch_array($result);

        ?>
        <div class="contenu border-radius">
            <div class="row-fluid">
                <div class="span5"><?php echo $row['Titre'].$row['Paragraphe'] ?><h3>Ateliers du Mercredi et du Samedi</h3><p1>Vous souhaitez apprendre la base de la mécanique vélo ? Nous fournissons l'expertise et les outils sur place.

                        Il y a un atelier le mercredi, de 18 h à 21 h et le samedi de 10 à 13 h et ce sont des "ateliers libres" c'est-à-dire que vous faites l'entretien ou la réparation vous-même, mais on est là au besoin pour vous guider dans l'apprentissage. L'atelier communautaire VéloCentrix existe pour offrir à tous les cyclistes les outils, le savoir, l'accès à un garage de mécanique-vélo et les conseils de mécanicien(s) bénévole(s).

                        La façon de faire privilégiée par nos membres est d'apprendre en réparant "sur le tas", quoique que cela ne soit pas l'idéal, nécessité fait loi.

                        L'atelier vélo communautaire VéloCentrix est entièrement opéré par des bénévoles</p1>
                </div>
                <div class="span4">
                    <img src="img/Mécanique.jpg"/>
                </div>
                <div class="span3">
                    <div id="SideBarfirst">
                        <center><p1><font color="white">Ateliers</font></p1></center>
                    </div>
                    <p>Il y a du nouveau à Vélocentrix</p>
                    <p>Ceci est l'actualité, oui oui l'actualité</p>
                    <p>Quand on en rajoute</p>
                    <p>Pinpin et ponpon sont des pimpon</p>
                    <div id="SideBar">
                        <center><p1><font color="white">Été 2013</font></p1></center>
                    </div>

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
