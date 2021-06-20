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

class turisticka_agencija{

    public $conn;
    function __construct($baza){
        $this->conn = new mysqli('localhost','root','',$baza);

        if($this->conn->connect_error)
           die("Greska: ".$this->conn->connect_error);
    }
    function izvrsi_select($upit){
        $podaci = $this->conn->query($upit);
        if($podaci === false)
            return ['uspesno'=>false, 'poruka'=>$this->conn->error];
        else
            $niz = $podaci->fetch_all(MYSQLI_ASSOC);
            return ['uspesno'=>true, 'niz'=>$niz];
}
    function prikazi_destinacije(){
    $r = $this->izvrsi_select("select drzava, grad, datum_polaska, datum_povratka
    from putovanja join destinacije on putovanja.destinacija_id=destinacije.id");
    if($r['uspesno'] == true){
        return $r['niz'];
    }else{
        die("Neuspesan upit: ".$r['poruka']);
    }
}
   function prikazi_putnike(){

    $r = $this->izvrsi_select("select broj_pasosa, drzava, grad , datum_polaska, datum_povratka
    from (putovanja join destinacije on putovanja.destinacija_id=destinacije.id) join spisak_putnika on putovanja.id=spisak_putnika.id_putovanje");
    if($r['uspesno'] == true){
        return $r['niz'];
    }else{
        die("Neuspesan upit: ".$r['poruka']);
    }

   }

   function otkazi($br){
    $odg = $this->conn->query("delete from spisak_putnika where broj_pasosa=$br");
    if($odg === false) {
        die('Nije izvrsen upit: ' . $this->conn->error);
    } else {
        echo "Uspesno izvrsen upit!";
    }

}
}

$a = new turisticka_agencija("turisticka_agencija");

$destinacije= $a->prikazi_destinacije();


echo "<table border='1'>";
        foreach($destinacije as $red) {
            echo "<tr>";
            foreach($red as $val)
                echo '<td>'. $val . '</td>';
            echo "</tr>";
        }
echo "</table>";



$putnici = $a->prikazi_putnike();
echo "<table border='1'>";
        foreach($putnici as $red) {
            echo "<tr>";
            foreach($red as $val)
                echo '<td>'. $val . '</td>';
            echo "</tr>";
        }
echo "</table>";

$a->otkazi(64);

$putnici = $a->prikazi_putnike();
echo "<table border='1'>";
        foreach($putnici as $red) {
            echo "<tr>";
            foreach($red as $val)
                echo '<td>'. $val . '</td>';
            echo "</tr>";
        }
echo "</table>";








    







?>
    
</body>
</html>