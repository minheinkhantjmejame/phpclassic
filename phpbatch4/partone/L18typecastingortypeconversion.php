<?Php  
// =>data type
// string 
// int 
// float 
// bool 
// array 
// object 
// unset 

//cast to string 

$val1 = "hello";
var_dump($val1);
$rescult = (string) $val1;
var_dump($rescult);

$val2 = 10;
var_dump($val2);
$rescult = (string)$val2;
var_dump($rescult);

$val3 = 35.46;
var_dump($val3);
$result = (string) $val3;
var_dump($result);

$val4 = true;
var_dump($val4);
$result = (string)$val4;
var_dump($result);

$val5 = NULL;
var_dump($val5);
$result = (string)$val5;
var_dump($result);

// =>cast to int (int datatype )

$val1 = "hello";
var_dump($val1);
$result = (int)$val1;
var_dump($result);

$val2 = 10;
var_dump($val2);
$rescult = (int)$val2;
var_dump($rescult);

$val3 = 35.46;
var_dump($val3);
$result = (int) $val3;
var_dump($result);

$val4 = true;
var_dump($val4);
$result = (int)$val4;
var_dump($result);

$val5 = NULL;
var_dump($val5);
$result = (int)$val5;
var_dump($result);

//=> cast to float 
$val1 = "hello";
var_dump($val1);
$result = (float)$val1;
var_dump($result);

$val2 = 10;
var_dump($val2);
$rescult = (float)$val2;
var_dump($rescult);

$val3 = 35.46;
var_dump($val3);
$result = (float) $val3;
var_dump($result);

$val4 = true;
var_dump($val4);
$result = (float)$val4;
var_dump($result);

$val5 = NULL;
var_dump($val5);
$result = (float)$val5;
var_dump($result);

// =>cast to boolean
$val1 = "hello";
var_dump($val1);
$result = (bool)$val1;
var_dump($result);

$val2 = 10;
var_dump($val2);
$rescult = (bool)$val2;
var_dump($rescult);

$val3 = 35.46;
var_dump($val3);
$result = (bool) $val3;
var_dump($result);

$val4 = true;
var_dump($val4);
$result = (bool)$val4;
var_dump($result);

$val5 = NULL;
var_dump($val5);
$result = (bool)$val5;
var_dump($result);


// cast to array 
$val1 = "hello";
var_dump($val1);
$result = (array)$val1;
var_dump($result);

$val2 = 10;
var_dump($val2);
$rescult = (array)$val2;
var_dump($rescult);

$val3 = 35.46;
var_dump($val3);
$result = (array) $val3;
var_dump($result);

$val4 = true;
var_dump($val4);
$result = (array)$val4;
var_dump($result);

$val5 = NULL;
var_dump($val5);
$result = (array)$val5;
var_dump($result);

// cast to object 
$val1 = "hello";
var_dump($val1);
$result = (object)$val1;
var_dump($result);

$val2 = 10;
var_dump($val2);
$rescult = (object)$val2;
var_dump($rescult);

$val3 = 35.46;
var_dump($val3);
$result = (object) $val3;
var_dump($result);

$val4 = true;
var_dump($val4);
$result = (object)$val4;
var_dump($result);

$val5 = NULL;
var_dump($val5);
$result = (object)$val5;
var_dump($result);


// cast to null 
$val1 = "hello";
var_dump($val1);
$result = (unset) $val1;
var_dump($result);

$val2 = 10;
var_dump($val2);
$rescult = (unset)$val2;
var_dump($rescult);

$val3 = 35.46;
var_dump($val3);
$result = (unset) $val3;
var_dump($result);

$val4 = true;
var_dump($val4);
$result = (unset)$val4;
var_dump($result);

$val5 = NULL;
var_dump($val5);
$result = (unset)$val5;
var_dump($result);


?>