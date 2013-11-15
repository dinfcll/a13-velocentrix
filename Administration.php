
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
            <div class="row-fluid">
                <div class="span12">
                        <textarea cols="80" id="editor1" name="editor1" rows="10">
                        </textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
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


