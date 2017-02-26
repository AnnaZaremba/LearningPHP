<?php
function potegowanie($a) {
    for ($i = 1; $i <=10; $i++) {
        $wynik = pow($i, $a);
        echo $i ."^" . $a ." = " . $wynik . "<br>";
    }
}
?>
<html>
<head>
    <title>Ciąg liczb do potęgi</title>
    <meta charset="UTF-8">

</head>
<body>

<?php
/**
 * wykorzystując instrukcję warunkową switch, napisz skrypt, który w zależności od wartości zmiennej (2, 3, 4)
 * wyświetli ciąg dziesięciu kolejnych liczb podniesionych do potęgi o wartości zmiennej (2, 3, 4);
 * skorzystaj z wiedzy, że x^3 to inaczej x*x*x (analogicznie x^2 i x^4)
 */

$a = 4;

switch ($a) {

    case 2:
        potegowanie($a);
        break;

    case 3:
        potegowanie($a);
        break;

    case 4:
        potegowanie($a);
        break;

    default:
        echo "Żadna z powyższych";
        break;
}
?>

</body>
</html>
