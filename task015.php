<?php

$arr = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0, -1, -2, -3, -4, -5, -6, -7, -8, -9, -10];
foreach ($arr as $element) {
    if ($element > 0) {
        $resultAboveZero += $element; 
    }
    else {
        $resultLessThanZero += $element;
    }
}
echo $resultAboveZero . " " . $resultLessThanZero;

?>