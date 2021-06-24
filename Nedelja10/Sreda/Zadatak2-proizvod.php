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

    include "zadatak2-baza_klasa.php";

    $proizvodi = $a->proizvodi();

    foreach($proizvodi as $proizvod){

        echo "<ul>";

        foreach($proizvod as $value)
            echo "<li>$value</li>";

        echo "<form action='Zadatak2-promena_korpe.php'>";
        echo "<input type='hidden' name='akcija' value='dodaj'>";
        echo "<input type='hidden' name='id_proizvoda' value='".$proizvod['id']."'>";
        echo "<input type='submit' value='Unesi u korpu'>";
        echo "</form>";
        echo "</ul>";
    }
    
    ?>
</body>
</html>