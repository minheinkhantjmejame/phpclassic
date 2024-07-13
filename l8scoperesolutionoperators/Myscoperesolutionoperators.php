<?php 

// :: ka scope resolution operators  
class Myscoperesolutionoperator{

//Member constant variables

const GREETING = "Hello friend, Good evening from Thailand";
const THANKS = "Hi Friend. Thanks for visiting our country";

public $fullname =  "Aung Kyaw Kyaw";

// Member Methods 

public function sayhifi(){
    echo self::GREETING;// self nae bel yay ya tel
    // echo $this::GREETING;// this nae thone lot ya tel so bin mae
}

public function saybye(){
    echo static::THANKS;// static nae ll thone lot ya tel
}
   
}

echo "This is scope resolution operators<br/>";
$obj = new Myscoperesolutionoperator();
echo $obj->fullname. "<br/>";
echo $obj::GREETING ."<br/>";

$obj->sayhifi();
echo "<br/>";
$obj->saybye();
echo "<hr/>";


?>