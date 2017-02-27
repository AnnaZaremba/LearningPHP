<?php

/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 27.02.17
 * Time: 17:56
 */
class Walidator
{
    static $PATTERN = '/^[A-ZŁŚ]{1}+[a-ząęółśżźćń]+$/';

    public function czyImieJestPoprawne($imie) {
        if (preg_match(static::$PATTERN, $imie)) {
            return true;
        }

        return false;
    }

    public function czyNazwiskoJestPoprawne($nazwisko) {
        if (preg_match(static::$PATTERN, $nazwisko)) {
            return true;
        }

        return false;
    }
}