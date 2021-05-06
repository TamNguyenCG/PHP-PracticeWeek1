<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Number</title>
</head>
<body>
<form method="get">
    <div>
        <h1>Input Number:</h1>
        <label>
            <input type="text" name="input">
        </label>
        <button type="submit" name="submit">Read</button>
    </div>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="GET") {
        $number = $_GET["input"];
        $unitsNumber = $number % 10;
        $tensNumber = $number/10;
        $readTensNumber = $tensNumber.$unitsNumber;
//        echo "<script>console.log('$readTensNumber');</script>";

        if ($number >= 0 && $number <= 10) {
            switch ($number) {
                case 0:
                    echo "zero";
                    break;
                case 1:
                    echo "one";
                    break;
                case 2:
                    echo "two";
                    break;
                case 3:
                    echo "three";
                    break;
                case 4:
                    echo "four";
                    break;
                case 5:
                    echo "five";
                    break;
                case 6:
                    echo "six";
                    break;
                case 7:
                    echo "seven";
                    break;
                case 8:
                    echo "eight";
                    break;
                case 9:
                    echo "nine";
                    break;
                case 10:
                    echo "ten";
                    break;
            }
        }
        if ($number > 10 && $number < 20) {
            switch ($unitsNumber) {
                case 1:
                    echo "eleven";
                    break;
                case 2:
                    echo "twelve";
                    break;
                case 3:
                    echo "thirteen";
                    break;
                case 4:
                    echo "fourteen";
                    break;
                case 5:
                    echo "fifteen";
                    break;
                case 6:
                    echo "sixteen";
                    break;
                case 7:
                    echo "seventeen";
                    break;
                case 8:
                    echo "eighteen";
                    break;
                case 9:
                    echo "nineteen";
                    break;
            }
        }
        if ($number >= 20 && $number <= 100) {
            switch ($tensNumber) {
                case 2:
                    echo "twenty";
                    break;
                case 3:
                    echo "thirty";
                    break;
                case 4:
                    echo "forty";
                    break;
                case 5:
                    echo "fifty";
                    break;
                case 6:
                    echo "sixty";
                    break;
                case 7:
                    echo "seventy";
                    break;
                case 8:
                    echo "eighty";
                    break;
                case 9:
                    echo "ninety";
                    break;
                case 10:
                    echo "hundred";
                    break;
            }
        }
    }
?>
</body>
</html>
