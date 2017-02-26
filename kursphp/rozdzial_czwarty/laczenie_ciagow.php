<html>
<head>
    <title>Łączenie ciągów</title>
    <meta charset="UTF-8">

</head>
<body>

<?php

// OPERATOR ŁĄCZENIA .=  łączy ciąg z prawej oraz lewej strony w jeden

$wyswietl = "Bardzo";
$wyswietl .= " lubię";
$wyswietl .= " placki.";

echo $wyswietl . "<br/>";

echo 'Moje motto to: "' . $wyswietl . '"' . "<br/>" . "<br/>";


// Można również łączyć wiele stringów w jednej linijce i przypisać je do jednej zmiennej

$string1 = " z sosem.";
$wyswietl = "Bardzo" . " lubię" . " placki" . $string1;

// polecenie wyświetli napis:
// "Bardzo lubię placki z sosem."
echo $wyswietl . "<br/>";

// wyświetli napis:
// Moje motto to: "Bardzo lubię placki."
echo 'Moje motto to: "' . $wyswietl . '"' . "<br/>" . "<br/>";

// Funkcja implode() łączy zbiór ciągów, przekazany w postaci tablicy PHP, w jeden, podzielony łącznikiem.
// Przyjmuje dwa argumenty, w tym jeden opcjonalny. Jako pierwszy podajemy element łączący
// – domyślnie jest to pusty ciąg.
// Drugim argumentem jest tablica ciągów, którą chcemy połączyć.
// Wartość zwracana to ciąg znaków składający się z elementów tablicy,
// przedzielonych łącznikiem

$data[0] = "18";
$data[1] = "07";
$data[2] = "1976";
$wyswietl_date = implode(" - ", $data);

// wyświetli "18 - 07 - 1976"
echo $wyswietl_date;

?>
</body>
</html>
