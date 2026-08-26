<?php
    $isLoggedIn = true;
    $isAdmin = false;
    
    //1. AND (&&)
    // Result is FALSE because $isAdmin is false
    $canEditSite = ($isLoggedIn && $isAdmin); 

    //2. OR (||)
    $isWeekend = true;
    $isHoliday = false;
    
    // Result is TRUE because it is the weekend
    $canSleepIn = ($isWeekend || $isHoliday);

    //3. NOT (!)
    $isRaining = true;
    
    // Read as: "If it is NOT raining"
    $goOutside = !$isRaining; // Result is FALSE
?>