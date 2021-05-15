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
    </style>
</head>
<body>
<?php

$ime_i_prezime = $_GET['ime_i_prezime'];

echo $ime_i_prezime."<br>";

$ime_inicijali = substr($ime_i_prezime,0,1);

$nova = strpos($ime_i_prezime,' ');

$prezime_inicijali = substr($ime_i_prezime,$nova,2);

$inicijali_razmak = $ime_inicijali.".".$prezime_inicijali.".";

$inicijali_bez_razmaka = str_replace(' ','',$inicijali_razmak);

echo $inicijali_bez_razmaka;



?>
    
</body>
</html>