<?php
include_once('QuadraticEquation.php');
$a = 1;
$b = 2;
$c = 3;
$QuadraticEquation = new quadraticEquation($a, $b, $c);
$QuadraticEquation->display();
$delta = $QuadraticEquation->getDiscriminant();

echo "Delta = " . $delta . "<br>";
if ($delta > 0) {
    echo "Equation have 2 result: r1 =" . $QuadraticEquation->getRoot1() . ", r2 = " . $QuadraticEquation->getRoot2();
}elseif ($delta == 0) {
    echo "Equation has 1 result: r1 = r2 =" . $QuadraticEquation->getRoot1();
}elseif ($delta < 0) {
    echo "Equation has no result";
}
