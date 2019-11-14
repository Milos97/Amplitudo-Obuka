<?php

namespace Amplitudo\Shapes;

class Rectangle implements Shape
{
    protected $topLeft;
    protected $width;
    protected $height;

    public function __construct($topLeft, $width, $height)
    {
        $this->topLeft = $topLeft;
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}



















