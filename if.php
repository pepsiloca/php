<?php

$score=60;
// if 判斷式



if($score>=60){
    echo "及格";

}else{
    echo "不及格";

}

echo "<hr>";

// 三元運算子
echo "三元運算子<br>";
$result=($score>=60)?"及格":"不及格";
echo $result;

echo "<hr>";

//判斷成績
/*
100~90 >"A"
75-90> "B"
60-75 > "c"
0-59 >"D"
*/

$score=80;
echo "成績:" . $score;
echo "<br>";
echo "等級:";

if($score>=90){
    echo "A";
}else if($score >=75){
    echo "B";
}else if($score >=60){
    echo "C";
}else {
    echo "D";
}
echo "<br>";

//巢狀判斷式 (較複雜)
if($score>=90){
    echo "A";
}else 
  if($score >=75){
    echo "B";
}else 
  if($score >=60){
    echo "C";
  }else {
    echo "D";
}


//閏年判斷
/*
公元年份除以4部可整除,為平年.
  ->公元年份除以4可整除,為閏年
公園年份除以4可整除但除以100部可整除,為閏年.
   ->公元年份除以4可整除並且除以100部可整除
公元年分除以100 但除以400不可整除,為平年.
   ->公元年份除以4可整除並且(年分除以100不可整除 或是除以400可以整除) 為閏年
公元年份除以400可整除但除以3200部可整除為閏年.
*/

echo "<hr>";
$year=2000;
echo "西元年:" .$year;
echo "<br>";
if($year%4 == 0 && ($year%100 !=0 || $year%400==0)){    
    echo "閏年";
}else{
    echo "平年";
}

echo "<hr>";



$score>=88;
$level="";

if($score>=90){ 
    $level="A";
}else if($score >=75){
    $level="B";
}else if($score >=60){
    $level="C";
}else {
    $level="D";
}

echo "成績:" . $score;
echo "<br>";
echo "等級:".$level;
echo "<br>";
switch($level){
    case"A":
        echo "非常好 請努力保持";
    break;

    case"B":
        echo "可圈可點 還有進步空間";
    break;

    case"C":
        echo "一般水平 需要更多能力";
    break;
    case"D":
        echo "用心不足 請加強";
    break;

}







