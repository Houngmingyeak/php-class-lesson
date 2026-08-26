<?php
    $role = "admin";
 
    // This is much cleaner than a switch statement!
    $message = match ($role) {
        "subscriber" => "Welcome to the site!",
        "editor" => "Welcome to the editing dashboard.",
        "admin" => "Welcome, almighty admin!",
        default => "Role unknown.",
    };
 
    echo $message;
?>