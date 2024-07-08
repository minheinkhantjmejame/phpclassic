<?php 

//class object
class Myinheritance{

   
}

class Locallogin extends Sociallogin{
    
}

// $obj = new Destructor();

echo "This is constructor<br/>";

// $obj = new Myconstructor();
// $obj = new Myconstructor();
// $obj = new Myconstructor("Aung Aung");
$obj = new Myinheritance();


$lcobj = new Locallogin(){
    public function sitelogin(){
        echo "This is sitelogin login: email is $this ->emial. profile name is $this -> fullname . <br/>";
    }
}


?>