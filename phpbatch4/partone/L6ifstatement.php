<?php 

// => if statement 

$x = 10;
$y = 20;

if($x > $y){
   echo "your condition is yes";
}


if($x < $y){
   echo "your condition is yes";
}

// => if else

if($x > $y){
   echo "your condition is yes";
}else{
	echo "your condition is no";
} 


// => Short hand 

if($x < $y) echo "yes, x less than y"; else echo "no x greater than y";

$color = "gray";
$colorvalue = $color;// assign by reference 

echo $color ;
echo $colorvalue; 

if($colorvalue === "red"){
	echo "my fav color is red";
}else{
	echo "I hate red color";
}

if($colorvalue == "red"){
	echo "my fav color is red";
}else{
	echo "I hate red color";
}


if($colorvalue === "red"){
	echo "my fav color is $color";
}else{
	echo "I hate $color";
}

$a = 100;
$b = 200;
$c = 300;

if($a < $b){
	echo "it is true";
}else{
	echo "it is false";
}

if($a < $b && $b < $c){
	echo "it is true";
}else{
	echo "it is false";
}


// default ka right to left condition check thwar dar
if($a < $b || $b > $c && $a > $c){
	echo "it is true";
}else{
	echo "it is false";
}

if(($a < $b || $b > $c) && $a > $c){
	echo "it is true";
}else{
	echo "it is false";
}

if(!($a < $b)){
    echo "it is true";
}else{
	echo "it is false";
}

if ($b > $c){
	echo "it is true";
}elseif( $b === 200){
	echo "it is equal";
}else{
	echo "it is false";
}

// or
if ($b > $c) echo "it is true"; elseif( $b === 200) echo "it is equal"; else echo "it is false";

// or
if ($b > $c)
	echo "it is true";
elseif( $b === 200)
	echo "it is equal";
else
	echo "it is false";


$phone = "iphone";
switch($phone){
    case "sony":
        echo "i can't by sony phone";
        break;

    case "mi":
        echo "i hate apple products";
        break;

    case "mi":
     	echo "oki, i can buy";
        break;
    
    default:
    echo "i love deypad";
       // break;




?>