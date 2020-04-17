<?php
//while 迴圈

$str="today is a good day";
$find="g";

// for($i=0;$i<strlen($str);$i++){

// }

$status=false;
$position=0;
while($status==false){
    $tmp=mb_substr($str,$position,1,"utf8"); //利用函示mb_substr()來取得某個位置的字元
   
    if($tmp==$find){
        echo "字元".$find."在".$str."的第".$position."個位置";
        $status=true;
    }
    $position++;
}

echo "p=".$position;


// 網路方式
$n=6;//层数
for($a=1,$a<=$n,$a++);{
    for($b=1,$b<=$n-$b,$n++);{
        echo "";
    }
}






?>