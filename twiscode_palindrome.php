<?php  


function getPalindrome($s) {
    
    $array_1 = array();
    for($x=0; $x<strlen($s); $x++) {  
        $is_palindrome = true; 
        $counter = 1; 
        
        while($is_palindrome == true) { 
            $xndex = substr($s, $x-$counter, ($counter*2)+1 ); 
            if( $xndex == strrev($xndex) ) { 
                $array_1[$xndex] = strlen($xndex);           
            } else { 
                $is_palindrome = false; 
            } 

            $counter++; 
        } // END while($is_palindrome == true) {

    } // END for($x=0; $x<strlen($s); $x++) {  

    $array_2 = max($array_1);
    return $key = array_search ($array_2, $array_1);

} // END function getPalindrome($s) {

echo getPalindrome("aku suka makan nasi");

?> 