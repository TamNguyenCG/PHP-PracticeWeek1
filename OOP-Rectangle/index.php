<?php
include_once ('class_lib.php');

$width = 30;
$height = 20;
$rectangle = new Rectangle($width,$height);
//$rectangle->width = 50;
//$rectangle->height = 40;
echo $rectangle->display()."<br>";
echo "width = ".$rectangle->width."<br>";
echo "height = ".$rectangle->height."<br>";
echo "Rectangle Area = ".$rectangle->getArea()."<br>";
echo "Rectangle Perimeter = ".$rectangle->getPerimeter()."<br>";
