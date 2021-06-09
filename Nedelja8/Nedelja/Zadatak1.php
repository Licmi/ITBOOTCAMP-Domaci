<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
Napisati konstruktor koji dobija i  postavlja sve clanice.
Napisati metodu za citanje cene.
Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...."

Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom.

U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet. -->

<body>

<?php

class Krevet {

    public $duzina, $sirina, $materijal;
    protected $cena;

    public function __construct($duzina,$sirina,$materijal,$cena){
        
        $this->duzina = $duzina;
        $this->sirina = $sirina;
        $this->materijal = $materijal;
        $this->cena = $cena;
    }
    public function price(){
        echo $this->cena;   
    }
    public function __toString(){
        return "Krevet je duzine ".$this->duzina." i sirine ".$this->sirina.", materijal je ".$this->materijal." i cena mu je ".$this->cena;
    }
    public function popust($popust){
         $this->cena = $this->cena-($this->cena*($popust/100));
         return $this->cena;
    }

}

$krevet1 = new Krevet(200,150,"drvo",20000);
$krevet2 = new Krevet(200,100,"metal",15000);

echo $krevet1."<br>";

$krevet3 = new Krevet(220,160,"drvo",24000);
echo $krevet3."<br>";
$krevet3->popust(10);
echo $krevet3."<br>";




?>
    
</body>
</html>