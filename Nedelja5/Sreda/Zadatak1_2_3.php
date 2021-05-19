<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<style>

*{
    font-size:30px;
}


</style>
</head>
<body>
<!-- 1. Napisati fju koja za zadata dva imena (globalne promenljive)
ispisuje duze ime.
2. Napisati fju koja za zadata dva imena (globalne promenljive)
vraca duze ime. Pri pozivanju prikazati rezultat.
3. Dodati u prethodni program fju koja vraca krace ime.
Prikazati duze ime u crvenoj, a krace ime u zelenoj boji. -->

<?php


$ime1 = 'Nikolina';
$ime2 = 'Nikola';

function duzeIme(){
    global $ime1, $ime2;
    if(strlen($ime1) > strlen($ime2)){
        echo $ime1;
    }else{
        echo $ime2;
    }

}

duzeIme();


$ime3 =  'Jovan';
$ime4 = 'Jovana';

function duzeImePozivanje(){
    global $ime3, $ime4;
    if(strlen($ime3) > strlen($ime4)){
        return $ime3;
    }else{
        return $ime4;
    }
    
}
function kraceImePozivanje(){
    global $ime3, $ime4;
    if(strlen($ime3) > strlen($ime4)){
        return $ime4;
    }else{
        return $ime3;
    }
}



$pozivanje1 = duzeImePozivanje();
$pozivanje2 = kraceImePozivanje();

echo "<p>Resenje drugog zadatka je: $pozivanje1</p>";

echo "<p style='display:inline;'>Resenja treceg zadatka su: </p>"."<span style='color:red;'>$pozivanje1, </span>"."<span style='color:green;'>$pozivanje2</span>";







?>
  


</body>
</html>