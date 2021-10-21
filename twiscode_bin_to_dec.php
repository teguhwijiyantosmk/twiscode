<?php

function convertBinToDec($binary) {

    $decimal = 0;
    $x = 1;
    $y = $binary;
    while ($y) {
        $end = $y%10;
        $y = $y/10;
        $decimal += $end*$x;
        $x = $x*2;
    } // END while ($y) {
    return $decimal;
	
} // END function convertBinToDec($binary) {
 
    $binary = 1001;
    echo convertBinToDec($binary);
 
?>