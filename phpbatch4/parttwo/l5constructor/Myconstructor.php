<?php 

//class object
class Myconstructor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total resutl is ";

        // Magic method()
        // __construct ka sa lar tar nae tan a lote lote tel
        // public function __construct(){
        //     echo " I am start working automatically!!!. hee hee :3";
        // }
   
    //     public function __construct($name){
    //     echo "I am {$name} . I am start working automatically!!!. hee hee :3";
    // }

    // public function __construct($name,$old){
    //     echo "I am {$name} . {$old}years old.I am start working automatically!!!. hee hee :3";
    // }

    public function __construct(){
        $result = $this->num1 + $this->num2 + $this->num3;
        // echo "$this->message = $result";
        echo "{$this->message} = {$result}";
    }
   
}

// $obj = new Myconstructor();

echo "This is constructor<br/>";

// $obj = new Myconstructor();
// $obj = new Myconstructor();
// $obj = new Myconstructor("Aung Aung");
$obj = new Myconstructor("Aung Aung",19);
echo "<hr/>";

?>