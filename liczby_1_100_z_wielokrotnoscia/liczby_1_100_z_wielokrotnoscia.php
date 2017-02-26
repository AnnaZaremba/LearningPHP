<!--FizzBuzzTest-->

<!--Napisz program, który wypisuje liczby od 1 do 100.-->
<!--Ale dla wielokrotności trójki wyświetl "Ania" zamiast liczby-->
<!--oraz dla wielokrotności piątki wyświetl "Marcin".-->
<!--Dla liczb będących wielokrotnościami trójki oraz piątki wyświetl "Adas".-->

<!--    $a %= 2	Zmienna $a przyjmie wartość reszty z dzielenia $a przez 2 -->
<!--    $a == $b Prawda jeśli $a jest równe $b -->
<!--    liczy się kolejność wykonywania poleceń-->
<!--    continue - powoduje przeskoczenie do następnego obiegu pętli; powoduje zakończenie wykonywania skryptu-->
<!--    break - powoduje natychmiastowe wyjście z pętli i rozpoczęcie wykonywania pierwszej instrukcji znajdującej się po pętli -->


<?php

for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        $wielTrzyPiec = "Adas";
        echo "$wielTrzyPiec <br />";
        continue;
    }

    if ($i % 3 == 0) {
        $wielTrzy = "Ania";
        echo "$wielTrzy <br />";
        continue;
    }

    if ($i % 5 == 0) {
        $wielPiec = "Marcin";
        echo "$wielPiec <br />";
        continue;
    }

    echo "$i <br />";
}

