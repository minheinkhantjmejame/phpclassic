<?php 

$getdatas = file_get_contents("l29studentdb.json");
$datasde = json_decode($getdatas,true);
echo "<pre>".print_r($datasde,true)."</pre>";

//=> Read

// foreach($datasde as $datas){
//     // echo "<pre>".print_r($datas,true)."</pre>";

//    foreach($datas as $key=>$data){
//     echo $key ."=".$data."<br/>";
//    }

//    echo "<hr/>";

// }

// =>create 

// $newdatas = [
//     [
//         "id"=>8,
//         "name"=>"lin lin",
//         "city"=>"mandalay"
//     ],

//     [
//         "id"=>9,
//         "name"=>"chit thu wai",
//         "city"=>"yangon"
//     ],

//     [
//         "id"=>10,
//         "name"=>"honey nway oo",
//         "city"=>"yangon"
//     ]

//     ];

// foreach($newdatas as $newdata){
//     array_push($datasde,$newdata);
//     file_put_contents("./l29studentdb.json",json_encode($datasde));

// }

// =>update 

// foreach($datasde as $key => $datas){
//     // echo $datas;
//     // echo "<pre>".print_r($datas,true)."</pre>";
//     // echo $key;

//     // echo "<pre>".print_r($datasde[$key],true)."</pre>";
//     // echo $datas["id"];

//     if($datas["id"]===9){
//         //id number 9 = index number 8
//         // $datasde[$key]["name"] = "chit hsu wai";
//         $datasde[8]["name"] = "sandar";
//     }

// }

// do save 
// file_put_contents("./l29studentdb.json",json_encode($datasde));

// => Delete

$idx = [];


// select index to delete
foreach($datasde as $key => $datas){
    // echo "<pre>".print_r($data,true)."</pre>";

    if($datas["id"]===10){
        $idxs[] = $key;
    }
}

// delete value from array
foreach($idxs as $idx){
    unset($datasde[$idx]);
}

//do save
file_put_contents("./l29studentdb.json",json_encode($datasde));



?>