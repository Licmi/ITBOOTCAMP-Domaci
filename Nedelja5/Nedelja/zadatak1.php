<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    
    </style>
</head>
<body>


<?php

// 1. Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi
// span ima vase ime, drugi span vase prezime. Izracunati koliko ima
// slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko
// puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta)

function prikazuje(){

    echo "<p> <span>Nikola</span><br>Milic<span></span> <p>";
}

$duzina = 11;

for($i=1;$i <= $duzina;$i++){
    prikazuje();
}





?>
    
</body>
</html>




