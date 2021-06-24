<?php

class Baza{
        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost', 'root', '', $baza);
            if ($this->conn->connect_error)
                die('Greska: '. $this->conn->connect_error);
        }
           

        function izvrsi_select($upit){
            $podaci = $this->conn->query($upit);
            if($podaci === false)
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }
        
        function proizvodi(){
            $r = $this->izvrsi_select("select * from proizvodi");
            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }
        function proizvod($id){
            $r = $this->izvrsi_select("select * from proizvodi WHERE id=$id");
            if($r['uspesno'] == true){
                return $r['niz'][0];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }
    }

    $a = new Baza("Proizvodi");

?>