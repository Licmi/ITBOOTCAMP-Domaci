<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

// 2. Написати функцију која враћа div унутар којег се налази N span елемената који за текст имају
// редом бројеве од 1 до N


function spanWithinDiv($n){
   echo "<div>";
   for($i=1;$i<=$n;$i++){
       echo "<span>$i</span>";
   }
   echo "</div>";
}
 spanWithinDiv(7);

//  3. Бонус задатак Написати функцију која враћа N div елемената који имају M span елемената,
//  који имају текст од 1 до M

function spanWithinDiv2($n,$m){
    for($i=1;$i<=$n;$i++){
        echo "<div>";
        for($j=1;$j<=$m;$j++){
            echo "<span>$j</span>";
        }
        echo "</div>";
    }
}
spanWithinDiv2(5,2);
 






?>
    
</body>
</html>