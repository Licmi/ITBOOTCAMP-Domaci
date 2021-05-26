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

// 1. Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре)

function max_number($a,$b,$c){
    if($a > $b AND $a > $c){
        return $a;
    }elseif($b>$c){
        return $b;
    }else{
        return $c;
    }
}
echo max_number(20,41,24);



?>
    
</body>
</html>