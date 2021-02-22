<?php
require 'version-objet.php';
require 'versions-static.php';
require './Classes/Utilisateurs.php';
require './Classes/Clients.php';
require './Classes-static/Utilisateurs-static.php';
require './Classes-static/Clients-static.php';

//Creation de la connexion a la base de données
$database = new DbConnect('localhost', 'live', 'root', '');
$link = $database->getDbLink();

$utilisateurs = new Utilisateurs($link);
$clients = new Clients($link);

$utilisateursStatic = new UtilisateursStatic();
$clientsStatic = new ClientsStatic();
