<?php
include 'oop.php';

function isInArr(array $arr, $num) {
    $arr_length = count($arr) - 1;
    for ($i = 0, $j = $arr_length / 2; $i < $arr_length, $j >= $arr_length / 2; $i++, $j--) {
        if ($arr[$i] == $num or $arr[$j] == $num) return true;
    }
    return false;
}
//var_dump(isInArr([1, 2, 3, 4, 5],   3)) ;

$arr = [1, 2 ,3];

//echo in_array(3, $arr);
echo Room::roomDescription();