<?php

//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'. Циклы while и for

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$line = '-' ;
foreach ($arr as $item) {
    $line .= $item . '-';
}
echo $line;