<?php 

echo "I am php broser redirection";

// header("Location:https://google.com");
// exit;

$query = $_SERVER['QUERY_STRING'];
switch($query){
    case "google":
        header("Location:https://google.com");
        exit;
        break;
    case "linkedin":
        header("Location:https://linkedin.com");
        exit;
        break;
    case "youtube":
        header("Location:https://youtube.com");
        exit;
        break;
    default:
        echo "we dont have any redirection for your query";
        break;
}

?>