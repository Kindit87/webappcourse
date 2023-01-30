<?php

$lang = "ru";

switch ($lang) {
    case 'en':
        $arr = [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
        ];
        break;
    case 'ru':
        $arr = [
            "Понедельник",
            "Вторник",
            "Среда",
            "Четвверг",
            "Пятница",
            "Суббота",
            "Воскресенье"
        ];
        break;
}
var_dump($arr);

?>