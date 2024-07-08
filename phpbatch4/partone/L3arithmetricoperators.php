<?php

// => Arithmetic operators

// + - × %

$num1 = 100;
$num2 = 200;
$num3 = 20.33;
$city = "Mawlamyine";
$car = false;
$myarrs = ['aung aung','kyaw kyaw'];// short hand syntax array
$colors = array("red","green","blue");

echo $num1;
echo $num2;
echo $num1+ $num2;

//echo $myarrs; //error,

var_dump($num1);
var_dump($num2);
var_dump($city);
var_dump($car);
var_dump($colors);

$num4 = true;
$num5 = 10;
$num = "20";

var_dump($num5,$num6);
echo $num5 + $num6;
echo $num6 - $num5;
echo $num4 + $num5;
var_dump($num5+$num6);

// overwrite or override

$num5 = 50;
$num6 = "60";
var_dump($num5,$num6);
echo $num5+$num6;


?>