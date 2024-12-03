<?php
function findLargestElement($arr) {
    $largest = $arr[0];
    
    foreach ($arr as $element) {
        if ($element > $largest) {
            $largest = $element;
        }
    }
    
    return $largest;
}

$array = [10, 25, 3, 45, 7, 12];
$largestElement = findLargestElement($array);

echo "The largest element in the array is: $largestElement";
?>
