<?php

function func($weightInTons) {
    if (is_int($weightInTons)) {
        if ($weightInTons % 7 == 0) {
            return "Создано " . $weightInTons / 7 . " штук";
        }
        else {
            return "Создано " . floor($weightInTons / 7) . " штук, остаток - " . $weightInTons % 7 . " грамм";
        }
    }
    return false;
}

echo func(51);

?>