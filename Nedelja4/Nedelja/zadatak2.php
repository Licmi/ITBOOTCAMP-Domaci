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

$br1 = mt_rand(1,50);
$br2 = mt_rand(1,50);
$br3 = mt_rand(1,50);

echo $br1."<br>".$br2."<br>".$br3."<br>"."<br>";

if($br1 < $br2){
    if($br1 < $br3){
        if($br2 < $br3){
            echo $br1."<br>".$br2."<br>".$br3."<br>";
        }else{
            echo $br1."<br>".$br3."<br>".$br2."<br>";
        }
    }else{
        echo $br3."<br>".$br1."<br>".$br2."<br>";
    }
}else{
    if($br2 < $br3){
        if($br1 < $br3){
            echo $br2."<br>".$br1."<br>".$br3."<br>";
        }else{
            echo $br2."<br>".$br3."<br>".$br1."<br>";
        }
    }else{
       echo $br3."<br>".$br2."<br>".$br1."<br>";
    }
}

?>
    
</body>
</html>