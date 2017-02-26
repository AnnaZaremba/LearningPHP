<?php
// przykładowy ciąg znaków
$wyswietl = "bardzo lubie placki";

// użycie funkcji strlen()
$ilosc = strlen($wyswietl);

if ($ilosc > 20)
    echo "Tresc dłuższa niż 20 znakow.";
else
    echo "Tresc zawiera 20 znakow lub mniej.";