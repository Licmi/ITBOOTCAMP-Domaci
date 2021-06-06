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

$x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
   ];

//    Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)

$x = array_map(function($osoba){
    $osoba["godine_staza"] = [];
    for($i=0;$i<count($osoba);$i++)
       $osoba["godine_staza"] = mt_rand(1,3);
    return $osoba;
},$x);


function prikazi_osobu($osoba){
    echo "<p>".join(",", $osoba)."</p>";
}
function prikazi_osobe($x){
    for($i=0; $i<count($x); $i++)
        prikazi_osobu($x[$i]);
}


prikazi_osobe($x);






// print_r($x);
//    Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)

echo "<br>"."<br>";
usort($x,function($a,$b){
     return $a["godine_staza"] - $b["godine_staza"];
});

prikazi_osobe($x);

// print_r($x);


//    Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)

$max = 0;
for($i=0;$i<count($x);$i++){
   if($max <= $x[$i]["godine_staza"])
   $max = $x[$i]["godine_staza"];
}

$y = array_filter($x,function($osoba){
    global $max;
    if($osoba["godine_staza"] === $max)
        return true;
    else
        return false;
});



print_r($y);
    
    


  


?>    
</body>
</html>