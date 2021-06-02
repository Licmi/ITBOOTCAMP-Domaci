<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za dati niz koji predstavlja kolika je uspesnost
uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29,
'cetvrtak'>28, 'petak=>28] pronalazi:
- Koji dan je najuspesniji
- Kolika je prosecna uspesnost
- Razliku izmedju najbolje i najgore uspesnosti -->
<?php

$array = ["ponedeljak" => 27,"utorak" => 29,"cetvrtak" => 28,"petak" => 28];
print_r($array);
echo "<br>";

function success($array){

    $max = max($array);
    $key = array_search($max, $array);

    $min = min($array);
    $key2 = array_search($min,$array);

    $difference = $max - $min;

    echo "Najuspesniji je $key sa $max, najneuspesniji je $key2 sa $min a razlika je $difference."."<br>";

    $sum = 0;
    $c = 0;

    foreach($array as $key => $value)
       $sum+=$value;
       $c+=1;

    echo "Prosek je ".$prosek = $value/$c.".";
}

success($array);





?>
    
</body>
</html>