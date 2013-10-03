
    <html>
    <head>   
    <meta charset="utf-8">     
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">   
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>  
    <body>
	<?php
		include("Header.html");
	?>
<div class="container-fluid">
		<div class="row-fluid">
			<div class="span5"><h3>Bienvenue à VéloCentrix!</h3><p1>VéloCentrix est une entreprise d'économie sociale ayant pour mission de soutenir la culture du vélo urbain et utilitaire.<br/><br/> 						       Par des actions concrètes et des activités festives, l'organisme a comme objectif de faciliter l'accès au vélo pour tous dans la ville de Québec.<br/><br/>L'atelier 						       communautaire VéloCentrix existe pour offrir à tous les cyclistes les outils, le savoir, l'accès à un garage de mécanique-vélo et les conseils de mécanicien(s) 						       bénévole(s).</p1>
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
					<div class="active item"><img width="100%" src="img/accueil.jpg"/></div>
					<div class="item"><img width="100%" class="border-radius" src="img/image2.jpg"/></div>
					<div class="item"><img width="100%" class="border-radius" src="img/image3.jpg"/></div>
					<div class="item"><img width="100%" class="border-radius" src="img/image4.jpg"/></div>
				</div>
		 		<a class="carousel-control left" href="#Carousel" data-slide="prev">&lsaquo;</a>
		 		<a class="carousel-control right" href="#Carousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>
			<div class="span3">
				<div id="SideBar">
					<center><p1><font color="white">Actualités</font></p1></center>
				</div>
			</div>
		</div>
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


