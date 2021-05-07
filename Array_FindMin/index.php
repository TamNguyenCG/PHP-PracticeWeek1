<?php
$arr_int = [31, 32, 33, 34, 35, 36, 37, 38, 90, 110, 122, 132, 143, 154, 162, 17, 18, 19];
$min = $arr_int[0];
$index = 0;
for ($i = 1; $i < count($arr_int); $i++) {
    if ($arr_int[$i] < $min) {
        $min = $arr_int[$i];
        $index = $i;
    }
}
var_dump($arr_int);
echo "<br>Min of integer array is: " . "$min"." and index of Min is: ".$index;
