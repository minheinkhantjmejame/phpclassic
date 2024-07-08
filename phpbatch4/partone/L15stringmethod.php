<?php 

// =>strlen(string)function 

$words = "save myanmar";
echo strlen($words);//12

// =>str_word_count(string) function
// =>str_word_count(string,return) function

// 0-default(string)
//1 - return an array
//2 - return an array

$text = "save myanmar country";
echo str_word_count($text);//3
echo str_word_count($text,0);
echo "<pre>".print_r(str_word_count($text,1),true)."</pre>";
echo "<pre>".print_r(str_word_count($text,2),true)."</pre>";


// =>ucwords(string)function 
// =>ucwords(string,delimiters) function

$country = "welcome to myanmar country,i live in yangon";
echo ucwords($country);
echo ucwords($country,",");

// => lcfirst() function
$message = "welcome to yangon, I live in tamwe";
echo ucfirst($message);

$message = "Welcome to Yangon, I live in tamwe";
echo lcfirst($message);

// =>strtoupper(string)function
$string = "welcome to my country";
echo strtoupper($string);

$str = "Welcome to My country";
echo strtolower($str);  

// =>chunk_split(string,length,delimiter)function
$letters = "Myanmar Country";
echo chunk_split($letters,1,".");
echo chunk_split($letters,3,"-");

// =>substr(string,start index/offset,end length) function
$mycountry = "welcome myanmar";
echo substr($mycountry,0);// welcome myanmar
echo substr($mycountry,8);
echo substr($mycountry,0,7);
echo substr($mycountry,0,9);

// =>strpos(string,find) function
// =>strrpos(string,find) function
// =>stripos(string,find) function
// =>strripos(string,find) function


$captions = "Lorem Ipsum is simply dummy text of the printing and typesetting industry ipsum.";
echo strpos($captions,"Ipsum");
echo strrpos($captions,"Ipsum");// last ipsum
echo stripos($captions,"Ipsum");// rr ka case sensitive ko sit tar
echo strripos($captions,"Ipsum");

// =>str_replace (search, replace, string) function
$topic = "save myanmar";
echo str_replace("myanmar","CRPH",$topic);


//=> substr_replace(string,replace,start index)function
//=> substr_replace(string,replace,start index,end length)function

$greeting = "welcome myanmar";
echo substr_replace($greeting,"hello",0);
echo substr_replace($greeting,"Thailand",0);

echo substr_replace($greeting,"hello",0,0);
echo substr_replace($greeting,"Hello",0,3);
echo substr_replace($greeting,"hello",0,7);

// =>trim()function
// =>trim(string,characters) function

$title = "welcome to my country";
echo trim($title);

$subtitle = "welcome to my country";
echo trim($subtitle, "Wel");

// =>ltrim() function 
// =>ltrim(string,characters) function 

$sayhi = "/Mingalarpar/";
echo ltrim($sayhi,"/");

// =>rtrim() function 
// =>rtrim(string,characters) function 

$sayhello = "/Mingalarpar/";
echo rtrim($sayhello,"/");

// =>str_repeat() function 
// =>str_repeat(string,count)function 

echo str_repeat("a kyal gyi",3);

// =>strcmp(string1,string2) function (case - sensitive)
// 0 = if the two strings are equal 
// <0 = if string1 is less than string2 
// >0 = if string1 is greater than string 2

echo strcmp("i love my job","i love my job");
echo strcmp("i love my job","i love");
echo strcmp("i love","i love my job");

$words = "welcome to my country";
echo "<pre>".print_r(explode(" ",$words),true)."</pre>";
echo "<pre>".print_r(explode(" ",$words,0),true)."</pre>";
echo "<pre>".print_r(explode(" ",$words,1),true)."</pre>";
echo "<pre>".print_r(explode(" ",$words,2),true)."</pre>";
echo "<pre>".print_r(explode(" ",$words,3),true)."</pre>";

// =>implode(separator,array) function
$words =["welcome","to","my","city"];
echo implode(" ",$words);
echo implode("-",$words);

// =>join(separatro,array)function

// join(separator,array)function
$words = ["welcome","to","my","village"];
echo join(" ",$words);
echo join("_",$words);

=>number_format(number)function 
=>number_format(number,decimals)

echo number_format("100000");
echo number_format("100000",2);

// =>stripslashses(string) function

$str = 'he\'s my mother';
echo $str;

$str = "he's my father";
echo $str;
echo stripslashes($str);

// => basename(path) function
// => basename(path,suffix)

$path = "./assets/img/cover.jpg";
echo $path;
echo basename($path);
echo basename($path,".jpg");

$filepath = "./assets/img/user/cover.jpg";
echo "<pre>".print_r(pathinfo($filepath),true),"</pre>";
echo pathinfo($filepath)["dirname"];
echo pathinfo($filepath)["filename"];

echo pathinfo($filepath,PATHINFO_DIRNAME);
echo pathinfo($filepath,PATHINFO_BASENAME);
echo pathinfo($filepath,PATHINFO_EXTENSION);
echo pathinfo($filepath,PATHINFO_FILENAME);
?>