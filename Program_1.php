<?php

function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

$number = 5;

echo "The number $number is " . checkEvenOdd($number) . ".";
?>
