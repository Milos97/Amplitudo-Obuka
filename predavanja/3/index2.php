<?php

require_once './Auto.php';
require_once './Motor.php';
require_once './Vozilo.php';

use Amplitudo\Auto;
use Amplitudo\Motor;
use Amplitudo\Vozilo;

$auto1 = new Auto('Gold', 2010, 'crna');
$auto1->sayHello();

$motor1 = new Auto('Gold', 2010, 3000);
$motor1->sayHello();

function predstaviVozilo(Vozilo $vozilo)
{
    $vozilo->sayHello();
}

predstaviVozilo($auto1); // ne poziva metodu vozila nego auta
predstaviVozilo($motor1);