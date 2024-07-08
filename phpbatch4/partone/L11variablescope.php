<?php 

// variable scope
// (i) Global Variable scope
// (ii) Local Variable scope
// (iii) Static Variable scope

$num1 = 100;// Global Variable 

function funone(){
echo "Global Variable print outside = $num1";
}
funone();// error cz outside the function vabriable
echo "global vabiable print outside = $num1";

function funtwo(){
$num2 = 200;// local variable
echo "local vabiable print in function = $num2";
}
funtwo();// local variabel print in the function= 200;
echo "local variable outside = $num2";


// => global keyword
$num3 = 300;
$num4 = 400;
function funthree(){
	// global $num3;
	// global $num4;

	global $num3,$num4;
    global $rescult;


	$rescult = $num3 + $num4;
	echo "this is rescult, print by funthree $rescult";
}
 funthree();
 echo "local varaiable print outside = $rescult";

$num5 = 500;
$num6 = 600;
function funfour(){
	$GLOBALS["sum"] = $GLOBALS["num5"]+ $GLOBALS["num6"];
    echo "this is sum = $sum";

}

funfour();
echo "local variable print outside = $sum";

$num7 = 700;
function funfive(){
       global $num7;

       $num7++;
       echo $num7;
}

funfive();
funfive();
funfive();
funfive();

function funsix(){
	$num8 = 800;
	$num8 ++;
	echo $num8;
}

funsix();


// --> Static keyword
function funseven(){
	static $num9 = 900;
	$num9++;
	echo $num9;
}

funseven();
funseven();
funseven();
funseven();

// =>passing by reference
$num10 = 100;
function funeight($num10){
	$num10 = 10000;
	echo $num10;
}

echo $num10;
funeight($num10);
echo $num10;



$num11 = 110;
function funnine(&$num11){
	$num11 = 11000;
	echo $num11;
}

echo $num11;
funeight($num11);
echo $num11;


funnine();

$name = "aung aung";
$fullname = "aung aung oo";
function funten($val){
      $val = 'su su';
      echo $val;
}
echo $name;
funten($name);
echo $name;
echo $fullname;



?>