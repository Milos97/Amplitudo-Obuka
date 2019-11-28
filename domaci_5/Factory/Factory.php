<?php

interface CarFactory 
{
    public function makeCar();
}

interface Car 
{
    public function getType();
}

class SedanFactory implements CarFactory 
{
    public function makeCar() 
    {
        return new Sedan();
    }
}

class Sedan implements Car 
{
    public function getType() 
    {
        return 'Sedan';
    }
}

$factory = new SedanFactory();
$car = $factory->makeCar();
print $car->getType();