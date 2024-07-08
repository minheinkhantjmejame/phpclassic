<?php
 

$fullname = "U Kyaw Kyaw";
$job = "Dev";

echo $fullname;
echo $job;
print "$fullname";
echo "my name is     $fullname";
echo $fullname;
echo 'my name is $fullname';//'' doesn't know variable, only "" can know
echo "my name is ${fullname}";
echo "my name is \{$fullname}";

$gender = echo "female"; //error
$nation = print "burma"; // burma

// concat (.)
$firstname = "aung";
$lastname = "kyaw kyaw";

echo $firstname;
echo $lastname;

echo $firstname.$lastname;
echo $firstname.' '.$lastname;

// comments
# Single Line Comment 

// multi line comment 
// comment 1
// comment 2
// comment 3



?>