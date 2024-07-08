<?php  

// =>constant variable

define("variablename","value");
//string/int/boolean/float
//variablename should be uppercase
//redefine are deny

define('FULLNAME',"Honey Nway Oo");
echo FULLNAME;

// define('FULLNAME','Ma Ma Mya');
// echo FULLNAME;

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","0946563212");
define("DB_NAME","phphone");

echo DB_HOST;
echo DB_USER;
echo DB_PASS;
echo DB_NAME;

// =>constant("variablename")function 

echo constant("DB_HOST");
echo "<br/>";
echo constant("DB_USER");
echo "<br/>";

// =>constant :const keyword
//string/int/boolean/ float oki
//variablename should be uppercase
//redefine are deny



?>
