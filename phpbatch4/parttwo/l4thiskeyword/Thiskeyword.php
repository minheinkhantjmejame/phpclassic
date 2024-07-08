<?php 

//class object
class Thiskeyword{
    // => Access Modifier 
    // public = anyone can access
    // private = only access inside main class
    // protected = subclass / Extended class

    public $companyname = "Data Land Technology"; // can access from everywhere
    private $jobtitle = "Manager"; // can't access from outside;
    protected $location = "Yangon";// can't access from outside;

    public function getinfo(){
      $num = 10;
      echo $num;
      echo "<br/>";
      echo $this->companyname;
      echo $this->jobtitle;
      echo $this ->location;
    }

    public function getcompanyname(){
        echo $this->companyname;
        echo "<br/>";
        $this->companyname = "ABC Co.,Ltd";
        echo $this->companyname;

        $this->jobtitle = "Director";
        echo $this->jobtitle;

        $this->location = "MawLamyine";
        echo $this->location;
    }
}

class Vehicle{
    public $brand = "Toyota";
    public function getbrandname(){
        return $this->brand;
    }

    public function setbrandname($name){
        $this->brand = $name;
    }

}

$obj = new Thiskeyword();
echo "This is keyword Modifier<br/>";
echo $obj ->companyname."<br/>";

echo $obj->getinfo();
echo "<br/>";

$obj->getcompanyname();
echo "<br/>";
echo $obj->companyname;
// echo $obj->jobtitle; // error
// echo $obj->location; // error

echo "<hr/>";

$obj2 = new Vehicle();
echo $obj2->brand;
echo "<br/>";
echo $obj2->getbrandname();
echo "<br/>";
echo $obj2->setbrandname("Suzuki");
echo "<br/>";
echo $obj2->getbrandname();

echo "<hr/>";


?>