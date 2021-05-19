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
p{
    font-weight:bolder;
}
</style>
</head>
<body>

<?php

$br1 = $_GET['a'].'<br>';
$br2 = $_GET['b'].'<br>';
$br3 = $_GET['c'].'<br>';
$br4 = $_GET['d'].'<br>';

// echo "$br1 is". is_numeric($br1)."<br>";

settype($br1, "integer");
settype($br2, "integer");
settype($br3, "integer");
settype($br4, "integer");

// echo "$br1 is". is_numeric($br1)."<br>";


if($br2 > $br1 AND $br4 > $br3){
    $zbir1=0;
    for($br1 ; $br1<=$br2 ;$br1++){
        if($br1 % 4 == 0){
            $zbir1+=$br1;
        }
    }
    // echo $zbir1.'<br>';
    $zbir2=0;
    for($br3;$br3<=$br4;$br3++){
        if($br3 % 3 == 0){
            $zbir2+=$br3;
        }
    }
    //  echo $zbir2.'<br>';
}else{
    die("<p> Uslov nije ispunjen </p>");
}


if($zbir1 > $zbir2){
    echo "<p> Veci je zbir 1 i on iznosi: $zbir1</p>";
}else{
    echo "<p> Veci je zbir 2 i on iznosi: $zbir2</p>";
}



?>
    
</body>
</html>