<h4>字串學會PHP網頁程式設計，薪水會加倍，工作會好找，請將"程式設計"四字放大並變色</h4>
<?php
//用變數彈性大更改容易
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$search="程式設計";
$target="<span style='color:red';'font-size:36px'>程式設計</span>";

echo str_replace($search,$target,$str);




// echo  str_replace("武漢肺炎", "<span style='color:red';font-size:24px>武漢肺炎</span>",$str);

?>

