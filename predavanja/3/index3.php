<?php

include_once 'Vozilo.php';
include_once 'Motor.php';
include_once 'Auto.php';
include_once 'MovementException.php';

use Amplitudo\MovementException;
use Amplitudo\Vozilo;
use Amplitudo\Auto;
use Amplitudo\Motor; 

// $vozilo = new Vozilo('', 2010); // Nije dozvoljeno
$auto = new Auto('Golf', 2010, 'boja');
$motor = new Motor('Honda', 2012, 'crvena');

/**
 * @param Vozilo $vozilo
 */
function stampajPuniNaziv($vozilo)
{
    echo '<h1>' . $vozilo->napraviPuniNaziv() . '</h1>';
}

stampajPuniNaziv($auto);
stampajPuniNaziv($motor);

$auto->napraviZvuk();
$auto->napraviJakiZvuk();

try {
    echo '<p>Idem naprijed.</p>';
    $auto->idiNaprijed(10);
    echo '<p>Posao naprijed 10</p>';
    $auto->idiNaprijed('NE');
    echo '<p>Posao narpije NE</p>';
} catch (MovementException $e) {
    echo '<h1>' . $e->getMessage() . '</h1>';
} catch (Exception $e) {
    echo '<h1>Izuzetak</h1>';
} finally {
    echo '<p>Finally Block</p>';
}













