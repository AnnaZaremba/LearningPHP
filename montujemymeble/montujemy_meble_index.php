<?php
$add_site = true;
?>
<html>

<head>
    <title>Montujemy meble</title>
    <meta charset="UTF-8">
    <style type="text/css">
        body {
            font-family: Verdana, Arial;
            font-size: 12px;
        }
    </style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td width="100%" colspan="3"><?php include "include/naglowek.php"; ?></td>
    </tr>
    <tr>
        <td width="15%" valign="top"><?php include "include/menu_lewe.php"; ?></td>
        <td width="70%" valign="top">
            <?php
            $go = $_GET['go'];

            if(!empty($go)) {
                if(is_file("page/$go.php")) include "page/$go.php";
                else echo "<br />Nie ma takiej strony :-(";
            }
            else include "page/start.php";

            ?>
        </td>
    </tr>
    <tr>
        <td width="100%" colspan="3"><?php include "include/stopka.php"; ?></td>
    </tr>
</table>
</body>
</html>