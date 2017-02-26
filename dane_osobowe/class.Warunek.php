<?php

class Warunek
{
    public function czyMozemyDodacDoBazyDanych($dane)
    {
        return isset($dane['imie']) && isset($dane['nazwisko']) && isset($dane['wiek']) && !isset($dane['id']);
    }

    public function czyMozemyZapisacEdytowaneDane($dane)
    {
        return isset($dane['imie']) && isset($dane['nazwisko']) && isset($dane['wiek']) && isset($dane['id']) && !isset($dane['co_zrobic']);
    }

    public function czyMozemyEdytowacDane($dane)
    {
        return isset($dane['co_zrobic']) && $dane['co_zrobic'] == 'edytuj';
    }

    public function czyMozemyUsunac($dane)
    {
        return isset($dane['co_zrobic']) && $dane['co_zrobic'] == 'usun';
    }
}