<?php
require_once('interface.Opener.php');

class Jar implements Openable
{
    private $contents;

    public function __construct($contents)
    {
        $this->contents = $contents;
    }

    public function open()
    {
        print "Słoik został otwarty" . "<br>";
    }

    public function close()
    {
        print "Słoik został zamknięty" . "<br>";
    }
}