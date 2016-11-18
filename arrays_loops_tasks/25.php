<?php

//Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.

$arrayRandom = [];
$sizeArray = 30;
$i = 0;
while ($i<$sizeArray) {
    $arrayRandom[$i] = rand();
    echo $arrayRandom[$i] . PHP_EOL;
    $i++;
}
$min = $arrayRandom[0];
$numMin = 0;
$max = $arrayRandom[0];
$numMax = 0;
foreach ($arrayRandom as $key => $item) {
    if ($max < $item) {
        $max = $item;
        $numMax = $key;
    }
    if ($min > $item) {
        $min = $item;
        $numMin = $key;
    }
}
$posMax = $numMax+1;
$posMin = $numMin;
echo "<br> Максимальное значение $max находится под индексом: $posMax";
echo " <br> Минимальное значение $min находится под индексом: $posMin";
echo "<br> Макссив после перестановки элементов <br>";
$arrayRandom[$numMax] = $min;
$arrayRandom[$numMin] = $max;
foreach ($arrayRandom as $item) {
    echo $item . PHP_EOL;
}