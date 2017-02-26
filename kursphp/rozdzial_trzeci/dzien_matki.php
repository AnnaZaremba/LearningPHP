<?php
/**
 * Stwórz funkcję, która zapisze do tablicy
 * dni tygodnia dziesięciu kolejnych dni matki (26.05),
 * a następnie zwróci tę tablicę
 */


function wypiszDzienTygodnia($data)
{
    $dniTygodnia = array('Niedziela', 'Poniedzialek', 'Wtorek', 'Sroda', 'Czwartek', 'Piatek', 'Sobota');
    return $dniTygodnia[date("w", mktime(0, 0, 0, $data['miesiac'], $data['dzien'], $data['rok']))] . "<br />";;
}

$data['dzien'] = 26;
$data['miesiac'] = 05;

for ($rok= 2017; $rok <= 2027; $rok++)
{
    $data['rok'] = $rok;
    echo "W roku " . $rok . " Dzien Matki przypada w " . wypiszDzienTygodnia($data);
}