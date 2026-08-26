<?php

// // Data Types
// $name = "Mingyeak"; //String
// $age = 20; //Integer
// $score = 99.99; //Float, Decimal number
// $isStudent = true; //Boolean: true, false
// $x = null;

// $color1 = "Red";
// $color2 = "Blue";
// $color3 = "Yellow";

// // Type Checking
// var_dump($name);
// echo "</br>";
// var_dump($age);
// echo "</br>";
// var_dump($score);
// echo "</br>";
// var_dump($isStudent);
// echo "</br>";
// var_dump($x);
// echo "</br>";
// echo "</br>";

// // Array:    0      1        2
// $colors = ["Red", "Blue", "Yellow"];
// echo $colors["0"];
// echo "</br>";

// var_dump($colors);
// echo "</br>";
// echo "</br>";

// // Array using [Key => Value]
// $user = [
//     "name" => "Mingyeak",
//     "age" => 20,
//     "score" => 99.99,
//     "isStudent" => True
// ];
// echo "My Name is " . $user["name"];
// echo "</br>";

// echo "Age: " . $user["age"];
// echo "</br>";

// echo "score: " . $user["score"];
// echo "</br>";

// echo "isStudent: " . $user["isStudent"];
// echo "</br>";



// // Constant
// // use define()
// define('WEBSITE_URL', "longsoeng.site");

// // use const
// const PI = 3.14;

// echo PI;



//     $age = 20;
 
//     if ($age >= 19) {
//         echo "If Statement true!";
//     } else {
//         // This code will run instead
//         echo "Of Statement false!!!!!!!!";
//     }

// if...else
$age = 15;
if ($age >= 18) {
    // This code will run because 20 is greater than or equal to 18
    echo "You are an adult!";
} else {
    echo "I am a child!";
}

// elsif
$score = 85;
if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80) {
    // This code will run!
    echo "Grade: B";
} elseif ($score >= 70) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}

?>