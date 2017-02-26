<html>
<head>
    <title>strpos()</title>
    <meta charset="UTF-8">

</head>
<body>

<?php
// strpos()  sprawdza, czy dany wyraz występuje wewnątrz ciągu znaków

$wpisany_tekst = "Rozwijam swoją wiedzę w dziedzinie PHP.";

$czy = strpos($wpisany_tekst, "cholera");

if ($czy == FALSE) // nie znaleziono słowa cholera
    echo "Można wyświetlić: $wpisany_tekst.";
else // znaleziono szukany wyraz
    echo "Tekst zawiera wulgarne słownictwo.";
?>

</body>
</html>
