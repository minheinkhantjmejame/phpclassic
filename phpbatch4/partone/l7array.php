<?php

// arrays => index array (manual array)
//       => associative array 
         // => multi-dimensional array

// =>index array
$names = array("aung aung","maung maung", "zaw zaw", "kyaw kyaw", "tun tun");

// echo $names; // error
print $names; // error

echo count($names);
var_dump($names);
print_r($names,false);// true false ma htae ll ya tel , false ka default

//=>index array shorthand
$colors = ['red','green','blue','black','white'];
//echo $colors;

echo count($colors);
print($colors,false);
echo "<pre>".print_r($colors,true)."</pre>";

$colors[6] = "gray";
$colors[7] = "stone";
$colors[8] = "yellow";
$colors[0] = "violet";
echo "<pre>".print_r($colors,true)."</pre>";// true ka pre tag ko a lote lote say tel
echo count($colors);

echo "my fav color is ".$colors[6];


//(ii) Associative array

//method one
$news = array("pone"=>"this is post one","ptwo"=> "this is post two", "pthree" => "this is post three");
echo count($news);  
var_dump($news);


//method two
$medias = [
   "pone" => "this is post one",
   "ptwo" => "this is post two",
   "pthree" => "this is post three"
];

echo count($medias);
var_dump($medias);

echo "i like this post. so post title is".$medias["pthree"];

// multi-dimensional array (array contains one or more array)

$paints = array(
   array("red","green","blue"),
   array("pen","pencil","ruler"),
   array("paper","plastic")
);

echo count($paints);
var_dump($paints);

$maincolors = array(
   ["red","green","blue"],
   ["pen","pencil","ruler"],
   ["paper","plastic"]
);

echo count($maincolors);
var_dump($maincolors);

echo $maincolors[0][0];
echo $maincolors[1][2];
echo $maincolors[2][1];

$vippersons =[
 ["name"=>"aung aung","age"=>20],
 ["name"=>"su su","age"=>18], 
 ["name"=>"nu nu","age"=>23]
]

echo count($vippersons);
var_dump($vippersons);

echo $vippersons[0]["name"];
echo $vippersons[0]["age"];

echo $vippersons[2]["name"];
echo $vippersons[1]["age"];

?>