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

$input = $_GET['array']."<br>";
function get_array($input){
    $array = explode(" ",$input);
    return $array;
}
echo "Niz brojeva iz inputa je: ".join(",", get_array($input))."<br />";

$array_from_input = get_array($input);

// var_dump($array_from_input = get_array($input));

for($i=0;$i<count($array_from_input);$i++)
    settype($array_from_input[$i],"integer");

// var_dump($array_from_input);

echo at_least_three_even($array_from_input)."<br>";
if(every_number_smaller_than_1000($array_from_input))
            echo "Svi su manji od 1000";
        else    
            echo "Nisu svi manji od 1000";


$array1 = [5,10,20,13,17,501,600,100];

function at_least_three_even($array){
    $c=0;
    for($i=0;$i<count($array);$i++)
        if($array[$i] % 2 == 0) $c+=1;
    if($c < 3) return "Ne postoje bar 3 parna broja";
    else return "Postoje bar 3 parna broja";
}
// echo at_least_three_even($array1)."<br>";

function every_number_smaller_than_1000($array){
    $a=true;
    for($i=0;$i<count($array);$i++)
       if($array[$i] > 1000) $a=false;
    return $a;
}
// if(every_number_smaller_than_1000($array1))
//             echo "ima";
//         else    
//             echo "nema";


?>
    
</body>
</html>