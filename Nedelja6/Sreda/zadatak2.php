<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
td{
    width:30px;
    height:30px;
    border:solid black 1px;
}
</style>

<?php

// Dat je slucajan broj od 1 do 64.
// Napraviti tabelu 8x8. Sirina i visina svake celije je 30px i imaju
// border 1px.
// Celiji sa datim brojem postaviti crnu pozadinu. (preko klase ili
// inline style).
// Npr ako je broj 11, onda je celija u drugom redu i 3.koloni
// obojena crno.

$x = mt_rand(1,64);
$c = 0;
echo $x;
echo "<table>";
for($i=1;$i<=8;$i++){
    echo "<tr>";
    for($j=1;$j<=8;$j++){
        $c++;
        if($c == $x){
            echo "<td style='background-color:black;'>";
            echo "</td>";
        }else{
            echo "<td>";
            echo $c;
            echo "</td>";
        }
        
    }
    echo "<tr>";
}
echo "<table>";


?>
    
</body>
</html>