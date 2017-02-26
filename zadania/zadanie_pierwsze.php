<html>
<head>
    <title>Zadanie pierwsze</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="post" action="zadanie_pierwsze.php">

    <div>imie:</div>
    <div><input type="text" name="imie" value="<?php if (isset($_POST['imie'])) {
            echo $_POST['imie'];
        } ?>"></div>
    <div>nazwisko:</div>
    <div><input type="text" name="nazwisko" value="<?php if (isset($_POST['nazwisko'])) {
            echo $_POST['nazwisko'];
        } ?>"></div>
    <div>wiek:</div>
    <div><input type="number" name="wiek" value="<?php if (isset($_POST['wiek'])) {
            echo $_POST['wiek'];
        } ?>"></div>
    <div><input type="submit" value="zapisz"></div>
</form>

</body>
</html>

<?php
// jeżeli istnieje zmienna to sprawdza
if (isset($_POST['imie'])) {
    $imie = $_POST['imie'];
    if ($imie == "") {
        echo "<div>Podaj swoje imię!</div>";
        return;
    }
}

if (isset($_POST['nazwisko'])) {
    $nazwisko = $_POST['nazwisko'];
    if ($nazwisko == "") {
        echo "<div>Podaj swoje nazwisko!</div>";
        return;
    }
}

if (isset($_POST['wiek'])) {
    $wiek = $_POST['wiek'];
    if ($wiek == "") {
        echo "<div>Podaj swój wiek!</div>";
        return;
    }

    if (!is_numeric($wiek)) {
        echo "<div>Wiek nie jest liczbą naturalną</div>";
        return;
    }
}

// zapisujemy dane z formularza do tabeli

//$conn = pg_connect("host=localhost port=5432 dbname=wandzia user=postgres") or die('Brak połączenia z serwerem');
//if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['wiek'])) {
//    $imie = $_POST['imie'];
//    $nazwisko = $_POST['nazwisko'];
//    $wiek = $_POST['wiek'];
//    $query = "insert into testowa values('$imie','$nazwisko','$wiek');";
//    $result = pg_query($conn, $query);
//}

include_once 'ZapisDoBazyDanych.php'; // pobiera klase

if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['wiek'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];

    $zapis = new ZapisDoBazyDanych();
    $zapis->zapisz($imie, $nazwisko, $wiek);
}
