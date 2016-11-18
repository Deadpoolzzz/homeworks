<?php

// Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.

$arrayRandom = [];
$sizeArray = 10;
$i = 0;
echo "Исходный массив: <br>";
while ($i<$sizeArray) {
    $arrayRandom[$i] = rand(0 , 100);
    echo $arrayRandom[$i] . PHP_EOL;
    $i++;
}
$mult = 1;
foreach ($arrayRandom as $key => $item) {
    if ($item > 0 and $key % 2 == 0 ) {
        $mult = $mult * $item;
    }
}
echo "<br>Произведение елементов с парным индексом равно: $mult <br>";
foreach ($arrayRandom as $key => $item) {
    if ($item > 0 and $key % 2 != 0) {
        echo $item . PHP_EOL;
    }
}