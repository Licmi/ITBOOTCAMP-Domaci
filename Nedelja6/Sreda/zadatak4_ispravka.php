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
    function spanWithinDiv($n, $m){
        $spanWithinDiv = "";
        for($i=1; $i<=$n; $i++){
            $spanWithinDiv .= "<div>";
            for($x=1; $x<=$m; $x++){
                $spanWithinDiv .= "<span>$x</span>";
            }
        $spanWithinDiv .= "</div>";
        }
        return $spanWithinDiv;
    }

    echo spanWithinDiv(5, 2);
?>

    
</body>
</html>