<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
table{
    border-collapse:collapse;
 
    
}
table td{
    border:1px solid #ccc;
    padding:5px;
    text-align:center;
}



.calandar{
    display:flex;
    flex-flow:row wrap;
}

</style>

<h4 style="text-align:center">月曆練習</h4>
<div style="text-align:center">年份:2021</div>
<div class="Bigbox">
<?php
$year="2021";
?>

<?php
for($m=1;$m<=12;$m++){
echo "< class='calander-block'>";
?>

<table>
    <tr>
<td colspan="7"><?=$m;?></td>
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
</div>   

</div>
