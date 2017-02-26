<?php
include_once 'WyswietlenieTabeliZBazyDanych.php';
?>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='../style.css'/>
    <!--polskie znaki-->
    <meta charset="UTF-8">
</head>
<body>

<?php
$wyswietl = new WyswietlenieTabeliZBazyDanych();
$html = $wyswietl->wyswietl("Dane alfabetycznie wg imienia", "imie");
$html .= $wyswietl->wyswietl("Dane od najmłodszego do najstarszego", "wiek");

echo "<div>$html</div>";
?>

<?php
//$conn = pg_connect("host=localhost port=5432 dbname=wandzia user=postgres") or die('Brak połączenia z serwerem');
//$query = "SELECT * FROM testowa";
//$rs = pg_query($conn, $query) or die("Nie można połączyć się z bazą danych");
//
//while ($row = pg_fetch_row($rs)) {
//    echo "$row[0] $row[1] $row[2]\n";
//}
//
//pg_close($conn);
//
//
?>

<!--<table border="2">-->
<!--    <caption>Dane alfabetycznie wg imienia</caption>-->
<!--    <tr>-->
<!--        <td>Imię</td>-->
<!--        <td>Nazwisko</td>-->
<!--        <td>Wiek</td>-->
<!--    </tr>-->

<!--    --><?php
//    $query = "SELECT * FROM testowa ORDER by imie";
//    $rs = pg_query($conn, $query) or die("Nie można połączyć się z bazą danych");
//
//    while ($row = pg_fetch_row($rs)) {
//        echo "<tr>";
//        echo "<td>$row[0]\n</td> <td>$row[1]\n</td> <td>$row[2]\n</td>";
//        echo "</tr>";
//    }
//    ?>

<!--</table>-->

<!--<table border="2">-->
<!--    <caption>Dane od najmłodszego do najstarszego</caption>-->
<!--    <tr>-->
<!--        <td>Imię</td>-->
<!--        <td>Nazwisko</td>-->
<!--        <td>Wiek</td>-->
<!--    </tr>-->
<!--</table>-->
</body>
</html>

