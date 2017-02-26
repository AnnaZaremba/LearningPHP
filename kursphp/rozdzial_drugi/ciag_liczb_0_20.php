<?php

/**
 * Napiszemy skrypt, który wyswietli X ciągów liczb od zera do dwudziestu
 * (gdzie X będzie wyznaczała zmienna $ilosc).
 * Jeśli $ilosc będzie mniejsza od zera, wyświetlimy X ciągów od dwudziestu do zera
 * (X oznaczymy jako „- $ilość”). Jeżeli $ilosc będzie równa 0, wyświetlimy komunikat o braku ciągów.
 * Na początek sprawdzimy zmienną $ilosc za pomocą operatora ?.
 * Następnie zagnieździmy w pętli while pętlę for (for wyświetli 20 liczb,
 * a while będzie odpowiedzialna za ilość ciągów).
 */

$ilosc = 8;

// sprawdzamy czy $ilosc jest zerem
// operator warunkowy ? (zamiast if/else) - Jeżeli warunek w nawiasie jest spełniony to $kontynuacja przyjmuje pierszą wartość, jeśli nie jest spełniony to drugą
$kontynuacja = ($ilosc == 0) ? 0 : 1;

// jeśli $ilość nie jest zerem to mozemy kontynuować

if ($kontynuacja == 1) {
    if ($ilosc > 0) // wyswietlamy ciagi od 0 do 20
        while ($ilosc > 0) // musimy wpisac ilosc ciagów
        {
            for ($i = 0; $i < 21; $i++)
                echo $i;
            $ilosc--; // zmniejszamy az dojdzie do zera
            echo "<br/>";
        }
    else // jeśli ilość jest ujemna wyświetlamy od 20 do 0
        while ($ilosc < 0) // wypisujemy -$ilosc ciagów
        {
            for ($i = 20; $i > 0; $i--)
                echo $i;
            $ilosc++; // zwiększamy az dojdzie do zera
            echo "<br/>";
        }
} else // jesli kontynuacja wynosi 0
    echo "Brak ciagow liczb";

