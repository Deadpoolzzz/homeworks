<?php

//Вывести таблицу умножения

for ($i=1; $i<=10; $i++) {
    echo "$i : <br>";
    for ($j=1; $j<=10; $j++){
        $res = $i*$j;
        echo "$i * $j = $res <br>";
    }
}