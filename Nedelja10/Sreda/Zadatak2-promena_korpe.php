<?php

include "Zadatak2-stavke_klasa.php";
include "Zadatak2-baza_klasa.php";

if(isset($_GET['akcija']) AND $_GET['akcija'] == 'dodaj'){
    $id = $_GET['id_proizvoda'];
    $proizvod = $a->proizvod($id);
    $k->dodaj_proizvod($id,$proizvod['naziv'],$proizvod['cena'],1);
    $k->prikazi();
}









?>