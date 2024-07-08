<?php 

function setpassword($plaintext){
    $passcode = $plaintext;
    echo $passcode;
}
setpassword("password123");

function setpassworddef($plaintext){
    $passcode= password_hash($plaintext,PASSWORD_DEFAULT);
    echo "Before Encrypt = {$plaintext}, After Encrypt = {$passcode}";
    echo strlen($passcode);
}

setpassworddef("password123");

function setpasswordbcr($plaintext){
    $passcode= password_hash($plaintext,PASSWORD_BCRYPT);
    echo "Before Encrypt = {$plaintext}, After Encrypt = {$passcode}";
    echo strlen($passcode);
}

setpasswordbcr("password123");

function passworddecry(){
    $plaintextone = "password123";
    $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);

    $plaintexttwo= "password123";
    $enccodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);

    // echo "Encrypt Code One = {$enccodeone}";
    // echo "Encrypt Code Two = {$enccodetwo}";

    $verify = password_verify($plaintextone,$enccodetwo);
    // echo $verify;

    if($verify){
        echo "Oki";
    }else{
        echo "Failed";
    }

}

passworddecry();

function passwordmd5($plaintext){
    // message-digest  = md5(string,binary)
    // Note::binary = True / False;
    // TRUE/true = Raw 16 characters binary format
    //  False/ false = DEFAULT 32 characters hax number 
    

    $passcode1 = md5($plaintext); // static
    echo "before encrypt = {$plaintext}, after encrypt md ={$passcode1}";
    echo strlen($passcode1);

    $passcode2 = md5($plaintext,FALSE); // static
    echo "before encrypt = {$plaintext}, after encrypt md ={$passcode2}";
    echo strlen($passcode2);

    $passcode3 = md5($plaintext,TRUE);// static
    echo "before encrypt = {$plaintext}, after encrypt md ={$passcode3}";
    echo strlen($passcode3);

}

passwordmd5("password123");

function passwordmd5verify($plaintext){
    $getpassword = "482c811da5d5b4bc6d497ffa98491e38";

    if($getpassword === md5($plaintext)){
        echo "password match with 32 chars hax number";
    }elseif($getpassword === md5($plaintext,TRUE)){
        echo "password match with 16 chars binary format";
    }else{
        echo "password do not match";
    }
}
passwordmd5verify("password123");

function passwordsha1($plaintext){
    // Secure Hash Algorithm = sha1(string,binary);
    // Note::binary = True / False;
    // TRUE/true = Raw 16 characters binary format
    //  False/ false = DEFAULT 32 characters hax number 
    

    $passcode1 = sha1($plaintext); // static
    echo "before encrypt = {$plaintext}, after encrypt md ={$passcode1}";
    echo strlen($passcode1);

    $passcode2 = sha1($plaintext,FALSE); // static
    echo "before encrypt = {$plaintext}, after encrypt md ={$passcode2}";
    echo strlen($passcode2);

    $passcode3 = sha1($plaintext,TRUE);// static
    echo "before encrypt = {$plaintext}, after encrypt md ={$passcode3}";
    echo strlen($passcode3);

}

passwordsha1("password123");

function passwordsah1verify($plaintext){
    $getpassword = "cbfdac6008f9cab4083784cbd1874f76618d2a97";

    if($getpassword === sha1($plaintext)){
        echo "password match with 32 chars hax number";
    }elseif($getpassword === sha1($plaintext,TRUE)){
        echo "password match with 16 chars binary format";
    }else{
        echo "password do not match";
    }
}
passwordsah1verify("password123");

function passwordcrypt($plaintext){
    // =>crypt(string,key)
    $cryptkey = "456789ABCDEFG";
    $passcode = crypt($plaintext,$cryptkey);
    echo "before encrypt = {$plaintext}, After encrypt = {$passcode}";
    echo strlen($passcode);
}

passwordcrypt("password123");

function passwordcryptverify($plaintext){
    $getpassword = "45X0h1uT9HvTw13";
    $cryptkey = "456789ABCDEFG";

    if($getpassword === crypt($plaintext,$cryptkey)){
        echo "password match";
    }else{
        echo "password do not match";
    }
}
passwordcryptverify("password123");

function strongpassword($plaintext){
    // $newpassword = md5($plaintext);
    // $newpassword = sha1($newpassword);
    // $newpassword = crypt($newpassword,$newpassword);
  
    $cryptkey = "456789ABCDEFG";
    $newpassword = crypt(sha1(md5($plaintext)),$cryptkey);
    echo "before encrypt = {$plaintext}, after encrypt ={$newpassword}";
    echo strlen($newpassword);


}

strongpassword("password123");

function strongpasswordverify($plaintext){

    $getpassword = "45QUhSRh116Mw";
    $cryptkey = "456789ABCDEFG";
    if($getpassword === crypt(sha1(md5($plaintext)),$cryptkey)){
        echo "password match";
    }else{
        echo "password do not match";
    }

    // $getpassword = "926wQBSqLwkTE";


    // if($getpassword === crypt(sha1(md5($plaintext)),sha1(md5($plaintext)))){
    //     echo "password match";
    // }else{
    //     echo "password do not match";
    // }
}
strongpasswordverify("password123");
?>