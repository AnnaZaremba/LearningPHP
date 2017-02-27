<html>
<head>
    <title>Zadania</title>
    <meta charset="UTF-8">
</head>
<body>

<form method="post" action="zadanie_pierwsze.php">
    <div><input type="submit" value="zadanie_pierwsze"></div>

</form>

<form method="post" action="zadanie_drugie.php">
    <div><input type="submit" value="zadanie_drugie"></div>

</form>

<form method="post" action="zadanie_trzecie.php">
    <div><input type="submit" value="zadanie_trzecie"></div>

</form>

</body>


1. Utwórz w bazie danych "baza" tabele o nazwie "testowa" z polami: <br>
imie - varchar 55 <br>
nazwisko - varchar 155 <br>
wiek - int <br>
Następnie: napisz formularz z polami: <br>
- imię <br>
- nazwisko <br>
- wiek <br> <br>

Przefiltruj dane, czy pola zostały uzupełnione, oraz czy pole wiek zawiera liczbę naturalną. <br>
Zapisz te dane do tabeli w bazie danych "baza" o nazwie "testowa" <br> <br>

Dodaj przykładowe wpisy: <br>
Piotr Kowalski 50 lat <br>
Ania Nowak 25 lat <br>
Tomasz Jaguar 34 lata <br>
Agata Młyn 22 lata <br>
Kasia Sobek 45 lat <br>
Natalia Parus 18 lat <br>
Kuba Wojewódzki 45 lat <br>
Zdzisiu Pierdzipieta 55 lat <br> <br>

2. Wyświetl zapisane wcześniej dane w 2 tabelach: <br>
- posortowane imię alfabetycznie <br>
- posortowane od najmłodszego do najstarszego <br> <br>

3. Utwórz klasę „Osoba”, w niej pole „dane” typu Array z kluczami: imię, nazwisko, wiek, <br>
następnie utwórz metodę dodajOsobe() która uzupełni tablice danymi. <br>
($dane = Array('imie'=>'Piotr', 'nazwisko'=>'Moje nazwisko', 'wiek'=>'21')). <br>
Następnie napisz metodę pokazOsobe() która wyświetli te dane, może być print_r(); <br> <br>