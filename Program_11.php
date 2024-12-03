<?php
function isPalindrome($num) {
    $originalNum = $num;
    $reversedNum = 0;
    
    while ($num > 0) {
        $remainder = $num % 10;
        $reversedNum = ($reversedNum * 10) + $remainder;
        $num = (int)($num / 10);
    }
    
    if ($originalNum === $reversedNum) {
        return true;
    } else {
        return false;
    }
}

$number = 121;
if (isPalindrome($number)) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}
?>
