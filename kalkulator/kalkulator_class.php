<?php

class Kalkulator
{

    public function oblicz($liczba_1, $liczba_2, $znak)
    {
        if ($znak == "+") {
            return $liczba_1 + $liczba_2;
        } elseif ($znak == "-") {
            return $liczba_1 - $liczba_2;
        } elseif ($znak == "*") {
            return $liczba_1 * $liczba_2;
        } elseif ($znak == "/") {
            return $liczba_1 / $liczba_2;
        }
    }
}