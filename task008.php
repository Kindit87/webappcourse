<?php

$arr = [
    "en" => [
        1 => "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
    ],
    "ru" => [
        1 => "Понедельник",
        "Вторник",
        "Среда",
        "Четверг",
        "Пятница",
        "Суббота",
        "Воскресенье"
    ]
];
echo $arr["en"][3] . " " . $arr["ru"][3];
?>