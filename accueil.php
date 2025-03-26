<?php
session_start();
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('tp-php'); 

$log->pushHandler(new StreamHandler('logs/app.log', Logger::INFO));
$log->info("L'utilisateur s'est connecté avec son identifiant et son mot de passe");
$log->error("Impossible de se connecter à la base de données"); 

$host = 'localhost';      // Serveur MySQL
$username = 'root';       // Nom d'utilisateur MySQL
$password = '';           // Mot de passe (vide pour MySQL local)
$dbname = 'tp-php';  // Nom de la base de données que nous allons créer


$dbh = new PDO('mysql:host=localhost;dbname=tp-php', $user, $password);
$stmt = $dbh->prepare("INSERT INTO users (name, nom, prenom) VALUES ($nom, $prenom)");

?>

<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <center>
        <h1>Accueil</h1>
    </center>
    <h2>Qui êtes-vous ?<h2>
    <input type="text">Votre nom</input>
    <input type="text">Votre prénom</input>
    <input type="submit">Envoyer</input>
</body>
</html>