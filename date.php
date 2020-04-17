<h4>日期/時間函式</h4>
<div>strtotime()-把文字日期轉成時間序</div>
<?php
$time="2020-04-16 11:30:20";
$serialTime=strtotime($time);

echo date("Y-m-d H:i:s l",$serialTime);
?>

<h4>時間練習</h4>
<div>距離下一次生日還有幾天</div>
<div>08/24</div>
<?php
$today=date("Y-m-d");
$nextBirth="2020-08-24";
$between=strtotime($nextBirth)-strtotime($today);
$days=$between/60/60/24;
echo "還有:".$days."天";

$days=date("Z",strtotime($nextBirth))-date("Z",strtotime($today));
echo $days;

?>

<h4>date()函式</h4>
<?php
date_default_timezone_set("Asia/Taipei");
echo date("Y-m-d H:i:s");

?>


<h4>strtotime()函式</h4>
<?php

$date=strtotime("+3 days".$today);
//strtotime("+3 days 2020-04-16");
echo date("Y-m-d",$date);

echo "<hr>";
echo date("Y-m-d",strtotime("-2 month", strtotime("2020-08-24")));
echo "<br>";
echo date("Y-m-d",strtotime("-2 month 2020-08-24"));

?>

<h4>日期練習</h4>
<div>印出今天起的三十天日期</div>
<?php
$today=date("Y-m-d");

for($n=0; $n<30;$n++){
echo date("Y-m-d",strtotime("+$n day" . $today))."<br>";

}
    


?>

