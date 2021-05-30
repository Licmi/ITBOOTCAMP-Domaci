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

$array1 = ["Proizvod1","Proizvod2","Proizvod3","Proizvod4","Proizvod5","Proizvod6","Proizvod7"];

function menu($array){
    echo "<ul>";
    foreach($array as $word)
      echo "<li>$word</li>";
    echo "</ul>";
}
menu($array1);

// nije mi jasan tekst drugog dela zadatka



?>
    
</body>
</html>