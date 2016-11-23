<?php

//Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".


function reverse($arg)
{
    $b='';
    for ($i = strlen($arg) - 1; $i >= 0; $i--) {
        
        $b .= $arg[$i];
    }
    return $b;
}
include '9.html';
echo reverse($_POST['text1']);