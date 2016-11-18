<?php

//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке. 1, 2, 3 4, 5, 6 7, 8, 9


$arr= array (1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach($arr as $k => $v) {
    if($k <= 2) {
        $a = $v;
        echo $a . "," . "\n";
    }
}
echo "<br>";
foreach($arr as $k => $v) {
    if($k > 2 and $k <=5) {
        $a = $v;
        echo $a . "," . "\n";
    }
}
echo "<br>";
foreach($arr as $k => $v) {
    if($k > 5 and $k <=8) {
        $a = $v;
        echo $a . "," . "\n";
    }
}
echo "<br>";