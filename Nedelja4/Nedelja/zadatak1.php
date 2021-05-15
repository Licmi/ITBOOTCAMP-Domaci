<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    *{
        font-size:40px;
    }

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

$broj_1 = mt_rand(1,20);
$broj_2 = mt_rand(1,20);

echo $broj_1."<br>".$broj_2;

if($broj_1 > $broj_2){
    echo "<p style='color:green;'>$broj_1</p>";
}else{
    echo "<p style='color:red;'>$broj_2</p>";
}

if($broj_1 > $broj_2){
    $klasa = "green";
}else{
    $klasa = "red";
}

echo "<p style='color:$klasa;'>$broj_2</p>";



?>
    
</body>
</html>