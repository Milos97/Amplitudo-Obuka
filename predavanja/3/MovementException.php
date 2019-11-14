<?php

namespace Amplitudo;

use Exception;

class MovementException extends Exception
{
    public function __construct()
    {
        parent::__construct(
            'Doslo je do greske prilikom pomjeranja',
            401,
            null
        );  
    }
}
