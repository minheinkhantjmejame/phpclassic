<?php 

echo "hey<br/>";

// =>Define class object(oop = object_oriented programming);

// class CalssName{
//     //properties
//     //method

// }
// new Classname();

class Myproperties{
    // Properties(variable)
    var $firstname = "Data Land";
    var $lastname = "Technology";

}

// (->)object operator

$obj = new Myproperties();
// echo "This is Class objecdt<br/>";
echo $obj->firstname." ".$obj->lastname;


?>