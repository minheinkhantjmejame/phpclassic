<?php 

// => comparison operators

// ==
// ===
// != or <> not equal 
// >
// < 
// >=
//  <=
//  ? (ternary operator)

// echo (stm1 comp stm2) ? true :false;
$num1 = 10;
$num2 = "20"; // data type is not case sensitive

echo $num1 == $num2 ? "your condition is true" : "your comdition is false";

echo ($num1 == $num2) ? "your condition is true" : "your comdition is false";

echo ($num1 === $num2) ? "your condition is true" : "your comdition is false"; // 

echo $num1 != $num2 ? "your condition is true" : "your comdition is false";

echo $num1 == $num2 ? "your condition is true" : "your comdition is false";

echo $num1 <> $num2 ? "your condition is true" : "your comdition is false";

echo $num1 > $num2 ? "your condition is true" : "your comdition is false";

echo $num1 < $num2 ? "your condition is true" : "your comdition is false";

?>