<?php 

$string = "We are family";

$result = preg_match("%are$%",$string);//false
$result = preg_match("%family$%",$string);//true
$result = preg_match("%we$%",$string);//false
$result = preg_match("%Family$%",$string);//false
$result = preg_match("#We$#",$string);//false
$result = preg_match("%^are%",$string);//false

$result = preg_match("#^We#",$string);//true
$result = preg_match("*^we*",$string);//false
$result = preg_match("/[a-f]/",$string);//true
$result = preg_match("/[A-Z]/",$string);//true

$string = "my luck number is 567";

$result = preg_match("/[A-Z]|[a-z]/",$string);// true
$result = preg_match("/[a-z]$/",$string);//false
$result = preg_match("/^[5-9]/",$string);//false
$result = preg_match("/^[a-z]/",$string);//true
$result = preg_match("/[^a-z]/",$string);//true
$result = preg_match("/^[5-9]/",$string);//false

$string ="admin@gmail.com";

$result = preg_match("/@/",$string);//true
$result = preg_match("/m/",$string);//true
$result = preg_match("/m+/",$string);//true
$result = preg_match("/i+/",$string);//true
$result = preg_match("/p+/",$string);//false
$result = preg_match("/1*/",$string);//true
$result = preg_match("/m?/",$string);//true

$result = preg_match("/m{2}/",$string);// false (m contains more than 2 times);
$result = preg_match("/m{1}/",$string);//true
$result = preg_match("/m{1,3}/",$string);//true
$result = preg_match("/m{2,3}/",$string);//false
$result = preg_match("/m{2,}/",$string);//false

$result = preg_match("/\s/",$string);//false contain space or not

$string = "V8 Engine";
$result = preg_match("/\d/",$string);//true
$result = preg_match("/\s/",$string);//true

$string = "8";
$result = preg_match("/\D/",$string);// false (contain anything except digit);
$result = preg_match("/\w/",$string);// is there any word contain or not
$result = preg_match("/\W/",$string);

$string = "@";
$result = preg_match("/\D/",$string); //true
$result = preg_match("/\d/",$string);//false
$result = preg_match("/\w/",$string); //false
$result = preg_match("/\W/",$string);//true

$string = "admin@gmail.com";
$result = preg_match("/a\w{1}m/",$string);//true // is there any words contain between a and m
$result = preg_match("/a\w{2}m/",$string);//false
$result = preg_match("/a\W{1}m/",$string);//false
$result = preg_match("/a\w{1,2}m/",$string);//true
$result = preg_match("/a\w{2,3}m/",$string);//false
$result = preg_match("/a\w{2,}m/",$string);//false
$result = preg_match("/a\w{1,}m/",$string);//true
// echo $result;

$string = "admin@gmail.com";
$result =  preg_match("/a.m/",$string);// true(contain 1 word between a and b)
$result = preg_match("/a..m/",$string);// false( contain 2 words between a and b)
$result = preg_match("/a.{2}m/",$string);//false( contain 2 words between a and b)
$result = preg_match("/a.{1,4}m/",$string);//true
$result = preg_match("/a.{13,}m/",$string);//true
// echo $result;

$string = "prererhp";
$result = preg_match("/.{3}/",$string);// have to contain 3 or more
$result = preg_match("/hp/",$string);//true
$result = preg_match("/p(hp)/",$string);//false
$result = preg_match("/p(hp)+/",$string);//false (must to have hp behind p)
$result = preg_match("/p(hp)*/",$string);//true(can)(optional)

$string = "Vv";
$result = preg_match("/.{2}/",$string);//true
$result = preg_match("/.{3}/",$string);//false
$result = preg_match("/^.{2}$/",$string);//true
$result = preg_match("/^.{3}$/",$string);//false

$string = "welcome to our <i>programming section</i>";
$result = preg_match("/<i><\/i>/",$string);//false
$result = preg_match("/<i>\w<\/i>/",$string);//false
$result = preg_match("/<i>\W<\/i>/",$string);//false
$result = preg_match("/<i>\W<\/i>/",$string);//false
$result = preg_match("/<i>.<\/i>/",$string);
$result = preg_match("/<i>.*<\/i>/",$string);
$result = preg_match("/<i>(.*)<\/i>/",$string);

$string = "admin@gmail.net";
$result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string);// true


// preg_replace(pattern,replacement,string);
$string = "I love php";
$result = preg_replace("/php/","javascript",$string);
$result = preg_replace("/PHP/i","javascript",$string);// have to insert i to avoid case sensitive
$result = preg_replace("/\s/",'',$string);//Ilovephp

//bracket expressions
$string = "admin123@gmail. com";
$result = preg_replace("/[[:space:]]/","",$string);
$result = preg_replace("/[[:space:]]/","",$string);
$result = preg_replace("/[[:alpha:]]/","x",$string);
$result = preg_replace("/[[:digit:]]/","x",$string);
$result = preg_replace("/[[:alnum:]]/","x",$string);
$result = preg_replace("/[[:punct:]]/","x",$string);

$string = "Admin123@gmail.Com";
$result = preg_replace("/[[:upper:]]/","x",$string);
$result = preg_replace("/[[:lower:]]/","x",$string);

$string = "Are you ready to learn PHP framework";
$result = preg_replace(["/PHP/","/Framework/"],["Javascript","Libaries"],$string);
$result = preg_replace(["/PHP/","/Framework/i"],["Javascript","Libaries"],$string);


$string = "My lucky number is 007 but i ogt ticket number 5700";
$result = preg_replace("/[0-9]/","x",$string); //My lucky number is xxx but i ogt ticket number xxxx
$result = preg_replace("/[0-9]+/","x",$string);//My lucky number is x but i ogt ticket number x

                            // no limit = 0 (or) null 
//preg_split(pattern,string,limit,flags);

$string = "my lucky number is 007";
$result = preg_split("/\s/",$string);
// echo $result; // error, array to string conversion
echo "<pre>".print_r($result,true)."</pre>";
echo $result[0];//my
echo $result[4];//007

$result = preg_split("/\s/",$string,2);
echo "<pre>".print_r($result,true)."</pre>";
echo $result[0];//My
echo $result[1];// lucky number is 007

$string = "my lucky number is 007 but I got ticket number 57000";
$result = preg_split("/\s/",$string);
$result = preg_split("/[\s]/",$string);
$result = preg_split("/\s,/",$string); //[0] => my lucky number is 007 but I got ticket  number  5700

$result = preg_split("/[\s,]/",$string,NULL,PREG_SPLIT_NO_EMPTY);
$result = preg_split("/[\s,]/",$string,0,PREG_SPLIT_NO_EMPTY);
$result = preg_split("//",$string);
$result = preg_split("//",$string,0,PREG_SPLIT_NO_EMPTY);
$result = preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY);
echo "<pre>".print_r($result,true)."</pre>";


// preg_quote(string,delimiter);

$string = "he\'s my father, do you know him ?";
$result = preg_quote($string);
$result = preg_quote($string,"o");
echo $result;

// preg_match_all(pattern,string,match/return,flags);
$string = "winning numbers are 227-000 & 002-777, but my ticket number is 007-222";
preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
preg_match_all("/\d+-\d+/",$string,$result,PREG_PATTERN_ORDER);
// echo $result;// error
echo "<pre>".print_r($result,true)."</pre>";




// lookahead & lookbehind
//(?=) positive lookahead (or) regex lookahead = right hand side
//(?<=) positive lookbehind (or) regex lookbehind = left hand side

//(?!) negative lookahead or regex lookahead
//(?<!) negative lookahead or regex lookahead

// $string = "aungkyaw@cisco.com";
// $rescult = preg_match(,);
?>
<!-- $ must me in end (case sensitive);
^ caret or circumflex, shift + 6, must be start -->