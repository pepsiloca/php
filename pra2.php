<h4>威力彩號碼</h4>
<hr>
<?php
//亂數函式
$num=[];

for($i=0;$i<6;$i++){
    $num[]=rand(1,38);
}

echo "<pre>";print_r($num);echo"</pre>";
$count=0;
for($i=0;$i<6;$i++){
    
    for($j=0;$j<5;$j++){
        $counts++;    
        if($i!=$j && $num[$j]==$num[$i]){
        // unset($num[$j]);
        echo"有重複";
        $num[$j]=rand(1,38);

        }
        
    }
    }

echo "<pre>";print_r($num);echo"</pre>";
echo "跑了".$counts."次";

// foreach($num as $n){
//     echo $n . " , ";
// }

?>
<h4>威力彩號碼-while</h4>

<?php

$num=[];
$counts=0;
while(count($num)<6){
    $counts++;
    if(count($num)>0){
        $tmp=rand(1,38);
        if(!in_array($tmp,$num)){
            $num[]=$tmp;
        }else{
            echo"有重複".$tmp;
        }
      }else{
          $num[]=rand(1,38);
      }
 
}

echo"<pre>";print_r($num);echo"</pre>";
echo "跑了".$counts."次";


?>