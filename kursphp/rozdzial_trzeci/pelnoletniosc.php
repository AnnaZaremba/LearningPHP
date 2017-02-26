<html>
<head>
    <meta charset="UTF-8">

    <?php
    /**
     * Napisz skrypt sprawdzający pełnoletność użytkownika.
     * Odwiedzający wpisuje swoją datę urodzenia i w zależności od obliczonego wieku
     * wyświetla się stosowny komunikat.
     */

    //    568080000 Sekund
    //    9468000 Minut
    //    157800 Godzin
    //    6575 Dni
    //    939 Tygodnie, 2 Dni
    //    216 Miesięcy
    //    18 Lata

    function CzyPelnoletni($data)
    {
        $czas = (time() - mktime(0, 0, 0, $data['miesiac'], $data['dzien'], $data['rok'])) / 60 / 60 / 24;
        return $czas;
    }

    $data['dzien'] = $_GET['dzien'];
    $data['miesiac'] = $_GET['miesiac'];
    $data['rok'] = $_GET['rok'];

    $wiek = CzyPelnoletni($data);

    if ($wiek < 6575) {
        echo "Niepełnoletni";
    } else
        echo "Pełnoletni";

    ?>
</head>
</html>
