<?php
function countCharacterFrequency($str) {
    $frequency = array();
    $chars = str_split($str);
    
    foreach ($chars as $char) {
        if (isset($frequency[$char])) {
            $frequency[$char]++;
        } else {
            $frequency[$char] = 1;
        }
    }
    
    return $frequency;
}

$string = "programming";
$charFrequency = countCharacterFrequency($string);

echo "Character frequencies in '$string': "; 

foreach ($charFrequency as $char => $count) {
    echo "$char: $count ";
}
?>
