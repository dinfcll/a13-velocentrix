
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
            <?php
            echo "<center><h3>".$_POST['Query']."</h3></center>";
            echo "<div class='row-fluid'>";
                if($_POST['Query'])
                {
                    echo "<div class='span4'>";
                    echo "<h5>Titre</h5>";
                       echo "<textarea cols='80' id='editor1' name='editor1' rows='10'>";
                        echo "</textarea>";
                        echo "<script>";
                echo "CKEDITOR.replace( 'editor1' );";
                        echo "</script>";
                echo "</div>";
                    echo "<div class='span5'>";
                    echo "<h5>Paragraphe</h5>";
                    echo "<textarea cols='80' id='editor2' name='editor2' rows='10'>";
                    echo "</textarea>";
                    echo "<script>";
                    echo "CKEDITOR.replace( 'editor2' );";
                    echo "</script>";
                    echo "</div>";
                }
                else{
                    echo "<div class='span9'>
                    <h3>Bienvenue dans la section administration</h3>
                    <p>Pour commencer,choisissez le contenue à modifier ----------></p><br/>
                    <center><img src='img/administration.jpg'/></center>
                </div>";
                }
                ?>

                <div class="span3">
                    <div id="SideBarfirst">
                        <center><p1><font color="white">Pages modifiables</font></p1></center>
                    </div>
                    <ul>
                        <li><form action="Administration.php" method="POST"><input  type="hidden" name="Query" value="Accueil"/><input id="boutonadmin" type="submit" name="Accueil" value="Accueil"/></form></li><br/>
                        <li><form action="Administration.php" method="POST"><input  type="hidden" name="Query" value="Atelier"/><input id="boutonadmin" type="submit" name="Atelier" value="Atelier de vélo"/></form></li><br/>
                        <li><form action="Administration.php" method="POST"><input  type="hidden" name="Query" value="Informations"/><input id="boutonadmin" type="submit" name="Informations" value="Informations"/></form></li><br/>
                        <li><form action="Administration.php" method="POST"><input  type="hidden" name="Query" value="Footer"/><input id="boutonadmin" type="submit" name="Footer" value="Footer"/></form></li>
                    </ul>

                    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
                    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
                    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
                    <a class="fancybox" rel="group" href="img/administration.jpg"><img src="img/administration.jpg" alt="" /></a>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $(".fancybox").fancybox();
                        });
                    </script>

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


