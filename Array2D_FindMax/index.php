<?php
$arr=[[5,4,3,2,],[4,5,6,91],[8,6,4,2],[5,100,3,6]];
$max = $arr[0][0];
for($i = 0;$i < count($arr);$i++){
    for($j = 0;$j < count($arr);$j++){
        if($max < $arr[$i][$j]){
            $max = $arr[$i][$j];
        }
    }
}
var_dump($arr);
echo "<br>Max of 2D Array is: ".$max;