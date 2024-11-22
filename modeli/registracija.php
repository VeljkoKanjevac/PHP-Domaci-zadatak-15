<?php

if(!isset($_POST["email"]) || empty($_POST["email"]))
{
    die("Email nije prosledjen!");
}

if(!isset($_POST["lozinka"]) || empty($_POST["lozinka"]))
{
    die("Lozinka nije prosledjena!");
}

$email = $_POST["email"];
$lozinka = password_hash($_POST["lozinka"],PASSWORD_BCRYPT);

require_once "baza.php";

$baza -> query("INSERT INTO korisnici (email, lozinka) VALUES ('$email', '$lozinka')");