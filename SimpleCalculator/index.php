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
                    <select>
                        <option value="+" name="Add">Addition</option>
                        <option value="-" name="Sub">Subtraction</option>
                        <option value="*" name="Multi">Multiple</option>
                        <option value="/" name="Div">Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second operand: </td>
                <td><input type="text" name="S_operand"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculator"></td>
            </tr>
        </table>
    </fieldset>
    <h1>Result:</h1>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $firstNum = $_POST["F_operand"];
        $secondNum = $_POST["S_operand"];
        $add = $_POST["Add"];
        $sub = $_POST["Sub"];
        $mul = $_POST["Multi"];
        $div = $_POST["Div"];

        if($div){
            if($secondNum == 0){

            }
        }
    }
?>
</body>
</html>
