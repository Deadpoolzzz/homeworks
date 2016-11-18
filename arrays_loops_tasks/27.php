<?php

//Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. 

$row = 6;
$cols = 6;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$i = 1;
echo "<table style='border: 1px solid black;'>";
while ($i <= $row){
    $j = 1;
    echo "  <br> <tr style='border: 1px solid black;'>";
    while ($j <= $cols) {
        $number = rand();
        echo "<td style='background-color: " . $colors[rand(0, 6)] . " ' > $number </td>";
        $j++;
    }
    echo "</tr >";
    $i++;
}
echo "</table>";