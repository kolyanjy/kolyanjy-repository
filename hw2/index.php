<?php

function test (array $numbers, $num){
    foreach ($numbers as $arr_num) {
        if ($arr_num == $num) return true;
    }
    return false;
}

test([1, 2, 3, 4, 5], 4);