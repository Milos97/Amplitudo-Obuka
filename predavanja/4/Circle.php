<?php

namespace Amplitudo\Shapes;

define('PI', 3.14);

class Circle implements Shape
{
    protected $center;
    protected $radius;

    public function __construct($center, $radius)
    {
        $this->center = $center;
        $this->radius = $radius;
    }

    public function area()
    {
        return pow($this->radius, 2) * PI;
    }
}