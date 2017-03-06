<?php

/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 06.03.17
 * Time: 20:42
 */
class KontaktWalidator
{

    /**
     * @param string $email
     * @return int
     */
    public function sprawdzEmail($email)
    {
        $spr = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';
        return preg_match($spr, $email);
    }

    /**
     * @param string $imie
     * @return bool
     */
    public function sprawdzImie($imie)
    {
        $sprawdz = '/^[a-zA-ZŁŚĆŹŻĄĘÓŃąęółśżźćń]+$/';
        if (preg_match($sprawdz, $imie)) {
            return true;
        } else {
            return false;
        }
    }

    public function sprawdzTemat($temat)
    {
        $temat = trim($temat);
        if (strlen($temat) < 1) {
            return false;
        } else {
            return true;
        }
    }

    public function sprawdzTresc($tresc)
    {
        $tresc = trim($tresc);
        if (strlen($tresc) < 5) {
            return false;
        } else {
            return true;
        }
    }
}