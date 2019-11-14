<?php

require_once './Vozilo.php';

use Amplitudo\Vozilo;

$prvoVozilo = new Vozilo('Vozilo 1', 2010);
$drugoVozilo = new Vozilo('Vozilo 2', 1995);

$prvoVozilo->sayHello();
echo '<br/>';
$drugoVozilo->sayHello();

$prvoVozilo->setNaziv('Vozilo 1.1');
$prvoVozilo->sayHello();
$prvoVozilo->godiste = 2011;

function changeObject(Vozilo $vozilo)
{
    $vozilo->setNaziv($vozilo->getNaziv() . ' - CHANGED');
    $vozilo = null;
}

changeObject($drugoVozilo);
$drugoVozilo->sayHello();

$treceVozilo = $drugoVozilo;
$treceVozilo->setNaziv('NEMA VISE');

$drugoVozilo->sayHello();
















