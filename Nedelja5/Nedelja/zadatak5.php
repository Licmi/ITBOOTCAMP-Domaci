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

// 3. Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva
// cifra deljiva sa 3, ili je druga cifra deljiva sa 4.


for($i=30;$i<=99;$i++){
    $br1 = floor($i/10);
    $br2 = $i % 10;
    if($br1 % 3 == 0){
        continue;
    }elseif($br2 % 4 == 0){ 
        continue;
    }else{
        echo $i."<br>";  
    }  
}




?>
    
</body>
</html>