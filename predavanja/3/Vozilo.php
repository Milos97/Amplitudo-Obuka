<?php

namespace Amplitudo; // namespace se koristi da ne bi doslo do toga da jos neko napravi klasu sa istim nazivom

class Vozilo 
{
    private $naziv;
    private $godiste;

    // ne mozes da imas vise konstruktora u klasi, niti da imas metode sa istim nazivom
    public function __construct($naziv, $godiste)
    {
        $this->naziv = $naziv;
        $this->godiste = $godiste;
    }

    public function sayHello()
    {
        echo "<h1>" . $this->__toString() . "</h1>";
    }

    public function __toString() 
    {
        return "Zdravo, ja sam vozilo {$this->naziv} i ja sam godiste {$this->godiste}.";
    }

    public function getNaziv()
    {
        return $this->naziv;
    }

    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
    }
}

