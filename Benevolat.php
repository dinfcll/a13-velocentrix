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

        $query = "SELECT * FROM Benevolat";
        $result = mysql_query($query);

        $row = mysql_fetch_array($result);

        ?>
        <div class="contenu border-radius">
            <div class="row-fluid">
                <div class="span5"><?php echo $row['Titre'].$row['Paragraphe'] ?>
                </div>
                <div class="span4">
                    <img src="img/benevolat.jpg"/>
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
