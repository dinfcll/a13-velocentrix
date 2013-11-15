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
        <div class="contenu border-radius">
            <div class="row-fluid">
                <div class="span5"><h3>Ateliers du Mercredi et du Samedi</h3><p1>Vous souhaitez apprendre la base de la mécanique vélo ? Nous fournissons l'expertise et les outils sur place.

                        Il y a un atelier le mercredi, de 18 h à 21 h et le samedi de 10 à 13 h et ce sont des "ateliers libres" c'est-à-dire que vous faites l'entretien ou la réparation vous-même, mais on est là au besoin pour vous guider dans l'apprentissage. L'atelier communautaire VéloCentrix existe pour offrir à tous les cyclistes les outils, le savoir, l'accès à un garage de mécanique-vélo et les conseils de mécanicien(s) bénévole(s).

                        La façon de faire privilégiée par nos membres est d'apprendre en réparant "sur le tas", quoique que cela ne soit pas l'idéal, nécessité fait loi.

                        L'atelier vélo communautaire VéloCentrix est entièrement opéré par des bénévoles</p1>
                </div>
                <div class="span4">
                    <div id="Carousel" class="carousel slide carousel-fade">
                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li>
                            <li data-target="#Carousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="active item"><img width="100%" src="img/Mécanique.jpg"/></div>
                        </div>
                        <a class="carousel-control left" href="#Carousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#Carousel" data-slide="next">&rsaquo;</a>
                    </div>
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
<script src="twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>
<script src="twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script>
<script src="twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-transition.js"></script>
<script>
    $('#Carousel').carousel({ interval: 3000 })
</script>

</body>
</html>
