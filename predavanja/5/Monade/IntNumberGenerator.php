<?php

namespace Amplitudo\Patterns\Monade;

//use Amplitudo\Patterns\Monade\GeneratesRandomNumber;

class IntNumberGenerator implements GeneratesRandomNumber
{
    protected $id;

    public function __construct()
    {
        $this->id = rand(10, 1000);
    }

    public function generateNumber()
    {
        return rand(100, 10000);
    }

    public function getID()
    {
        return $this->id;
    }
}












