

<form method="post" action="/kalkulator/kalkulator_klasa.php">

    <div><input type="submit" value="kalkulator_klasa"></div>

</form>

<form method="post" action="/kalkulator/kalkulator_test.php">

    <div><input type="submit" value="kalkulator_test"></div>

</form>



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

if(isset($_POST['liczba_1'])) {
    $liczba_1 = $_POST['liczba_1'];
    $liczba_2 = $_POST['liczba_2'];
    $znak = $_POST['znak'];
    $wynik = "";

    switch ($znak) {
        case "+":
            $wynik = $liczba_1 + $liczba_2;
            break;
        case "-":
            $wynik = $liczba_1 - $liczba_2;
            break;
        case "*":
            $wynik = $liczba_1 * $liczba_2;
            break;
        case "/":
            $wynik = $liczba_1 / $liczba_2;
            break;
    }
    echo $liczba_1, $znak, $liczba_2, "=", $wynik;
}
?>
</body>
</head>
</html>

