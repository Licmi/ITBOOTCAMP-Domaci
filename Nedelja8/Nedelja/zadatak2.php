<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

Metoda __toString, ne poziva roditeljski __toString, vec prikazuje dve cene. Cenu kreveta bez baldahina i sa baldahinom (zbirno). 
(Posto je cena u klasi Proizvod private, da bi joj se iz klase Baldahin moglo pristupiti treba ili a) uvesti protected ili b) dodati metodu "daj_cenu")


<?php


require_once("Zadatak1.php");

class Baldahin extends Krevet{
    
    public $visina,$cenaBaldahina;

    public function __construct($duzina,$sirina,$materijal,$cena,$visina,$cenaBaldahina){

           $this->visina = $visina;
           $this->cenaBaldahina = $cenaBaldahina;
           parent::__construct($duzina,$sirina,$materijal,$cena);

    }

    public function __toString(){

        $cena_sa_baldahinom = $this->cena + $this->cenaBaldahina;
        return "Cena kreveta bez baldahina je ".$this->cena. " a cena sa baldahinom je ".$cena_sa_baldahinom;     

    }

    public function prikazuje(){
        echo "Visina kreveta je ".$this->visina;
    }

}

$krevet4 = new Baldahin(220,160,"drvo",24000,50,10000);
echo $krevet4."<br>";
$krevet4->prikazuje();








?>

</body>
</html>