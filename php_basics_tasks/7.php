<?php

//Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).

$age = 17;
if ($age >=18 && $age <= 59) {
	echo "Вам еще работать и работать";
} elseif ($age <= 17) {
	echo "Вам еще рано работать";
} elseif ($age > 59) {
	echo "Вам пора на пенсию";
}