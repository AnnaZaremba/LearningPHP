<?php
require_once('class.Cat.php');

class Lion extends Cat
{
    public $maneLenght;

    public function roar()
    {
        print "Roooaaarrr!";
    }
}