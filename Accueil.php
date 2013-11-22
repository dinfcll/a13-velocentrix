
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

            $query = "SELECT * FROM Accueil";
            $result = mysql_query($query);

            $row = mysql_fetch_array($result);

            ?>
            <div class="contenu border-radius">
		        <div class="row-fluid">
			        <div class="span5"><?php echo $row['Titre'].$row['Paragraphe'];?><h3>Bienvenue à VéloCentrix!</h3><p1>VéloCentrix est une entreprise d'économie sociale ayant pour mission de soutenir la culture du vélo urbain et utilitaire.<br/><br/> 						       Par des actions concrètes et des activités festives, l'organisme a comme objectif de faciliter l'accès au vélo pour tous dans la ville de Québec.<br/><br/>L'atelier 						       communautaire VéloCentrix existe pour offrir à tous les cyclistes les outils, le savoir, l'accès à un garage de mécanique-vélo et les conseils de mécanicien(s) 						       bénévole(s).</p1>
			        </div>
			        <div class="span4">

				        <div id="Carousel" class="carousel slide carousel-fade" data-ride="carousel">
					        <ol class="carousel-indicators">
						        <li class="active" data-slide-to="0" data-target="#Carousel" ></li>
						        <li class="" data-slide-to="1" data-target="#Carousel" ></li>
						        <li class="" data-slide-to="2" data-target="#Carousel" ></li>
						        <li class="" data-slide-to="3" data-target="#Carousel" ></li>
					        </ol>
				            <div class="carousel-inner">
					            <div class="item active"><img width="100%" class="border-radius" src="img/accueil.jpg"/></div>
					            <div class="item"><img width="100%" class="border-radius" src="img/image2.jpg"/></div>
					            <div class="item"><img width="100%" class="border-radius" src="img/image3.jpg"/></div>
					            <div class="item"><img width="100%" class="border-radius" src="img/image4.jpg"/></div>
				            </div>
		 		            <a class="carousel-control left" href="#Carousel" data-slide="prev">&lsaquo;</a>
		 		            <a class="carousel-control right" href="#Carousel" data-slide="next">&rsaquo;</a>
				        </div>

                    </div>

			        <div class="span3">
				        <div id="SideBarfirst">
					        <center><p1><font color="white">Actualités</font></p1></center>
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
                <div style="background-image: url('img/body11.png'); border-radius: 5px;padding-bottom: 20px">
                <div class="row-fluid">
                    <div class="span12">
                        <Center><h3>---- Nouvel Événement 36 Octobre 2019 ----</h3></center>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <center><p>Évenement à ne pas manquer.Velocentrix akfasdklfhdjkshghdfkghdfjkghdfjkghfdhgjkdf</p>
                        <a href="#"><button type="button" class="btn btn-primary"><i class="icon-road icon-large">Inscription</i></button></a>
                        </center>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <Center><h3>---- Nouvel Événement 59 Septembre 2019 ----</h3></center>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <center><p>Évenement à ne pas manquer.Velocentrix akfasdklfhdjkshghdfkghdfjkghdfjkghfdhgjkdf</p>
                        <a href="#"><button type="button" class="btn btn-primary"><i class="icon-road icon-large">Inscription</i></button></a>
                        </center>
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
    <script src="twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script>
    <script src="twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-transition.js"></script>
    <script>
        $('#Carousel').carousel();
    </script>

    </body>  
</html>


