<?php
/**
 * @throws Exception
 */
function exceptionCalculator($x, $y)
{
    if ($x && $y != 0 || $x == 0 && $y != 0) {
        echo "With x = " . "$x" . " and " . "y = " . $y . "<br>";
        echo "Sum: "."$x" . " + " . "$y" . " = " . $x + $y . "<br>";
        echo "Sub: "."$x" . " - " . "$y" . " = " . $x - $y . "<br>";
        echo "Multi: "."$x" . " * " . "$y" . " = " . $x * $y . "<br>";
        echo "Division: "."$x" . " / " . "$y" . " = " . $x / $y . "<br>";
    }
    if ($y == 0 || $x && $y == 0) {
        throw new Exception("Division by 0");
    }
}

try {
    exceptionCalculator(6, 5);
} catch (Exception $e) {
    echo "Unable to divine";
}