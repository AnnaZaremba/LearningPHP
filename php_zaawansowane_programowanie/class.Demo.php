<?php

class Demo
{
    private $_name;

//    public function __construct($name)
//    {
//        $this->name = $name;
//    }

    public function sayHello()
    {
        print "Cześć. {$this->getName()}!";
    }

    public function getname()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        if (!is_string($name) || strlen($name) == 0) {
            echo "Niepoprawna wartość zmiennej name";
        }
        $this->_name = $name;
    }
}