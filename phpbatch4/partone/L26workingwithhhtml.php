<?php

date_default_timezone_set("Asia/Yangon");
$getdate = getdate();
$getyear = $getdate["year"];
//echo $getyear;

$getwday = $getdate["wday"];
// echo $getwday;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Working with HTML</title>
</head>
<body>
    <h1>welcome to php class</h1>
    <?php  
        $time = time();
        // $hours = date("G",$time);
        $hours = date("H",$time);

        if($hours < 12){
            echo "Good Morning Sir.";
        }elseif($hours < 18){
            echo "Good Afternoon Sir.";
        }elseif($hours < 22){
            echo "Good Evening Sir.";
        }else{
            echo "good night Sir.";
        }


    ?>


    <?php 
        // if($getwday === 0){
        //     echo "Today is sunday";
        // }elseif($getwday === 1){
        //     echo "Today is Monday";
        // }elseif($getwday === 2){
        //     echo "Today is Tuesday";
        // }elseif($getwday === 3){
        //     echo "Today is Wednesday";
        // }elseif($getwday === 4){
        //     echo "Today is Thursday";
        // }elseif($getwday === 5){
        //     echo "Today is Friday";
        // }elseif($getwday === 6){
        //     echo "Today is Saturday";
        // }
    ?>
    
    <?php if($getwday === 0): ?>
        <p>Today is Sunday</p>
    <?php elseif($getwday ===1): ?>
        <p>Today is Monday</p>
    <?php elseif($getwday ===2): ?>
        <p>Today is Tuesday</p>
    <?php elseif($getwday ===3): ?>
        <p>Today is Wednesday</p>
    <?php elseif($getwday ===4): ?>
        <p>Today is Thursday</p>
    <?php elseif($getwday ===5): ?>
        <p>Today is Friday</p>
    <?php else: ?>
        <p>Today is Saturday</p>
    <?php endif; ?>


    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa tempora architecto obcaecati ab vero animi veritatis dolores quae, numquam doloremque libero consequuntur quia, recusandae illum earum eos necessitatibus. Possimus, sit?</p>
    <footer>
        <small>Copyright <?php echo $getyear; ?>. All right reserved.</small>
    </footer>
</body>
</html>

