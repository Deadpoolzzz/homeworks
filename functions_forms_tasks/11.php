<?php

/*Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.
Пример:

Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';*/

function text($text){
    $b='';
    $text = mb_strtoupper(mb_substr($text,0,1)).mb_substr($text,1,strlen($text));
    for($i = 0;$i < mb_strlen($text);$i++){
        if($text[$i] == '.'){
            $text[$i+2] = mb_strtoupper($text[$i+2]);
        }
        $b.=$text[$i];
    }
    return $b;
}
$a='Bla-bla-bla. developing is cool. ok';
echo text($a);