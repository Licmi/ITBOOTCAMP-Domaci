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

// 2. Napraviti niz od svih brojeva koji su veći od aritmetičke sredine
// niza (prosečne vrednosti).
$array = [1,3,5,7,9,15,20,24,30,34,35,40];
$sum = 0;
$n = 0;
$array1=[];

for($i=0;$i<count($array);$i++){
    $sum+=$array[$i];
    $n+=1;
}

$mean = $sum/$n;

for($i=0;$i<count($array);$i++){
    if($array[$i] > $mean) array_push($array1,$array[$i]);
}

echo "Niz brojeva vecih od aritmeticke sredine: ".join(",", $array1)."<br />";







?>
    
</body>
</html>