
<?php

// $weight=$_GET['weight'];
// $height=$_GET['height'];


//isset() or empty()
if(isset($POST['$weight']) && isset($POST['$height']) ){


$weight=$_POST['weight'];
$height=$_POST['height'];

echo "你輸入的身高是:".$height."<br>";
echo "你輸入的體重是:".$weight."<br>";


if(!empty($height)){
    echo "你的BMI是:".($weight/($height*$height));
}else{
    echo "<span style='color:red'>請輸入正確的身高值</span>";
    }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
<h4>BMI計算機</h4>
<form action="?" method="post">
    體重(公斤):<input type="number" name="weight"  ><br>
    身高(公尺):<input type="number" name="height"   step="0.01" ><br>
    <input type="submit" value="送出">
</form>    
</body>
</html>

