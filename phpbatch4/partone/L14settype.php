<?php 

// =>settype(variable,type) function

$val1 = "50";
echo gettype($val1);
settype($val1,"integer");
echo gettype($val1);

$val2 = 100;
echo gettype($val2);
settype($val2,"string");
echo gettype($val2);

$val3 = true;
echo gettype($val3);
settype($val3,"integer");
echo gettype($val3);

$val4 = False;
echo gettype($val4);
settype($val4,"string");
echo gettype($val4);

// $val5 = "string";
// echo gettype($val5);
// settype($val5,"integer");
// echo gettype($val5);




?>