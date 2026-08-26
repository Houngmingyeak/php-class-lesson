<?php
    $role = "admin";
 
    switch ($role) {
        case "subscriber":
            echo "Welcome to the site!";
            break;
        case "editor":
            echo "Welcome to the editing dashboard.";
            break;
        case "admin":
            echo "Welcome, almighty admin!";
            break;
        default:
            echo "Role unknown.";
    }
?>