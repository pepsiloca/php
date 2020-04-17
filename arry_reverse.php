<h4>反轉陣列</h4>
<hr>
<?php
$a=[2,4,6,1,8];
echo "<pre>";print_r($a);echo "</pre>";
echo "地板函數";floor(count($a)/2)."<br>";
echo "天花板函數";ceil(count($a)/2)."<br>";


for($i=0;$i<floor(count($a))/2;$i++){
    $index=count($a)-1-$i;
    $tmp=$a[$i];
    $a[$i]=$a[$index];
    $a[$index]=$tmp;
}


echo "<pre>";print_r($a);echo "</pre>";
?>
<h4>交換變數</h4>
<hr>
$a=5;
$b=10;
<?php

$a=5;
$b=10;

$tmp=$a;
$a=$b;
$b=$tmp;

echo '$a='.$a."<br>";
echo '$b='.$b;

?>