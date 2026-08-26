<?php
    $age = 20;
 
    // Standard if/else
    if ($age >= 18) {
        $status = "Adult";
    } else {
        $status = "Minor";
    }
 
    // Exact same logic using the Ternary Operator:
    $status = ($age >= 18) ? "Adult" : "Minor";
?>