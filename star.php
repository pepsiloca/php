<?php

//印星星

for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){

        echo "*";
}
    echo"<br>";
}


for($i=0;$i<5;$i++){
    for($j=0;$j<(5-$i);$j++){

        echo "*";
}
    echo"<br>";
}


for($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){

        echo "*";
}
    echo"<br>";
}

//正三角形

echo"<hr>";

for($i=0;$i<5;$i++){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<($i*2+1);$j++){

        echo "*";
}
    echo"<br>";
}


//菱形

echo "<hr>";

for($i=0;$i<5;$i++){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<($i*2+1);$j++){

        echo "*";
}
  echo "<br>";
}

for($i=3;$i>=0;$i--){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<($i*2+1);$j++){

        echo "*";
}
  echo "<br>";  
  }


//解法二
echo"<hr>";
for($i=0;$i<9;$i++){

    //利用判斷式來決定t的值, 再用t的值來決定空白與星星的數量
    if($i<=4){
        $t=$i;
    }else{
        $t=8-$i;
    }

    // 印空白
    for($k=0;$k<(4-$t);$k++){
        echo "&nbsp;";
    }

    //印星星
    for($j=0;$j<($t*2+1);$j++){

        echo "*";
}

 //斷行

  echo "<br>";  
  }



//矩行
echo "<hr>";
for($i=0;$i<5;$i++){

    if($i==0 || $i==4){

      for($j=0;$j<5;$j++){
          echo "*";
    }
}else{

    for($k=0;$k<5;$k++){
        
        if($k==0 || $k==4){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
}
    echo "<br>";
}

//矩行交叉
echo "<hr>";

$x=10;

for($i=0;$i<5;$i++){

    if($i==0 || $i==4){

      for($j=0;$j<5;$j++){
          echo "*";
    }
}else{

    for($k=0;$k<5;$k++){
        
        if($k==0 || $k==4 || $k==$i || $k==(4-$i)){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
}
    echo "<br>";
}



//矩行交叉 (帶變數)
echo "<hr>";

$x=20;

for($i=0;$i<$x;$i++){

    if($i==0 || $i==$x-1){

      for($j=0;$j<$x;$j++){
          echo "*";
    }
}else{

    for($k=0;$k<$x;$k++){
        
        if($k==0 || $k==($x-1) || $k==$i || $k==($x-$i-1)){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
}
    echo "<br>";
}





?>