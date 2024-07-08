<?php 
 
//=>Check varaible type

// =>is_string()

$val1 = "save myanmar";
echo "val1 is ".is_string($val1);//true 1

$val2 = 0;
echo "val2 is".is_string($val2);// false 

$val3 = 50;
echo "val3 is".is_string($val3);


$val4 = "50";
echo "val3 is".is_string($val4);


$val5 = true;
echo "val3 is".is_string($val5);

$val6 = "";
echo "val6 is".is_string($val6);


// =>is_numeric(variable)function
$val7 = 50;
echo "$val7 is".is_numeric($val7);
echo "$val7 is".is_int($val7);
echo "$val7 is".is_integer($val7);

$val8 = 34.56;
echo "val8 is ".is_numeric($val8);
echo "val8 is ".is_int($val8);
echo "val8 is ".is_integer($val8);

$val9 = "50";
echo "val 9 is ".is_numeric($val9);
echo "val9 is".is_int($val9);
echo "val9 is".is_integer($val9);

$val9 = 40;
echo "val9 is".is_float($val9);

$val10 = 34.56;
echo "val10 is".is_float($val10);


$val11 = "34.56";
echo "val11 is".is_flaot($val11);

// =>is_boolean(variable)function

$val12 = true;
echo "val12 is".is_bool($val12);

$val13 = FALSE;
echo "val13 is".is_bool($val13);

$val14 = 1;
echo "val14 is".is_bool($val14);

$val15 = "true";
echo "val15 is".is_bool($val15);

// =>is_array(variable)function
$val16  = "help myanamr";
echo "val16 is ".is_array($val16);

$val17 =["aung aung","su su"];
echo "val7 is".is_array($val17);

$val18 = array("hinn hinn");
echo "val18".is_array($val18);

// =>is_null(variable)function

$val19 = null;
echo "val19 is".is_null($val19);

$val20 = null;
echo "val20 is".is_null($val20);

$val21 = null;
echo "val21 9 s".is_null($val21);

$val22 = "null";
echo "val22 is".is_null($val21);

$val21 = FALSE;
if(empty($val21)){
	echo "your variable is empty";
}else{
	echo "your varaible is not empty";
}

if(isset($val21)){
	echo "your variable with value";
}else{
	echo "your variable without value";
}

// =>isset() vs unset()

$city = "yangon";
$country = "thailand";
echo isset($city)? "yes":"no";
echo $city;
echo $country;

unset($city);
echo $city;// undefined variable
echo $country;

$val6 = 50;
echo gettype($val6);

$val7 = 454.0;
echo gettype($val7);

$val9 = "minheinkhant";
echo gettype($val9);

$val12 = true;
echo gettype($val12);
?>

