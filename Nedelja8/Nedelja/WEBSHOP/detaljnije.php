<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-size:2em">
    <?php
    
        include "Proizvod.php";
        $HFM->header();
        $HFM->meni();
        if(!isset($_GET['id'])){
            die("Trazite nepostojecu stranicu!");
        }
        $id =  $_GET['id'];
        $lp->prikazi_jedan_proizvod_detaljnije($id);
        $HFM->footer();

    ?>
</body>
</html>