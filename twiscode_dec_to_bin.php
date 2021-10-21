<?php

function convertDecToBin($decimal) {

   $array_result_keeper = [];
   $index = -1;
   $result = "";

   while($decimal != 0) {
      $index++;
      $array_result_keeper[$index] = $decimal % 2;
      $decimal = floor($decimal / 2);
   } // END while($decimal != 0) {


   for($counter=$index; $counter>=0; $counter--) {
      $result .= $array_result_keeper[$counter];
   } // END for($counter=$index; $counter>=0; $counter--) {

   return $result;
	
} // END function convertDecToBin($decimal) {
 

    $decimal = 19;
    echo convertDecToBin($decimal);
 
?>