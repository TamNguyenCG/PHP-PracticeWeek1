<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
    <style>
        fieldset{
            width: 320px;
        }
    </style>
</head>
<body>
<form method="post">
    <h1>Simple Calculator</h1>
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <td>First operand:</td>
                <td><input type="text" name="F_operand"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <select name="select">
                        <option value="Add" >Addition</option>
                        <option value="Sub" >Subtraction</option>
                        <option value="Multi" >Multiple</option>
                        <option value="Div">Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second operand: </td>
                <td><input type="text" name="S_operand"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Calculator"></td>
            </tr>
        </table>
    </fieldset>
    <h1>Result:</h1>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $firstNum = $_POST["F_operand"];
        $secondNum = $_POST["S_operand"];
        $select=$_POST["select"];

        switch ($select){
            case "Add":
                echo "$firstNum". ' + ' ."$secondNum".' = '.$firstNum + $secondNum;
                break;
            case "Sub":
                echo "$firstNum". ' - ' ."$secondNum".' = '.$firstNum - $secondNum;
                break;
            case "Multi":
                echo "$firstNum". ' * ' ."$secondNum".' = '.$firstNum * $secondNum;
                break;
            case "Div":
                if($secondNum == 0){
                    echo "Second Number error, Can't division for zero (0)";
                }else{
                    echo "$firstNum". ' / ' ."$secondNum".' = '.$firstNum / $secondNum;
                    break;
                }
            }
    }
?>
</body>
</html>
