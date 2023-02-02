<?php

function checkFunc($value) {
    if (is_int($value)) {
        if ($value > 170) {
            return "Big";
        }
        else {
            return "Small";
        }
    }
    return false;
    
}

echo checkFunc("180");

?>