<?php 

class Mymethods{
    //Access Modifier
    //  public = anyone can access 
    //  private  = only access inside main class 
    //  protected = subclass / extended class 

    // Class Method / Method 
    // public ka default(htae ll ya ma htae ll ya)
    public function greeting(){
        echo "Have a good day";
    }

    public function calculate($num){
        echo "Getting calculate number is = {$num}<br/>";
    }

    public function result($num=1){
        echo "Getting result number is ={$num} <br/>";
    }
}

$obj = new Mymethods();
echo "This is class object <br/>";

$obj->greeting();
echo "<br/>";

//$obj ->calculate();

$obj->calculate(150);
$obj->result();
$obj->result(100);
?>