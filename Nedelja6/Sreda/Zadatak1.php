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


echo "<table border='1'";
for($i=2;$i<=6;$i+=2){
    echo "<tr>";
    for($j=3;$j<=12;$j+=3){
        echo "<td>"."$i - $j"."</td>";
    }
    echo "<tr>";
}
echo "<table>";









?>
    
</body>
</html>