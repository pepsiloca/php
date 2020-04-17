<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
table{
    border-collapse:collapse;

}
table td{
    border:1px solid white;
    padding:5px;
    text-align:center;  
    background-color: rgba(252,208,224,0.5);                 
}
.title{
    background-color: rgba(162,162,221,0.5); 

}
.wrapper{
    display:flex;
    max-width:1000px;
    flex-wrap:wrap;
    
}
.calendar{
    width:25%;
    padding:10px;
}
</style>

<h4>月曆練習</h4>
<div>年份:2021</div><br>
<!-- 整個表格包起 -->
<div class="wrapper"> 
<?php
$year="2021";
for($m=1;$m<=12;$m++){
?>
<div class="calendar">
<table >
<tr class="title"><td colspan="7">月份:<?=$m;?></td></tr>
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

// echo "第一天星期:".$firstdayweek."<br>";
// echo "月天數:" .$monthdays."天";
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
            }else{
                // 撐起最後一格空間 但建議不要用
                echo "　";
            }
            echo "</td>";
        }    
    }
    echo "</tr>";
}
?>
</table>
</div>
<?php
}
?>
</div>