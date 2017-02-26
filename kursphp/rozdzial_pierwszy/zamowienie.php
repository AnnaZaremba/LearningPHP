<html>
<head>
    <title>Obsługa zamówienia</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
define("KOSZULKA", 14.99);
define("SPODNIE", 45.99);
define("CZAPKA", 9.63);
define("BUTY", 55.39);
define("P_VAT", 0.23);

$ile_koszulki = $_POST['koszulki'];
$ile_spodnie = $_POST['spodnie'];
$ile_czapki = $_POST['czapki'];
$ile_buty = $_POST['buty'];

$kwota_koszulki_netto = $ile_koszulki * KOSZULKA;
$kwota_spodnie_netto = $ile_spodnie * SPODNIE;
$kwota_czapki_netto = $ile_czapki * CZAPKA;
$kwota_buty_netto = $ile_buty * BUTY;

$kwota_zamowienia_netto = $kwota_koszulki_netto + $kwota_spodnie_netto + $kwota_czapki_netto + $kwota_buty_netto;

$kwota_koszulki_brutto = $kwota_koszulki_netto + $kwota_koszulki_netto * P_VAT;
$kwota_spodnie_brutto = $kwota_spodnie_netto + $kwota_spodnie_netto * P_VAT;
$kwota_czapki_brutto = $kwota_czapki_netto + $kwota_czapki_netto * P_VAT;
$kwota_buty_brutto = $kwota_buty_netto + $kwota_buty_netto * P_VAT;

$kwota_zamowienia_brutto = $kwota_koszulki_brutto + $kwota_spodnie_brutto + $kwota_czapki_brutto + $kwota_buty_brutto;


echo "Cena netto zamówionych koszulek: " . $kwota_koszulki_netto . "<br/>";
echo "Cena netto zamówionych spodni: " . $kwota_spodnie_netto . "<br/>";
echo "Cena netto zamówionych czapek: " . $kwota_czapki_netto . "<br/>";
echo "Cena netto zamówionych butów: " . $kwota_buty_netto . "<br/><br/>";

echo "Wartość netto całego zamówienia: " . $kwota_zamowienia_netto . "<br/><br/>";

echo "Cena brutto zamówionych koszulek: " . $kwota_koszulki_brutto . "<br/>";
echo "Cena brutto zamówionych spodni: " . $kwota_spodnie_brutto . "<br/>";
echo "Cena brutto zamówionych czapek: " . $kwota_czapki_brutto . "<br/>";
echo "Cena brutto zamówionyh butów: " . $kwota_buty_brutto . "<br/><br/>";

echo "Wartość brutto całego zamówienia: " . $kwota_zamowienia_brutto . "<br/><br/>";

?>

<form action="kasa.php" method="post">
    Kwota za zamówione towary: <input type="text" name="kwota_za_zamowione_towary" size="3">
    <input type="hidden" name="wartosc_brutto_zamowionych_towarow" value="<?= $kwota_zamowienia_brutto ?>">
    <input type="submit" value="do kasy"/> <br>
</form>

</body>
</html>