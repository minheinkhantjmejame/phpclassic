<?php 

echo readfile("l28file.txt");
echo "<hr/>";
echo filesize("./l28file.txt");
echo "<br/>";
echo "<hr/>";

// $fileopen = fopen("l28file.txt","r");
// if($fileopen){
//     echo "File Exists";
//     echo "<br/>";

//     $filesize = filesize("l28file.txt");
//     $fileread = fread($fileopen,$filesize);// fread ka parameter 2 ku pay ya tel
//                 fclose($fileopen);
//     echo $fileread;
// }else{
//     echo "File Doesn't exists";
// }


// $fileopen = fopen("l28files.txt","w");
$fileopen = fopen("l28files.txt","w");
if($fileopen){
    echo "File Exists";
    echo "<br/>";

    // fwrite($fileopen,"Hello guys!!! created new file");
   fwrite($fileopen,"Hello guys!!! are you ready to learn file system in php");
    $fileopen = fopen("l28files.txt","r");
    $fileread = fread($fileopen,filesize("l28files.txt"));
    fclose($fileopen);
    echo $fileread;
    echo "<br/>";
    echo "<hr/>";

}else{
    echo "File Doesn't Exists";
}


// note:: "x" create file only, return False if file already exists
$fileopen = fopen("l28newfiles.txt","x");
if($fileopen){
    echo "File exists";
    echo "<br/>";
}else{
    echo "File Doesn't Exist";
    echo "<hr/>";
}

// note:: "c" create file only,
// note:: "c+" create file and can read,

$fileopen = fopen("l28cfiles.txt","c");
if($fileopen){
    echo "File exists";
    echo "<br/>";

    fwrite($fileopen,"Hello guys!!! created new file");
   fwrite($fileopen,"Hello guys!!! are you ready to learn file system in php");
    fwrite($fileopen,"hello");
    // $fileopen = fopen("l28cfiles.txt","c+");
    $fileopen = fopen("l28cfiles.txt","r");   
    $fileread = fread($fileopen,filesize("l28cfiles.txt"));
    fclose($fileopen);
    echo $fileread;

}else{
    echo "File Doesn't Exists";
}

echo "<hr/>";

$fileopen = fopen("l28ourfiles.txt","w");
if($fileopen){
    echo "File Exists";
    echo "<br/>";

    $message = "Welcome to our class.\n";
    fwrite($fileopen,$message);
    $message = "Thank you for using php file system";
    fwrite($fileopen,$message);

    $fileopen = fopen("l28ourfiles.txt","r");
    $fileread = fread($fileopen,filesize("l28ourfiles.txt"));
    fclose($fileopen);

    echo $fileread;
    echo "<hr/>";
}else{
    echo "File Doesn't Exists";
}


// // =>Append 
$fileopen = fopen("l28theirfiles.txt","a");

if($fileopen){
    echo "File Exists";
    echo "<br/>";

    $message = "Welcome to our class.\n";
    fwrite($fileopen,$message);
    $message = "Thank you for using php file system";
    fwrite($fileopen,$message);

    $fileopen = fopen("l28theirfiles.txt","r");
    // $fileread = fread($fileopen,filesize("l28theirfiles.txt"));
    $fileread = fread($fileopen,5);
    fclose($fileopen);

    echo $fileread;

}

//--------------------------------------------------
// => other file's useful functions

// file_get_contents() = Read
// file_put_contents() = Write
// file_exists or is_file()         = check file exists or not
// copy()              = copies a file
// rename()            = rename a file
// unlink()            = delete a file
echo "<hr/>";
echo file_get_contents("l28file.txt");
echo "<hr/>";

$existingfile = "l28file.txt";
$namefile = "l28softfile.txt";
$message = file_get_contents($existingfile);
$message = "\n Thanks for using php file system";

file_put_contents($namefile,$message);
file_get_contents("l28softfile.txt") or die("unable to open file");

echo "<hr/>";
$existingfile = "l28file.txt";
$namefile = "l28headfile.txt";

if(file_exists($existingfile)){
    echo "File exists";

    $message = file_get_contents($existingfile);
    file_put_contents($namefile,$message);
    $message = "\n Thanks for using php file system";
    file_put_contents($namefile,$message) or die("unable to open file");
}else{
    echo "file not found";
}

echo "<hr/>";
$existingfile = "l28file.txt";
$namefile = "l28namefile.txt";

if(is_file($existingfile)){
    echo "File exists";

    $message = file_get_contents($existingfile);
    $message = "\n Thanks for using php file system";
    file_put_contents($namefile,$message) or die("unable to open file");
}else{
    echo "file not found";
}

// =>copy(main,copy);
$existingfile = "l28file.txt";
copy($existingfile,"l28subfile.txt");
echo file_get_contents("l28subfile.txt");
echo "<hr/>";

// =>rename(main,newfilename);
$existingfile = "l28subfile.txt";
rename($existingfile,"l28webfile.txt");
echo file_get_contents("l28webfile.txt");
echo "<hr/>";

$existingfile = "l28webfile.txt";

if(file_exists($existingfile)){
    unlink($existingfile);
    echo "file delete successfully";
}else{
    echo "file not found";
}

// =>show all .txt files 
echo "<pre>".print_r(glob("*.txt"),true)."</pre>";
echo "<hr/>";

//=> show all files
echo "<pre>".print_r(glob("*.*"),true)."</pre>";
echo "<hr/>";



?>