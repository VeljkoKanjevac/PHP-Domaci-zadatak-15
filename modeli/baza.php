<?php

$baza = mysqli_connect("localhost", "root", "", "domaci_zadatak_14");

if(mysqli_connect_error())
{
    die("Doslo je do greske prilikom povezivanja na bazu.");
}