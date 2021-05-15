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

$ime = $_GET['ime'];
$prezime = $_GET['prezime'];

echo $ime." ".$prezime."<br>";

$ime_inicijali = substr($ime,0,1);
$prezime_inicijali = substr($prezime,0,1);

echo $ime_inicijali.".".$prezime_inicijali."."




?>
</body>
</html>