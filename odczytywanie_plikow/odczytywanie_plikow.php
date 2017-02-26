<html>
<head>
    <title>Odczytywanie plików</title>
    <link type='text/css' rel='stylesheet' href='../style.css'/>
    <!--polskie znaki-->
    <meta charset="UTF-8">
</head>
<body>

<?php

//$plik = implode('', file('plik_tekstowy.txt'));

//$plik = fopen('plik_tekstowy.txt', 'r');
//$linia_z_pliku = fgets($plik, 100);
//
//echo $linia_z_pliku;

$handle = @fopen("plik_tekstowy.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        echo "$buffer <br />";
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}