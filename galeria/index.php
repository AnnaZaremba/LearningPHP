<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Anna Zaremba">
    <meta name="author" content="Anna Zaremba">
    <title>Galeria</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="../galeria/example/lightbox/lightbox.js"></script>
    <link rel="stylesheet" href="../galeria/example/lightbox/lightbox.css" type="text/css">
    <link rel="stylesheet" href="../galeria/example/style.css" type="text/css">
</head>
<body>
<div id="gallery">
    <?php
    require_once('gallery.php');
    images_list('<a href="../galeria/example/images/Girl.jpg" class="thumbnail"> <img src="../galeria/example/images/Buzzard.jpg" /></a>' .
        '<a href="../galeria/example/images/Buzzard.jpg" class="thumbnail"> <img src="../galeria/example/images/Girl.jpg" /></a>')

    ?>
<!--    <div id="pagination">-->
<!--        --><?php //images_pagination('<strong>{NUMBER}</strong>','<a href="../galeria/example/images/Girl.jpg">{NUMBER}</a>'); ?>
<!--    </div>-->
</div>
</body>
</html>