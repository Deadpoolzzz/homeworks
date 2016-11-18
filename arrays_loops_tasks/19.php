<?php

//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$day = date(l);
foreach ($arr as $v) {
    if ($v == $day) {
        echo "<dfn> $v </dfn><br>";
    }
    else {
        echo "$v <br>";
    }
}