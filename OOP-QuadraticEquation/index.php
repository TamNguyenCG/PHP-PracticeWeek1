<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QuadraticEquation</title>
</head>
<body>
<form action="" method="post">
    <h1>QuadraticEquation Calculator</h1>
    <table>
        <tr>
            <td>Input a:</td>
            <td><input type="text" name="A"></td>
        </tr>
        <tr>
            <td>Input b:</td>
            <td><input type="text" name="B"></td>
        </tr>
        <tr>
            <td>Input c:</td>
            <td><input type="text" name="C"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
<?php
include_once('QuadraticEquation.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["A"];
    $b = $_POST["B"];
    $c = $_POST["C"];
    $delta = (pow($b,2)) - (4 * $a * $c);
    echo "Delta = " . $delta . "<br>";
    $QuadraticEquation = new quadraticEquation($a, $b, $c);
    if ($delta > 0) {
        echo "QuadraticEquation have 2 results: {$QuadraticEquation->getRoot1()} and {$QuadraticEquation->getRoot2()}";
    } elseif ($delta == 0) {
        echo "QuadraticEquation has 1 result: {$QuadraticEquation->getRoot1()}";
    } elseif ($delta < 0) {
        echo "Equation has no result";
    }
}
?>
</body>
</html>
