<?php
include '15.php';
$operator = $_POST ['operator'];
$a = $_POST ['a'];
$b = $_POST ['b'];
//echo $a;
//echo $operator;
//echo $b;
//var_dump($operator);
if ($b==0 and $operator=='/'){
    echo "на 0 делить нельзя";
}else {
    if ($operator == '+') {$result=$a + $b; }
    if ($operator == '-') {$result=$a - $b;}
    if ($operator =='/')  {$result=$a / $b;}
    if ($operator == '*') {$result=$a * $b;}
    if ($operator == '%') {$result=$a % $b;}
    echo $a .$operator .$b .'='  .$result;
}
?>