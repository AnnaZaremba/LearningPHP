<?php

class Cat
{
    public $weight;
    public $furColor;
    public $whiskerLenght;
    public $maxSpeed;

    public function eat()
    {

    }

    public function sleep()
    {

    }

    public function hunt(Prey $objPrey)
    {

    }

    public function purr()
    {
        print "mrrrr..." . "\n";
    }

    public function petTheKitty(Cat $objCat)
    {
        $objCat->purr();
    }
}
