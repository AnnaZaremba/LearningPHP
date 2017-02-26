<html>
<head>
    <meta charset="UTF-8">
    <title>Wpisz datę urodzenia</title>
</head>
<body>

<form action="oblicz.php" metod="get">
    Wpisz dzień: <input type="text" name="dzien"/><br/>
    Miesiąc: <input type="text" name="miesiac"/><br/>
    Rok: <input type="text" name="rok"/><br/>
    <input type="submit" value="OK"/><br/>
</form>

<form action="pelnoletniosc.php" metod="get">
    Wpisz dzień: <input type="text" name="dzien"/><br/>
    Miesiąc: <input type="text" name="miesiac"/><br/>
    Rok: <input type="text" name="rok"/><br/>
    <input type="submit" value="Pełnoletniość"/><br/>
</form>

</body>
</html>