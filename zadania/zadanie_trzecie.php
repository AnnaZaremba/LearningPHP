<?php

class Osoba
{

    private $dane = array('imie', 'nazwisko', 'wiek');
    private $nowe = array();

    public function dodajOsobe()
    {

    }

    public function pokazOsobe($dane)
    {
        echo print_r($dane);
    }
}

$nowaOsoba = new dodajOsobe();
$nowaOsoba->dane = array('imie' => 'Piotr', 'nazwisko' => 'Moje nazwisko', 'wiek' => '21');
echo $nowaOsoba->dodajOsobe();


