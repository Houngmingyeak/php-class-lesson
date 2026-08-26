<?php
    // If no name is provided, default to "Guest"
    function greet($name = "Guest") {
        echo "Welcome, " . $name . "!";
    }
 
    greet("Long"); // Outputs: Welcome, Long!
    greet();       // Outputs: Welcome, Guest!
?>