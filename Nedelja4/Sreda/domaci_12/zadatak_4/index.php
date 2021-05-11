<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    
    table,th,td {
        border:2px solid black;
        border-collapse:collapse;
        text-align:center;
        font-size:40px;
    }
    table {
        table-layout: fixed ;
        width: 10% ;
    }
    td {
        width: 5% ;
    } 
    </style>
</head>
<body>

<?php

$broj1 = mt_rand(1,10);
$broj2 = mt_rand(1,10);
$broj3 = mt_rand(1,10);


?>

<table>
<tr>
<th><?=$broj1?></th>
<th><?=$broj1*$broj1?></th>
</tr>
<tr>
<td><?=$broj2?></td>
<td><?=$broj2*$broj2?></td>

<tr>
<td><?=$broj3?></td>
<td><?=$broj3*$broj3?></td>
</tr>

</table>
    
</body>
</html>