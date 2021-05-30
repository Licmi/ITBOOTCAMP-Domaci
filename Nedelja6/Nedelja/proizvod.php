<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

div{
    width:200px;
    display:inline-block;
    vertical-align:top;
    text-align:center;
    padding:230px 0 0 220px;;
}
img{
    height:200px;
    width:200px;
    border:15px solid black;
}
.red{
    color:red;
    text-decoration:line-through;
}
.green{
    color:green;
    font-weight:bolder;
}

</style>
</head>
<body>
<?php

function product($name,$picture,$price,$discount){
    $discountPrice = $price - $discount;
    echo "<div>";
    echo $name;
    echo "<img src=$picture>";
    if($discount>0){
        echo "<p class=red>$price</p>";
        echo "<p class=green>$discountPrice</p>";
    }else echo "<p>$price</p>";
    echo "</div>";
}





?>
    
</body>
</html>