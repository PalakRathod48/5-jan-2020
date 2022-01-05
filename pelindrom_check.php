<?php  
$n = 101;
    $num = (string)$n;  
    $rn = strrev($num);  
    $rev = (int)$rn;   
     if($rev == $n) {
      echo "Number is palindrome number";
     }
     else{
       echo "Number is not palindrome number";
     }
?>