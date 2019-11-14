<?php

namespace Amplitudo;

require_once './Vozilo.php';
require_once './SoundTrait.php';

use Amplitudo\SoundTrait;

class Auto extends Vozilo
{
    use SoundTrait;

    private $boja;

    public function __construct($naziv, $godiste, $boja)
    {
        parent::__construct($naziv, $godiste);

        $this->boja = $boja;
    }

    public function napraviJakiZvuk()
    {
        $this->jacina = 10;

        echo '<h2>BRM BRM!!!</h2>';
    }

    public function napraviPuniNaziv()
    {
        return urlencode($this->naziv . '-' . $this->godiste . '-' . $this->boja);
    }

    public function idiNazad($daljina)
    {
        // TODO: Implement idiNazad() method.
    }
}












