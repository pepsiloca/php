<style>
table{
    border-collapse:collapse;

}
table td{
    border:1px solid #ccc;
    padding:5px;
    text-align:center;
}

</style>
<h4>月曆練習</h4>
<div>年份:2021</div>

<?php
$year="2021";
for($m=1;$m<=12;$m++){
?>
<div>月份:<?=$m;?></div>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php
$firstDay="$year-$m-01";

$firstDayWeek=date("w",strtotime($firstDay));
$monthDays=date("t",strtotime($firstDay));

echo "第一天星期:".$firstDayWeek."<br>";
echo "月天數:".$monthDays."天";
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($i==0 && $j<$firstDayWeek){
            echo "<td>";
            echo "</td>";
        }else{
            echo "<td>";
            $num=$i*7+$j+1-$firstDayWeek;
            if($num<=$monthDays){
                echo $num;
            }
            echo "</td>";
        }
    }
    echo "</tr>";   
}    
?>
</table>
<?php
}
?>
