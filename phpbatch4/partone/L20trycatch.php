<?php  

// function mycolor($color){
//     // new Exception(message);
//     if($color !== "red"){
//         throw new Exception("I have $color color");
//     }

//     return "yeah! my fav color is $color";
// }

// echo mycolor("red");

function mynum($base,$power){
    $result = pow($base,$power);
    return $result;
}

echo mynum(2,3);

function mypower($base,$power){
    if($power>5){
        throw new Exception("we'll not allow over $power");
    }
    $result = pow($base,$power);
    return $result;
}

//echo mypower($base,$power);

try{
    echo mypower(2,5);
}catch(Exception $e){
    echo "you shouldn't not over".$e->getMessage();
}

function mycalculate($base,$power){
    if($power > 3){
        throw new Exception("you shouldn't ovver 3");
    }

    $result = pow($base,$power);
    return $result;
}

try{
    echo mycalculate(2,2);
}catch(Exception $e){
    echo "you should not over 3".$e->getMessage();
}finally{
    echo "<br/>";
    echo "thanks for using over service";
}


try{
    echo mycalculate(2,3);
}catch(Exception $e){
    echo "you should not over 3".$e->getMessage();
}finally{
    echo "<br/>";
    echo "thanks for using over service";
}

// => try..catch statement 

// try{
//     code to be executed
// }catch(Exception $e){
//     code to exception is catched
// }

//=> try..catch..finally statement
// try{
//     code to executed
// }catch(exception $e){
//     code to exception is catched
// }finally{
//     code that always runs regardless of weather an exception was catch or not !
// }



function mycolor($color){
    if($color != "red"){
        throw new Exception("I hate $color color");
    }

    return "my fav color is $color";
}

echo mycolor("black");

try{
    mycolor("black");
}catch(Exception $e){
    echo "you shouldn't try these color";
}

try{
    mycolor("orange");
}catch(Exception $s){
    echo $s-> getMessage();
}
?>