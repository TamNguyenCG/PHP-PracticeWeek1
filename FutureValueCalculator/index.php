<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
</head>
<body>
<form action="" method="post">
    <h1>Future Value Calculator</h1>
    <hr>
    <label>
        Inventment Amount:
        <input type="text" name="money"> <br><br>
    </label>
    <label>
        Yearly Interest Rate:
        <input type="text" name="rate"> <br><br>
    </label>
    <label>
        Number of Years:
        <input type="text" name="years"> <br><br>
    </label>
    <input type="submit" name="submit" value="Calculator">
</form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $money = $_POST["money"];
        $rate = $_POST["rate"];
        $year = $_POST["years"];
        $moneyFuture = "";
        $percent = 100;
        if($year == "0"){
            echo "Year(s) must > 0";
        }else{
            $moneyFuture = $money + ($money*($rate*$year/$percent));
            echo "Future Value of "."$money"." after "."$year"." year(s)"." = "."$moneyFuture";
        }
    }
?>
</body>
</html>