<?php
$server = 'localhost';
$db = 'live';
$user = 'root';
$pass = ''; // pas de mot de passe sur ma machine

try {
    $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Nous sommes connectés a la base de données";
}
catch (PDOException $exception){
    echo $exception->getMessage();
}
