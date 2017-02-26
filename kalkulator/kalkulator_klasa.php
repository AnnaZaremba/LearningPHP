<form method="POST" action="">

    <div>liczba_1:</div>
    <div><input type="number" name="liczba_1" value="0"></div>

    <div>
        <select name="znak">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
    </div>

    <div>liczba_2:</div>
    <div><input type="number" name="liczba_2" value="0"></div>

    <div><input type="submit" value="oblicz"></div>

</form>

<?php
include_once 'kalkulator_class.php'; // pobiera klase

if (isset($_POST['liczba_1'])) {
    $liczba_1 = $_POST['liczba_1'];
    $liczba_2 = $_POST['liczba_2'];
    $znak = $_POST['znak'];

    $kalkulator = new Kalkulator();
    $wynik = $kalkulator->oblicz($liczba_1, $liczba_2, $znak);

    echo $liczba_1 . $znak . $liczba_2 . "=" . $wynik;
}

