<?php

require_once 'Shape.php';
require_once 'Rectangle.php';
require_once 'Circle.php';

use Amplitudo\Shapes\Shape;
use Amplitudo\Shapes\Rectangle;
use Amplitudo\Shapes\Circle;

$circle = new Circle(['x' => 0, 'y' => 0], 10);
$rectangle = new Rectangle(['x' => 10, 'y' => 10], 5, 3);

echo '<h3>Povrsina kruga je ' . $circle->area() . '</h3>';
echo '<h3>Povrsina pravougaonika je ' . $rectangle->area() . '</h3>';


function printArea(Shape $shape)
{
    echo '<h1>' . $shape->area() . '</h1>';
}

printArea($circle);
printArea($rectangle);

$circle = [
    'type' => 'circle',
    'center' => ['x' => 0, 'y' => 0],
    'radius' => 10,
];

$rectangle = [
    'type' => 'rectangle',
    'topLeft' => ['x' => 10, 'y' => 10],
    'width' => 5,
    'height' => 3,
];

function calculateArea($shape)
{
    switch($shape['type']) {
        case 'circle':
            return pow($shape['radius'], 2) * PI;
        case 'rectangle':
            return $shape['width'] * $shape['height'];;
        default:
            return 0;
    }
}

echo '<h3>' . calculateArea($circle) . '</h3>';
echo '<h3>' . calculateArea($rectangle) . '</h3>';









