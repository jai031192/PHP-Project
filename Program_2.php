<?php
function findLargest($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}

$num1 = 10;
$num2 = 25;
$num3 = 15;

$largest = findLargest($num1, $num2, $num3);
echo "The largest number is: $largest";
?>
