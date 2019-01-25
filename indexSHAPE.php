<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new Circle('Circle 1', 3);
echo "Circle Area: " . $circle->calculateArea() . " <br>";
echo "Circle Perimeter: " . $circle->calculatePerimeter() . "<br>";

$cylinder = new Cylinder('Cylinder 1', 4, 5);
echo "Cylinder Area: " . $cylinder->calculateArea() . "<br>";
echo "Cylinder Perimeter: " . $cylinder->calculatePerimeter() . "<br>";

$rectangle = new Rectangle('Rectangle 1',5,7);
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "<br>";

$square = new Square('Square 1',10);
echo "Square Area: " . $square->calculateArea() . "<br>";
echo "Square Perimeter: " . $square->calculatePerimeter() . "<br>";