<?php
    // We enforce that $a and $b MUST be integers
    // We enforce that the function MUST return an integer (: int)
    
    function multiply(int $a, int $b): int {
        return $a * $b;
    }
 
    echo multiply(5, 5); // Works perfectly (25)
    
    // echo multiply("Hello", 5); // This would instantly throw a Fatal Error!
?>