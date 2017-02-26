<?php

/*
 * Napisanie funkcji, która na podstawie wpisanej daty urodzin wyświetli,
 * jaki był to dzień tygodnia. Napiszemy również drugą funkcję, zwracającą ilość dni,
 * które upłynęły od danej daty.
 * Data przekazywana będzie w postaci tablicy ze zdefiniowanymi indeksami.
 */

function wypiszDzienTygodnia($data)
{
//    echo date("l", mktime(0, 0, 0, $data['miesiac'],
//        $data['dzien'], $data['rok']));

    $dniTygodnia = array('Niedziela', 'Poniedzialek', 'Wtorek', 'Sroda', 'Czwartek', 'Piatek', 'Sobota');
    echo $dniTygodnia[date("w", mktime(0, 0, 0, $data['miesiac'], $data['dzien'], $data['rok']))] . "<br />";;
}

function obliczDni($data)
{
    // 60 sekund, 60 minut, 24 godziny
    $czas = (time() - mktime(0, 0, 0, $data['miesiac'], $data['dzien'], $data['rok'])) / 60 / 60 / 24;
    return $czas;
}

$data['dzien'] = $_GET['dzien'];
$data['miesiac'] = $_GET['miesiac'];
$data['rok'] = $_GET['rok'];

wypiszDzienTygodnia($data);

echo obliczDni($data);
