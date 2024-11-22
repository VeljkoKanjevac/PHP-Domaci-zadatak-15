<?php

    if(!isset($_GET["ime"]) || empty($_GET["ime"]))
    {
        die("Niste prosledili ime proizvoda.");
    }

    require_once "baza.php";

    $ime = $_GET["ime"];

    $q = " SELECT * FROM proizvodi WHERE ime LIKE '%$ime%' OR opis LIKE '%$ime%' ";
    $rezultat = $baza -> query($q);

    if($rezultat -> num_rows > 0)
    {
        echo "Uspesno smo pronasli ".$rezultat -> num_rows." proizvoda.";
    }
    else
    {
        echo "Nema proizvoda koji se podudaraju sa pretragom.";
    }