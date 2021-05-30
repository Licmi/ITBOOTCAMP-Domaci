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

$x = [14,30,22,23,34,57,89,103,203,493,888,955];
$y = [20,202,23,312,43,546,34,65,76,866,866,887,29,293,292,333,435];

function digit_counter($n){
$sum1 = 0;
$sum2 = 0;
$c = count($n);
for($i=0;$i<$c;$i++){
    if($n[$i] > 9 AND $n[$i] <= 99){
        $sum1+=1;
    }elseif($n[$i] > 99 AND $n[$i] <= 999){
        $sum2+=1;
    }      
}
if($sum1 > $sum2) echo "Vise ima dvocifrenih:".$sum1;
else echo "Vise ima trocifrenih :".$sum2;
}

digit_counter($x);
echo "<br>";
digit_counter($y);






?>
    
</body>
</html>