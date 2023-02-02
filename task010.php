<?php

$min = 114;
if ($min > 59): $min = 59; 
elseif ($min < 0): $min = 0;
endif;

if ($min < 15):
    echo "1/4 часа";
elseif ($min < 30):
    echo "2/4 часа";
elseif ($min < 45):
    echo "3/4 часа";
else:
    echo "4/4 часа";
endif;

?>