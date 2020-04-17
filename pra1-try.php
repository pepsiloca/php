<h4>字串函氏練習</h4>
<div>字串 aaddw1123</div>
<?php
$str='aaddw1123';
$str2="";
echo $str=[3];
for($i=0;$i<strlen($str);$i++){

    $str2=$str2 . "*";
    echo "i=" .$i. "=>".$str."<br>";
}
echo $str2;
echo "<HR>";

$str3=str_repeat("*",strlen($str));
echo $str3;
echo "<hr>";
echo str_repeat("safsd",20); //重複字串的次數//

?>

<h4>字串切割</h4>
<div>this,is,a,book</div>
<?php
$str="this,is,a,book";
$strArray=explode(",",$str);

echo "<pre>";
print_r($strArray);
echo "</pre>";

echo $strArray[3];

?>

<h4>使用join函式組合陣列元素</h4>

<?php
// echo str_replace("," , " " , $str);
echo join(" ",$strArray);
?> 

<h4>使用implode函式組合陣列元素</h4>
<?php
echo implode(" ",$strArray);
?> 


<h4>取字串片段</h4>
<div>The reason why a great man is great is that he resolves to be a great man</div>
<?php
$str="The reason why a great man is great is that he resolves to be a great man";
$str2=mb_substr($str,0,10);
echo $str2 . "...";

?> 

