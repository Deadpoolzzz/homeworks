<?php

//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$day = 'Вторник';
$arr = array ('Понедельник', 'Вторник', 'Среда',
    'Четверг', 'Пятница',
    'Суббота', 'Воскресенье');
foreach ($arr as $v) {
    if ($v == $day) {
        echo "<dfn> $v </dfn><br>";
    }
    else {
        echo "$v <br>";
    }
}