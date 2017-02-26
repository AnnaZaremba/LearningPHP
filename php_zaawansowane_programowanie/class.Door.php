<?php
require_once('interface.Opener.php');

class Door implements Openable
{
    private $_locked = false;

    public function open()
    {
        if ($this->_locked) {
            print "Nie można otworzyć drzwi. Są zamkniete na klucz.";
        } else {
            print "skrzyyyp..." . "<br>";
        }
    }

    public function close()
    {
        print "Trrrrrach!" . "<br>";
    }

    public function lockDoor()
    {
        $this->_locked = true;
    }

    public function unlockDoor()
    {
        $this->_locked = false;
    }
}
