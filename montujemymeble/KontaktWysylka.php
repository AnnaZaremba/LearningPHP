<?php

/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 06.03.17
 * Time: 20:43
 */
class KontaktWysylka
{
    private $mailDo = "annpuf@wp.pl";

    /**
     * @param $temat
     * @param $tresc
     * @param $name
     * @param $email
     * @return bool
     */
    function wyslijMaila($temat, $tresc, $name, $email)
    {
//        if (mail($this->mailDo, $temat, $tresc, $name, $email)) {
        if (true) {
            return true;
        } else {
            return false;
        }
    }
}