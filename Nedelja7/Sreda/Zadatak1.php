<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.red{
    color:red;
}
.green{
    color:green;
}
</style>
</head>
<body>

<?php
// Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati
// span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od
// toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz.

$array = ["niz","zadatih","element","span","zavisnosti"];
$array1 = [];
for($i=0;$i<count($array);$i++){
    if(strlen($array[$i])>5) array_push($array1,"<span class=red>$array[$i]</span>");
    else array_push($array1,"<span class=green>$array[$i]</span>");
}

echo "Novi niz: ".join(",", $array1)."<br />";



?>
    
</body>
</html>