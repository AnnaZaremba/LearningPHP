<?php
include_once 'kalkulator_class.php';

$kalkulator = new Kalkulator();

$wynik = $kalkulator->oblicz(1, 2, "+");
if ($wynik != 3) {
    echo "Błąd!!!!!";
}

$wynik = $kalkulator->oblicz(1, 2, "-");
if ($wynik != -1) {
    echo "Błąd!!!!!";
}

$wynik = $kalkulator->oblicz(2, 2, "*");
if ($wynik == 4) {
    echo "Dziala";
}