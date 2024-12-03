<?php
function countVowels($str) {
    $vowels = "aeiouAEIOU";
    $count = 0;
    
    for ($i = 0; $i < strlen($str); $i++) {
        if (strpos($vowels, $str[$i]) !== false) {
            $count++;
        }
    }
    
    return $count;
}

$string = "Hello World"; 
$vowelCount = countVowels($string);

echo "The number of vowels in '$string' is: $vowelCount";
?>
