<?php 

// => Super Global Variables

// 1. $GLOBALS
// 2. $_SERVER 
// 3. $_REQUEST 
// 4. $_POST 
// 5. $_GET 
// 6. $_FILES 
// 7. $_ENV 
// 8. $_COOKIE 
// 9. $_SESSION 

// => 1. $GLOBALS
// $x = 100;
// $y = 200;
// function sumrescultone(){
// 	$total = $x + $y;
// 	return $total;
// }

// echo sumrescultone();
// echo $total;

// function sumrescultone(){
// 	$GLOBALS["total"] = $GLOBALS['x']+$GLOBALS['y'];
// 	return $GLOBALS["total"];
// }
// echo sumrescultone();
// echo $GLOBALS["total"];
// echo $total;

echo "<hr/>";

//=>2. $_SERVER
echo $_SERVER["PHP_SELF"];
//   /phpbatch4/partone/L12superglobalvariables.php
echo "<hr/>";
echo $_SERVER["HTTP_USER_AGENT"];
echo "<hr/>";
echo $_SERVER["HTTP_HOST"];
echo "<hr/>";
echo $_SERVER["SERVER_NAME"];// localhost(return the name of host server eg:www.yourdomain.com )
echo "<hr/>";
echo $_SERVER["SERVER_SOFTWARE"];
echo "<hr/>";
echo $_SERVER["SERVER_PORT"];
echo "<hr/>";
echo $_SERVER["SERVER_PROTOCOL"];
echo "<hr/>"; 
echo $_SERVER["SERVER_SIGNATURE"];
echo "<hr/>";
echo $_SERVER["REQUEST_METHOD"];
echo "<hr/>";
echo $_SERVER["REMOTE_ADDR"];
echo "<hr/>";
echo $_SERVER["SCRIPT_FILENAME"];
echo "<hr/>";
echo $_SERVER["SCRIPT_NAME"];
echo "<hr/>";
echo $_SERVER["QUERY_STRING"];//http://localhost/phpbatch4/partone/L12superglobalvariables.php?dkdkd
?>
