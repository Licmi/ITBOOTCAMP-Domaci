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

// 2. Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje
// 100.000. Prikazati konacan rezultat crvenom bojom a poslednje
// pomnozeni broj - zelenom

$br = 30;
$p = 1;
while($p<100000){
    $ppb=$br;
    $p=$p*$br;
    $br--;    
}
echo "<p style='color:red;'>$p<p>"."<br>";
echo "<p style='color:green;'>$ppb</p>";



?>
</body>
</html>