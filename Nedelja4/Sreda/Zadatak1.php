<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    div{
        font-size:40px
    }
    
    </style>   

</head>
<body>

<div>

<?php 

$promenljiva_a = 200;
$promenljiva_b = 80;

$zbir = $promenljiva_a + $promenljiva_b;
$proizvod = $promenljiva_a * $promenljiva_b;
$razlika = $promenljiva_a - $promenljiva_b;
$kolicnik = $promenljiva_a / $promenljiva_b;

echo $zbir."<br>".$proizvod."<br>".$razlika."<br>".$kolicnik

?>

</div>


    
</body>
</html>