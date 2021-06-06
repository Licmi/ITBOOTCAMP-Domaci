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

// 1. Dodati u gornji niz jos 4 osobe po zelji.
// 2. Napisati fju koja prikazuje imena svih programera.
// 3. Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci
// tu funkciju prikazati sve osobe cije ime sadrzi slovo s

$array = [
    ["ime"=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ["ime"=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ["ime"=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ["ime"=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
    ];

$array[4] = ["ime"=>"Jovana", "godine"=>22, "grad"=>"Bg", "pozicija"=>"dizajner"];
$array[5] = ["ime"=>"Milos", "godine"=>44, "grad"=>"NS", "pozicija"=>"programer"];
$array[6] = ["ime"=>"Marko", "godine"=>35, "grad"=>"Nis", "pozicija"=>"programer"];
$array[7] = ["ime"=>"Jana", "godine"=>62, "grad"=>"Nis", "pozicija"=>"menadzer"];
    
    

    for($i=0; $i<count($array); $i++){
        echo "<p>".$array[$i]["ime"]." - ".$array[$i]["godine"]." - ".$array[$i]["grad"]." - ".$array[$i]["pozicija"]."</p>";
    }
    
    function programeri($array){
    $programeri="";
    foreach($array as $person)
        if($person["pozicija"] == "programer")
          $programeri.=$person["ime"]." ";
    echo "Programeri su: ".$programeri;
}       
programeri($array);  
    

// 3. Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci
// tu funkciju prikazati sve osobe cije ime sadrzi slovo s

function data($array,$person){
    for($i=0;$i<count($array);$i++)
        if($array[$i]["ime"] == $person)        
           echo "<p>".$array[$i]["ime"]." - ".$array[$i]["godine"]." - ".$array[$i]["grad"]." - ".$array[$i]["pozicija"]."</p>";   
}
data($array,"Ivana");

for($i=0;$i<count($array);$i++){
    if(stripos($array[$i]["ime"],"s") !== false){
        data($array,$array[$i]["ime"]);
    }
}

// if(strpos($array["ime"],"s") !== false){
//     data($array,)
// }




?>

</body>
</html>