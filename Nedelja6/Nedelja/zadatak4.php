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

$colors = ["red","blue","green"];
$words = ["table","chair","mobile"];


$c = count($words);

for($i=0;$i<$c;$i++){
    echo "<span style=color:$colors[$i]>$words[$i]</span>";
}

?>
    
</body>
</html>