<?php

function strReverse ($str) {
    $strRev = '';
    for($i = strlen($str) - 1; $i >= 0; $i--) {
        $strRev .= $str[$i];
    }
    return $strRev;
}
echo strReverse('Kolya');