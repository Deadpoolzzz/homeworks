<?php

//Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.


$i = 1;
while ($i <= 9) {
    $num = 1;
    $line = "";
    while ($num <= $i){
        $line .= "$i";
        $num++;
    }
    echo "$line <br>";
    $i++;
}