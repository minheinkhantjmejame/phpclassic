<?php  

// json_encode(array);
// json_decode(array);
// json_decode(array,true)

$colors = ["red","green","blue"];
echo $colors;
var_dump($colors);

$mycolors = json_encode($colors);
echo $mycolors;
var_dump($mycolors);

$students = ["name"=>"aung aung","age"=>25,"city"=>"yangon"];// associative array
var_dump($students);
echo $students["name"];
echo $students["age"];
echo $students["city"];

$studentinfos = json_encode($students);
echo $studentinfos;
var_dump($studentinfos);

// can't print
// echo $studentinfos["name"];
// echo $studentinfos["age"];


// =>Decode by single parameter
$studentdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
$studentdecode = json_decode($studentdatas);
var_dump($studentdecode);

// can't print
// echo $studentdecode["name"];
// echo $studentdecode["age"];
// echo $studentdecode["city"];

//can print(object(stdClass)(->object operator))
echo $studentdecode->name;
echo $studentdecode->age;
echo $studentdecode->city;

foreach($studentdecode as $key=>$value){
    echo $key. " is ".$value."<br/>";
}

// foreach($studentdecode as $studentdecodes){
//     echo $studentdecodes;
// }

// =>Decode by multi parameter 

$staffdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
$staffdecode = json_decode($staffdatas,false);
var_dump($staffdecode);

//can't print
echo $staffdecode["name"];
echo $staffdecode["age"];
echo $staffdecode["city"];

//can print


?>