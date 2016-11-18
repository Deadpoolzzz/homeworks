<?php

//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.

$lang = ['html', 'css', 'php', 'js', 'jq'];

foreach ($lang as $langs) {
	echo $langs . '<br>';
}