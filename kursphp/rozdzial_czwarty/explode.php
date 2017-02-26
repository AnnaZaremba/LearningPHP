<html>
<head>
    <title>explode()</title>
    <meta charset="UTF-8">

</head>
<body>

<?php
// eplode() określa, ile razy ciąg występuje w tekście


// string do rozdzielenia
$dane = "Marcin,Wesel,Bielsko-Biała";

// wykorzystanie funkcji explode, wg przecinka
$dane_osobowe = explode(",", $dane);

// wyświetlenie otrzymanej tablicy
echo $dane_osobowe[0] . "<br/>";
echo $dane_osobowe[1] . "<br/>";
echo $dane_osobowe[2] . "<br/>";

//Wykorzystując funkcję explode, możemy w łatwy sposób policzyć np. ilość słów w tekście.
// Wystarczy rozdzielić ciąg według spacji, a następnie zliczyć ilość indeksów w tablicy.
// Pomoże nam w tym metoda count().

$tekst = "Litwo, ojczyzno moja, Ty jesteś jak zdrowie.";

$wyrazy = explode(" ", $tekst);

// wyświetli ilość wyrazów w zmiennej $tekst
echo count($wyrazy);

?>
</body>
</html>
