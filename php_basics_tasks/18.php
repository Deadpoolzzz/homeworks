<?php 

//Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на эквивалентность, с помощью if выведите "эквивалентны" или "не эквивалентны".

$a = '78';
$b = 78;

if ($a === $b) {
	echo "Число A эквивалентно числу B";
} else echo "Число A не эквивалентно числу B";