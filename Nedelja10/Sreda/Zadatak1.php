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
        $this->conn = new mysqli('localhost', 'root', '', $baza);
        if ($this->conn->connect_error)
            die('Greska: '. $this->conn->connect_error);    
    }

    function izvrsi_select($upit){
        $podaci = $this->conn->query($upit);
        return $niz = $podaci->fetch_all(MYSQLI_ASSOC);
        
    }
    function destinacija($drzava,$grad){
        $a = $this->izvrsi_select(" select id from destinacije where drzava='$drzava' and grad='$grad' ");
        return $a;
       
    }
    function putovanja($id){
        $a = $this->izvrsi_select("select id from putovanja where destinacija_id=$id ");
        return $a;
    }

    function brisanje_aranzmana($id){
        $sql = $this->conn->query("delete from spisak_putnika where id_putovanje = $id ");
        return $sql;
    }

}


$a = new turisticka_agencija("turisticka_agencija");

$b = $a->destinacija("Spanija","Madrid");
$c = $a->putovanja($b[0]["id"]);
$d = $a->brisanje_aranzmana($c[0]["id"]);



?>
    
</body>
</html>