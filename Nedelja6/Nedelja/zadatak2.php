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

$array1 = ["kapak","kapa","kajak","kaja"];
$array2 = ["dovod","odvod","radar","rada"];

function is_it_palindrome($array){
    foreach($array as $word){
        if($word === strrev($word))
          echo $word."<br>";
    }
}
is_it_palindrome($array1);
is_it_palindrome($array2);


?>
    
</body>
</html>