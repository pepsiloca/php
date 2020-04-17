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
<div>年份:2021</div><br>

<?php
$year="2021";
for($m=1;$m<=12;$m++){
?>
<div>月份:<?=$m;?></div>
<table >
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
$firstday="$year-$m-01";

$firstdayweek=date("w",strtotime($firstday));
$monthdays=date("t",strtotime($firstday));

echo "第一天星期:".$firstdayweek."<br>";
echo "月天數:" .$monthdays."天";
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($i==0 && $j<$firstdayweek){
            echo "<td>";
            echo "</td>";
        }else{
            echo "<td>";
            $num= $i*7+$j+1-$firstdayweek; //前面的天數為上個月的
            if($num<=$monthdays){
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