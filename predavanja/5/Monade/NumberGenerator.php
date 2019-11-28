<?php

namespace Amplitudo\Patterns\Monade;

class NumberGenerator implements GeneratesRandomNumber
{
    protected static $instance;

    public function __construct()
    {
        if (!NumberGenerator::$instance) {
            NumberGenerator::$instance = new IntNumberGenerator();
        }
    }

    public function generateNumber()
    {
        return NumberGenerator::$instance->generateNumber();
    }

    public function getID()
    {
        return NumberGenerator::$instance->getID();
    }
}








