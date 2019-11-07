<?php

namespace Amplitudo;

require_once './Vozilo.php';

use Amplitudo\Vozilo;

class Auto extends Vozilo
{
    private $boja;



    public function __construct($naziv, $godiste, $boja)
    {
        parent::__construct($naziv, $godiste);
        $this->boja = $boja;
    }

    public function __toString()
    {
        return parent::__toString() . " i moja boja je {$this->boja}";
    }
}