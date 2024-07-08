<?php 

// abs() function

echo abs(32);
echo abs(-32);
echo abs(32.75);
echo abs(-32.75);

// =>round(number) function 
// => round(number,precision) function 

echo round(42.64);
echo round(32.84);
echo round(32.44);
echo round(32.54);
echo round(-32.54);
echo round(32.64325,2);
echo round(32.6445,2);

// ceil(number) function

echo ceil(44.5);
echo ceil(86.3);
echo ceil(89.0);
echo ceil(-87.3);

//floor(number) function 
echo floor(44.5);
echo floor(86.3);
echo floor(89.0);
echo floor(-99.6);

// max(number) function

echo max(2,4,20,6,20,240);
echo max(2,4,'30',3.5,-34,30);
echo max(2,4,"1000",34,-3);
echo max([2,4,5,"100",-40,8,10]);

//=> pow(base,exponent) function
echo pow(2,4);
echo pow(3,4);

// => log(number,base) function
echo log(10,2);
echo log(20,2);
echo log(80,3);

//=> sqrt(number) function
echo sqrt(4);
echo sqrt(9);
echo sqrt(0.89);
echo sqrt(-4);

//=> rand(number) function
echo rand();

//=> getrandmax();
echo getrandmax();

//=> rand(min,max)function
echo rand(100,10000);

$users = ["aung aung","kyaw kyaw","zaw zaw","maw maw","tin tin"];
echo $users[rand(0,5)];

//microtime() function
echo microtime();
echo microtime(true);

//uniqid()function
echo uniqid();

//number_format(number,decimal) function
// number_format(number,decimal,decimal-separator,thousands-separator);
echo number_format(1000,2);
echo number_format(125000,2);
echo number_format(12500,2,'.',',');
echo number_format(12500,2,'.','_');
echo number_format(125000,0,'.','-');


?>