<?php

function test (array $numbers, $num){
    $flag = 0;
    foreach ($numbers as $arr_num){
        if($arr_num == $num){
            echo 'true';
            return true;
            break;
            ++$flag;
        }
    }
    if(!$flag){
        echo 'false';
        return false;
    }
}

test([1, 2, 3 ,4], 4);