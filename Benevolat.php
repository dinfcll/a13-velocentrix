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
                <div class="span9">
                    <div class="span9"><?php echo $row['Titre'].$row['Paragraphe'] ?>
                    </div>
                </div>
                <div class="span3">
                    <center><img width="100%" src="img/Benevolat.jpg"/></center>
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
