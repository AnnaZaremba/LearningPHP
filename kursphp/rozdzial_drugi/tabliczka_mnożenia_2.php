<?php
/**
 * Napisz skrypt, który za pomocą dowolnie wybranych pętli wypisze tabliczkę mnożenia z liczbami od 1 do 10;
 * będzie konieczne zagnieżdżenie jednej pętli w drugiej; podobna konstrukcja jak w przykładzie powyżej,
 * zmodyfikuj tabliczkę mnożenia tak, żeby liczby parzyste kolorowało na niebiesko, a nieparzyste na zielono;
 * użyj warunku if,
 */

for ($a = 1; $a < 11; $a++) {
    for ($i = 1; $i < 11; $i++) { // tutaj druga pętla wyświetlająca cyfry od 1 do 10
//        echo $a*$i.' ';
        if ($a * $i % 2 > 0) {
            echo "<span style='color: blue;'>" . $a * $i . "</span>" . " ";
        }
        if ($a * $i % 2 == 0) {
            echo "<span style='color: darkgreen;'>" . $a * $i . "</span>" . " ";
        }
    }
    echo '<br>';
}
