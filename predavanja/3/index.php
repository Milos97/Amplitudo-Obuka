<?php

require_once './Vozilo.php'; // ukljucujes klasu 

use Amplitudo\Vozilo; // ovo se koristi zbog namespace-a, moze se staviti alias takodje da ne bi pisao citav naziv

$prvoVozilo = new Vozilo('Vozilo 1', 2010);
$drugoVozilo = new Vozilo('Vozilo 2', 1995);

$prvoVozilo->sayHello();
echo '<br/>';
$drugoVozilo->sayHello();

$prvoVozilo->setNaziv('Vozilo 1.1');
$prvoVozilo->sayHello();

// $prvoVozilo->godiste = 2011; promjenljive klasa treba da budu privatne ili zasticene
function changeObject(Vozilo $vozilo)
{
        $vozilo->setNaziv($vozilo->getNaziv() . ' - CHANGED');
        $vozilo = null;
}

changeObject($drugoVozilo);
$drugoVozilo->sayHello();
$treceVozilo = clone $drugoVozilo;
// $treceVozilo = $drugoVozilo; ovo je samo novi pokazivac na objekat, mijenjanjem treceg bi promijenio objekat na koji pokazuje i drugo
