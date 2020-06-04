<?php 

require_once 'Shape.php';
require_once 'Rectangle.php';
require_once 'Circle.php';

$shape = new Shape(10, 2);
$shape->setName("shape 1");
echo "shape name : " . $shape->getName();
echo "<br>";
echo "shape Id : " . $shape->getId();
echo "<br>";
echo "shape area : " . $shape->area();
echo "<br>";
echo $shape->getTypeDescription();
echo "<br>";
echo $shape->getFullDescription();
echo "<br>";

echo "<br>";

$rectangle = new Rectangle(15, 3);
$rectangle->setName("rectangle 1");
echo "shape name : " . $rectangle->getName();
echo "<br>";
echo "shape Id : " . $rectangle->getId();
echo "<br>";
echo "shape area : " . $rectangle->area();
echo "<br>";
echo $rectangle->getTypeDescription();
echo "<br>";
echo $rectangle->getFullDescription();
echo "<br>";

echo "<br>";

$circle = new Circle(5);
$circle->setName("circle 1");
echo "shape name : " . $circle->getName();
echo "<br>";
echo "shape id : " . $circle->getId();
echo "<br>";
echo "shape area : " . $circle->area();
echo "<br>";
echo $circle->getTypeDescription();
echo "<br>";
echo $circle->getFullDescription();
?>