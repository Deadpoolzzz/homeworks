<?php

//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$arr = array ('Понедельник',
    'Вторник', 'Среда',
    'Четверг', 'Пятница',
    'Суббота', 'Воскресенье');
foreach ($arr as $v) {
    if ($v == 'Суббота' or $v == 'Воскресенье') {
        echo "<b> $v </b> <br>";
    }
    else {
        echo "$v <br>";
    }
}