<html>
<head>
    <title>Liczby losowe</title>
    <meta charset="UTF-8">

</head>
<body>

<?php

echo rand() . "<br/>";
?>
<br>
Wyświetlenie się na ekranie liczby z przedziału od 0 do getrandmax() –
zdefiniowanego maksimum. <br> Dla systemów z rodziny Windows wynosi ono 32768,
natomiast w systemach Unixowych 2147483647
<br><br>

<?php
$i = rand(15, 30);

echo "Wylosowana liczba z zakresu (15 - 30) to $i";

?>

</body>
</html>
