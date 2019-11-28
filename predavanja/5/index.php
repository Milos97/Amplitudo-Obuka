<?php

require_once 'Singleton/Singleton.php';
require_once 'Monade/GeneratesRandomNumber.php';
require_once 'Monade/NumberGenerator.php';
require_once 'Monade/IntNumberGenerator.php';
require_once 'Builder/User.php';
require_once 'Builder/UserBuilder.php';

use Amplitudo\Patterns\Singleton\Singleton;
use Amplitudo\Patterns\Monade\NumberGenerator;
use Amplitudo\Patterns\Builder\UserBuilder;

//$instance = new Singleton(); // private constructor
$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();
$instance3 = Singleton::getInstance();

echo '<h1>' . $instance1->getNumber() . '</h1>';
echo '<h1>' . $instance2->getNumber() . '</h1>';
echo '<h1>' . $instance3->getNumber() . '</h1>';

$instance1 = new NumberGenerator();
$instance2 = new NumberGenerator();
$instance3 = new NumberGenerator();

echo '<h1>' . $instance1->getID() . '</h1>';
echo '<h1>' . $instance2->getID() . '</h1>';
echo '<h1>' . $instance3->getID() . '</h1>';

$user = (new UserBuilder())
    ->male()
    ->setFirstName('Marko')
    ->setLastName('Markovic')
    ->wage(250)
    ->setEyeColor('blue')
    ->setHairColor('brown')
    ->build();

echo '<h1>' . $user->toString() . '</h1>';






















