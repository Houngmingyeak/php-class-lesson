<?php
    // This function expects one argument: $name
    function greetUser($name) {
        echo "Hello, " . $name . "!<br>";
    }
 
    greetUser("Long");  // Outputs: Hello, Long!
    greetUser("Sarah"); // Outputs: Hello, Sarah!


    //Multiple Arguments
    function calculateTotal($price, $taxRate) {
        $total = $price + ($price * $taxRate);
        echo "Total cost: $" . $total;
    }
 
    calculateTotal(100, 0.05); // Outputs: Total cost: $105
?>