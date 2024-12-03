<?php
function reverseNumber($num) {
    $reversed = 0;
    while ($num > 0) {
        $remainder = $num % 10;
        $reversed = ($reversed * 10) + $remainder;
        $num = (int)($num / 10);
    }
    return $reversed;
}

$number = 12345;
$reversedNumber = reverseNumber($number);

echo "The reversed number is: $reversedNumber";
?>
