<?php 

// user defined functions

//   function name(){
//   	code to be executed;
// }

//   	// ---------
//   	parameter function (or) argument functions 
//     (i) Single 
//     (ii) multi 

//      function name($arg1){
//      	code to be executed;
//      }

//      function name($arg1,$arg2){
//      	code to be executed;
//      }

     //------------------

     // default parameter function or default argument function
     
     // function name($name = "aung aung",$age=20){
// 	code to be executed;
// }

   function myfun(){
   	echo "my name is mr.tin";
   }
   myfun();
   myfun();

   function myfun1(){
   	$num1 = 10;
   	$num2 = 20;
   	$cal = $num1 + $num2;
   	echo $cal;
   }
   myfun1();

   function singlefun($name){
   	echo "my name is $name";
   }
   singlefun("aung aung");
   singlefun("su su");

   function multifun($name,$age){
   	echo "my name is  $name and i am {$age} years old.";
   }
   multifun("kyaw kyaw",20);
   multifun("nandar",30);


   function defaultfun($name="hla hla"){
   	echo "my name is {$name} ";
   }
   defaultfun();
   defaultfun("aye aye");

   function defaultfun1($num1= 10, $num2 = 20, $num3 = 30){
   	$cal = $num1 + $num2 + $num3;
   	echo $cal;
   }

   defaultfun1();
   defaultfun1(50,10);
   defaultfun1(70,5,15);


   // return

   function myreturn($num1){
   	$cal = $num1 + 10;
   	return $cal;

   }

   echo myreturn(50);

   function returnfun1(){
   	return $cal = $num1+ 10;
   }
   echo returnfun1(100);

   function returnfun2($num1,$num2,$num3){
   	$cal = $num1 + $num2 + $num3;
   	return $cal;
   }

   echo returnfun2(10,20,30);

   function returnfun3($num1= 10,$num2 = 20, $num3= 30){
   	$cal = $num1 + $num2 + $num3;
   	return $cal;
   }

   echo returnfun3(50);
   echo returnfun3();

   // => Dynamic function call

   $dyn1 = myreturn(100);
   echo $dyn1;

   $dyn2 = returnfun3();
   echo $dyn2;

   $dyn3 = "returnfun3"; //dynamic function
   echo $dyn3;
   echo $dyn3(100);

   $myfun = "aung aung";
   echo $myfun;
   
   // function name shi ma shi sit chin
   if(function_exists($myfun)){
     echo "yes, your variable value is already in some kind of function;"
   }else{
   	 echo "no";
   }
?>