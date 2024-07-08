<?php 

date_default_timezone_set("Asia/Yangon");// change timezone

$getdate = getdate();
// echo $getdate;
var_dump($getdate);

var_dump($getdate);
echo "<pre>".print_r($getdate,true)."</pre>";
echo "this is seconds= ".$getdate["seconds"];
echo "this is minutes= ".$getdate["minutes"];
echo "this is hours= ".$getdate["hours"];

echo "this is wday = ".$getdate["weekday"];
echo "this is wday = ".$getdate["wday"];
echo "this is yday = ".$getdate["yday"];

echo "this is month = ".$getdate["month"];
echo "this is mon =".$getdate["mon"];
echo "This is mday = ".$getdate["mday"];
echo "this is year = ".$getdate["year"];

echo "this is 0 = ".$getdate["0"];

$time = time();
echo "this is 0 = ".$time;

// Date/time format

// date(format,timestamp)
$date = date("a",$time);
echo "this is format a = ".$date;

$date = date("A",$time);
echo "this is format A = ".$date;

$date = date("d",$time);
echo "this is format A = ".$date;

$date = date("D",$time);
echo "this is format A = ".$date;

$date = date("F",$time);
echo "this is format F = ".$date;

$date = date("g",$time);
echo "this is format g = ".$date;

$date = date("G",$time);
echo "this is format G = ".$date;

$date = date("h",$time);
echo "this is format h = ".$date;

$date = date("H",$time);
echo "this is format H = ".$date;

$date = date("i",$time);
echo "this is format i = ".$date;

$date = date("j",$time);
echo "this is format j = ".$date;

$date = date("l",$time);
echo "this is format j = ".$date;

$date = date("L",$time);
echo "this is format L = ".$date;

$date = date("m",$time);
echo "this is format m = ".$date;

$date = date("M",$time);
echo "this is format M = ".$date;

$date = date("n",$time);
echo "this is format n =".$date;

$date = date("r",$time);
echo "this is format r= ".$date;

$date = date("U",$time);
echo "this is format U= ".$date;

$date = date("y",$time);
echo "this is format y= ".$date;

$date = date("Y",$time);
echo "this is format Y= ".$date;

$date = date("z",$time);
echo "this is format z= ".$date;

// =>date-create(timestamp,optional timezone) with date_format("y/m/d") with date_diff(new,old);
// eg : date_create(tiemstamp,timezone_open("Asia/yangon"));
$date1 = date_create("10-01-2023");
echo date_format($date1,"Y/m/d");

$date2 = date_create("1-04-2024"); // 04 or 4 is Ok
echo date_format($date2,"Y-m-d");

$diffone = date_diff($date2,$date1);
echo $diffone-> format("%d days");// 22 days
echo $diffone-> format("%m months");// 2 months
echo $diffone-> format("%y year");//1 year
echo $diffone-> format("%Y year");// 91 year

$date3 = "{$getdate['mday']}-{$getdate["month"]}-{$getdate["year"]}";
echo $date3;
$date4 = date_create($date3);
// echo $date4;
echo date_format($date4,"Y-m-d");

$difftwo = date_diff($date4,$date2);
echo $difftwo->format("%d days");
echo $difftwo->format("%m months");
echo $difftwo->format("%y year");
echo $difftwo->format("%Y year");

echo $difftwo->format("%R%d days");
echo $difftwo->format("%R%a  days");

?>

<!-- https://www.php.net/manual/en/timezones.asia.php to change php timezone -->