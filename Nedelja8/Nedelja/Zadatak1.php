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



class SastojakHrane{

    public $naziv,$mera,$kalorije;
    public function __construct($naziv,$mera,$kalorije){

        $this->naziv = $naziv;
        $this->mera = $mera;
        $this->kalorije = $kalorije;

    }

    public function promeniMeru($nova_mera){

        $this->mera = $nova_mera;

    }
    public function prikazi_sastojke(){

        echo "<p>"."Naziv: ".$this->naziv." Mera: ".$this->mera." Kalorije: ".$this->kalorije;

    }

}


class Jelo{

    public $naslov,$opis,$sastojci;

    public function __construct($naslov,$opis,$podaci){
        $this->naslov = $naslov;
        $this->opis = $opis;
        $this->sastojci = [];
        for($i=0;$i<count($podaci);$i++){
            $sastojak = new SastojakHrane($podaci[$i]["naziv"],$podaci[$i]["mera"],$podaci[$i]["kalorije"]);
            array_push($this->sastojci,$sastojak);
        }
    }

    public function prikazi_jelo(){

        echo "<p>".$this->naslov."<p>"."<p>".$this->opis."</p>";
        for($i=0;$i<count($this->sastojci);$i++)
           $this->sastojci[$i]->prikazi_sastojke();


    }

    public function promeniMeru($sastojak,$mera){

        for($i=0;$i<count($this->sastojci);$i++){
            if($this->sastojci[$i]->naziv == $sastojak){
                $this->sastojci[$i]->promeniMeru($mera);
            }
        }


        // foreach($this->sastojci as $value){
        //     if($value->naziv == $sastojak){
        //         $value->mera == promeniMeru($mera);
        //     }
        // }
    }
}
    $podaci = [
    ["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
    ["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
    ["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
    ["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
    ];
    $jelo = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo->prikazi_jelo();
    $jelo->promeniMeru("brasno", "400g");
    $jelo->prikazi_jelo();



?>
    
</body>
</html>