<h4>五百年內的閏年</h4>
<hr>

<?php
// $year=2020;
// echo "西元年:" .$year;
// echo "<br>";
$year=[];
for($i=2020;$i<2520;$i++){
    echo "西元年:".$i.'是'; 
if( $i%4 == 0 && ($i%100 !=0 || $i%400==0)){    
    echo "閏年";
    $year[]=$i;
}else{
    echo "平年";
}

echo "<hr>";

}
echo "閏年陣列";
echo "<pre>";print_r($year);echo "</pre>";

$testyear=rand(2020,2520);
if(in_array($testyear,$year)){
    echo $testyear."是閏年";    
}else{
    echo $testyear."是平年";
}

?>