<?php 

//=> PHP looping

// for 
// foreach 
// while 
// do..while loop

$colorsones = ['red','green','blue','white','black','gray','pink'];
echo count($colorones);
var_dump($colorones);

$coloroneskey = array_keys($colorsones);
//echo $coloronekey;// error
var_dump($coloroneskey);

for($i = 0; $i < count($colorsones); $i++){
	//echo $i;

	//echo "this is indexed array or manual array by forloop = index  key is".$i."and value is = ".$colorones[$i]."<br/>";
    
    echo "this is indexed array or manual array by forloop = index  key is".$coloroneskey[$i]."and value is = ".$colorsones[$i]."<br/>";

}

// foreach 

foreach($colorsones as $key=>$colorsone){
    echo "this is indexed array or manual array by foreach = ".$colorsone;
}

foreach($colorsones as $key => $colorsone){
	// echo $key;
    echo "this is indexed array or manual array by foreach = index key is ".$key. "and value is ".$colorsone;
}

$x = 0;
while($x < count($colorsones)){
	// echo $colorsones[$x];
	// $x++;

	echo "this is indexed array or manual array by while = index key is ".$x." and value is ".$colorsones[$x];
	echo "this is indexed array or manual array by while = index key is ".$coloroneskey[$x]."and value is ".$colorsones[$x];
	$x++;
}

$y = 0;
do{
	echo "this is indexed array or manual array by while = index key is ".$y." and value is ".$colorsones[$y];
	echo "this is indexed array or manual array by while = index key is ".$coloroneskey[$y]."and value is ".$colorsones[$y];
	$y++;
}while($y < count($colorsones));
?>
