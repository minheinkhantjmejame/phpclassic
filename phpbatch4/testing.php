<?php 

class Myconstructor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total result is ";

    // public function __construct($name){
    //     echo "I am {$name}. I am start working automatically.";
    // }

    // public function __construct($name,$old){
    //     echo "I am {$name} {$old} years old. I am start working automatically";
    // }

    public function __construct(){
        $result = $this->num1 + $this->num2 + $this->num3;
        echo "{$this->message}= {$result}";
    }


}

// $obj = new Myconstructor("Min Hein Khant");
//  $obj = new Myconstructor("Min Hein Khant",19);
$obj = new Myconstructor();

?>