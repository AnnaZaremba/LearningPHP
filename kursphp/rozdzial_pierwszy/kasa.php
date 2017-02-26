<?php

$kwota_za_zamowione_towary = $_POST['kwota_za_zamowione_towary'];
$wartosc_brutto_zamowionych_towarow = $_POST['wartosc_brutto_zamowionych_towarow'];

$reszta = $kwota_za_zamowione_towary - $wartosc_brutto_zamowionych_towarow;
?>

<html>
<head>
    <title>Kasa</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
echo "Wartość brutto zakupionych towarów: " . $wartosc_brutto_zamowionych_towarow . "<br/>";
echo "Wpłacona kwota: " . $kwota_za_zamowione_towary .  "<br/>";
echo "Reszta: " . $reszta .  "<br/>";
?>

</body>
</html>
