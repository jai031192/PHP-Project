<?php
function isPalindrome($str) {
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));
    $reverseStr = strrev($str);
    
    if ($str === $reverseStr) {
        return true;
    } else {
        return false;
    }
}

$string = "A man, a plan, a canal, Panama";
if (isPalindrome($string)) {
    echo "'$string' is a palindrome.";
} else {
    echo "'$string' is not a palindrome.";
}
?>
