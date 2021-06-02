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

// Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u
// suprotnom vraca false

$array = [1,2,4,6,7,5,30,44,56,0];

function are_there_zeros($array){
$a = true;
for($i=0;$i<count($array);$i++)
    if($array[$i] == 0) $a=false;
return $a;
}
if(are_there_zeros($array))
    echo "Niz ne sadrzi nule";
else 
    echo "Niz sadrzi nule";


?>    
</body>
</html>