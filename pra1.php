<h4>陣列練習-學生資料設計</h4>
<hr>
<?php


$judy=["國文"=>95,"英文"=>64,70,90,84];
$amo=[95,64,70,90,84];
$john=[95,64,70,90,84];
$peter=[95,64,70,90,84];
$hebe=[95,64,70,90,84];
echo"<pre>";print_r($judy);echo"</pre>";

$score=[
    "judy"=>[
        "國文"=>95,
        "英文"=>64,
    ],
    "aom"=>[
        "國文"=>88,
        "英文"=>78,
    ],
    "john"=>[
        "國文"=>95,
    ]

     
    ];



    echo"<pre>";print_r($score);echo"</pre>";
?>


<h4>九九乘法表</h4>
<hr>
<?php
$a=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $a[]=$i . " x " . $j . " = " . ($i*$j);
        }
}
echo"<pre>";print_r($a);echo "</pre>";

for($i=0;$i<count($a);$i++){
    echo $a[$i]. " , ";

    if($i%9==8){
        echo "<br>";
    }
}

foreach($a as $key =>$d){
    echo $d . " , ";
    if($key%9==8){
        echo "<br>";
    }
}

foreach($a as $key =>$d){
    echo $d . " , ";
    echo"<tr>";
    if($key%9==8){
        echo "<table width='700' border='1'>";
        echo "<td>$d</td>";
    }
}




?>