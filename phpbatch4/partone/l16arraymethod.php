<?php 

// =>array_combine(key,value)function

$name = array("aung aung","su su","kyaw kyaw","hla hla");
$age = [30,25,35,40];

$rescult = array_combine($name,$age);
echo "<pre>".print_r($result,true)."</pre>";
echo $result["kyaw kyaw"];

// =>count(array)function 
$vehicles = ["toyota","ford","audi","mazada","suzuki","ford","mazda","bmw"];
echo count($vehicles);

$cars = ["toyota","ford","audi","mazda"];
echo "<pre>".print_r(array_count_values($cars),true)."</pre>";
$brands = ["toyota","ford","audi","mazda","suzuki","mazda","Toyota"];
echo "<pre>".print_r(array_count_values($brands),true)."</pre>";

$couples = ["aung aung,","su su", "kyaw kyaw","nu nu","tun tun",
"yin yin","zaw zaw","aye aye"];

$rescult1 = array_chunk($couples,2);
echo "<pre>".print_r($rescult1,true)."</pre>";
echo $rescults[0][1];

$rescult2 = array_chunk($couples,2,true);
echo "<pre>".print_r($rescult2,true)."</pre>";

$rescult3 = array_chunk($couples,2,false);
echo "<pre>".print_r($rescult3,true)."</pre>";

// =>array_diff(array1,array2,...)function
$colors1 = ['red','green','blue','pink'];
$colors2 = ['red','blue','pink','silver'];
$colors3 = ['green','blue','orange','violet'];

echo "<pre>".print_r(array_diff($colors1,$colors2),true)."</pre>";
echo "<pre>".print_r(array_diff($colors2,$colors1),true)."</pre>";
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),true)."</pre>";

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 =  ["e"=>"red","f"=>"green","g"=>"black"];
echo "<pre>".print_r(array_diff($col1,$col2),true)."</pre>";
echo "<pre>".print_r(array_diff($col2,$col1),true)."</pre>";


$col1 = ["a"=>"red","b"=>"yello","c"=>"blue","d"=>"green"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue"];
echo "<pre>".print_r(array_diff_assoc($col1,$col2),true),"</pre>";
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>";

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blues","d"=>"green","f"=>"pink"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue","e"=>"orange"];
echo "<pre>".print_r(array_diff_assoc($col1,$col2),true),"</pre>";
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true),"</pre>";

// array_diff_key(array1,array2,...)function
// note:we just need to consider keyname (just for assoc key)

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blues","d"=>"green","f"=>"pink"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue","e"=>"orange"];

echo "<pre>".print_r(array_diff_key($col1,$col2),true)."</pre>";
echo "<pre>".print_r(array_diff_key($col2,$col1),true)."</pre>";

// =>array_intersect(array1,array2,...)function
// note:: we don't need to consider keyname

$num1 = [10,20,30,60,70,80];
$num2 = array(10,20,30,40,50,90,80);
echo "<pre>".print_r(array_intersect($num1,$num2),true),"</pre>";
echo "<pre>".print_r(array_intersect($num2,$num1),true),"</pre>";

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 =  ["a"=>"red","f"=>"green","d"=>"orange"];
echo "<pre>".print_r(array_intersect($col1,$col2),true),"</pre>";
echo "<pre>".print_r(array_intersect($col2,$col1),true),"</pre>";

// =>array_fill(startindex,count,value)function
echo "<pre>".print_r(array_fill(0,5,green),true)."</pre>";
echo "<pre>".print_r(array_fill(2,5,blue),true)."</pre>";

// =>array_fill_keys(keys,value)function
$keys = ["a","b","c","d"];
$values = ["red","green","blue","pink"];
echo "<pre>".print_r(array_fill_keys($keys,"pink"),true)."</pre>";
echo "<pre>".print_r(array_fill_keys($keys,$values),true)."</pre>";

$opeartors = ["mpt"=>"ftth","ooredoo"=>"broadband"];
if(array_key_exists("mpt",$operators)){
	echo "key exists";
}else{
	echo "key doest not exists";
}

// =>array_merge(array1,array2,...)function
$arr1 = ["red","green"];
$arr2 = array("red","blue","yellow");
$arr3 = ["orange","violet"];

echo "<pre>".print_r(array_merge($arr1,$arr2),true)."</pre>";
echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),true)."</pre>";

$phones = ["mpt"=>"ftth","ooredoo"=>"broadband","telenor","wifi"];
echo "<pre>".print_r(array_keys($phones),true)."</pre>";
echo array_key($phones)[1];


echo "<pre>".print_r(array_keys($phones,"broadband"),true)."</pre>";
echo array_key($phones,"broadband")[0];

$numbers = [10,20,30,'10'];
echo "<pre>".print_r(array_keys($numbers,"10"),true)."</pre>";
echo "<pre>".print_r(array_keys($numbers,10),true)."</pre>";


echo "<pre>".print_r(array_keys($numbers,10,true),true)."</pre>";   

// => array_map(callback,array1,array2,array3,....) function
$males = ["tun","aung","kyaw","thura","zaw zaw"];
$females = array("hla hla","su su","nu nu", "yu yu","thida");

function genderone($name){
	return ("Mr".$name);
}

echo "<pre>".print_r(array_map("genderone",$males),true)."</pre>";


// => sort(array) function

$cars = ["volov","bmw","toyota","mazda","suzuki"];
sort($cars);
echo "<pre>".print_r($cars,true)."</pre>";

$numbers = [10,40,"80",90,35,"100",130,"250",70];
sort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>";

// =>array_multisort(array)function
$carbands = ["volov","bmw","toyota","maz"]

$colors = ["red","green"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>";

// =>array_reverse(array)function
$vehicles = ["volov","bmw","toyota","mazda","suzuki"];
sort($vehicles);
echo "<pre>".print_r(array_reverse($vehicles)),true)."</pre>";

// =>array_pad(array,length,value)function

// =>array_reduce(array,callback,initial) function

$nums = [10,"20",30];
function calfun($total,$val){
	return $total += $val;
} 
echo array_reduce($nums,"calfun",0);

// =>array_pop(array)function

$colors = ["red","green","blue"];
echo "<pre>".print_r(array_pop($colors),true)."</pre>";

$myarrs = ["a","b","c","d","e"];
echo array_search("d",$myarrs);

$myarrs = ["a"=>"red","b"=>"green","c"=>"violet","d"=>"black","e"=>"blue"];
echo array_search("green",$myarrs);

// =>array_unshift(array,value1,value2,value3,....)function
$colors = ["red","green","blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["0"=>"red","1"=>"green","2"=>"blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true);

$colors = ["a"=>"red","b"=>"green","c"=>"blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

// =>array_push(array,value1,value2,value3,...)function
$colors = ["red","green","blue"];
array_push($colors,"silver","vilolet");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["0"=>"red","1"=>"green","2"=>"blue"];
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["a"=>"red","b"=>"green","c"=>"blue"];
array_push($colors,"silver","violet");

echo "<pre>".print_r($colors,true)."</pre>";

// => compact(var1,var2,var3,....) function

$name = "aung aung";
$age = "25";
$city = "yangon";

$rescult = compact("name","age","city");
echo "<pre>".print_r($rescult,true)."</pre>";

// range(start,end)function
// range(start,end,stop)

$num1 = range(0,5);
echo "<pre>".print_r($num1,true)."</pre>";

$num2 = range(0,50,10);
echo "<pre>".print_r($num1,false)."</pre>";

$char1 = range("a","k");
echo "<pre>".print_r($char1,true)."</pre>";

$char2 = range("k","g");
echo "<pre>".print_r($char2,true)."</pre>";


// =>sizeof(array)function
$colors = ["red","green","blue","yellow","pink"];
echo sizeof($colors);
echo current($colors);
echo pos($colors);
echo next($colors);
echo current($colors);
echo end($colors);
echo current($colors);
echo prev($colors);
echo reset($colors);
echo current($colors);

$students = ["aung aung","maung maung","zaw zaw","tun tun","kyaw kyaw"];
echo current($students);
echo next($students);
echo pos($students);
echo end($students);
echo current($students);
echo next($students);
echo prev($students);
echo reset($students);
echo pos($students);



// =>serialize(),unserialize() function

$staffs = [["aung aung","maung maung","tun tun","zaw zaw"],["su su","yu yu","aye aye","hla hla"]];
echo "<pre>".print_r($staffs,true)."</pre>";

$seriadatas = serialize($staffs);
echo $seriadatas;
var_dump($seriadatas);

$unseriadatas = unserialize($seriadatas);
echo "<pre>".print_r($unseriadatas,true)."</pre>";







?>