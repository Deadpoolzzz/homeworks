<?php

//Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.

$number = 234523452345;
$string = (string)$number;
$arrayNumber = str_split($string);
$sum = 0;
foreach ($arrayNumber as $item) {
    echo "<br> $item";
    if (5 == $item) {
        $sum = $sum + 1;
    }
}
echo "<br> Количество повторений:  $sum";