<?php
session_start();
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Créez un journal des logs
$log = new Logger('tp-php'); // Par exemple 'game'

// Ajoutez un handler qui écrit tous les messages dans jeu-combat.log
$log->pushHandler(new StreamHandler('logs/app.log', Logger::INFO));

// Exemple d'ajout d'une ligne dans le fichier .log
$log->info("L'utilisateur s'est connecté avec son identifiant et son mot de passe");

// Exemple d'ajout d'une ligne dans le fichier .log
$log->error("Impossible de se connecter à la base de données"); 
// Informations de connexion à la base de données
$host = 'localhost';      // Serveur MySQL
$username = 'root';       // Nom d'utilisateur MySQL
$password = '';           // Mot de passe (vide pour MySQL local)
$dbname = 'tp-php';  // Nom de la base de données que nous allons créer

// Contenu de la fiche de révision : Utilisation des bases de données (exceptions, sesseions et cookies)
$contenu_fiche = "
<h1>Fiche de révision PHP : Bases de Données : Son utilisation, exceptions, les sessions et les cookies</h1>

    <section>
        <h2>Utilisation de la base de données</h2>
        <p>En PHP, pour interagir avec une base de données, on utilise PDO pour exécuter des requêtes préparées, sécurisant ainsi l'application contre les injections SQL.</p>
        <pre>
            Sdbh = new PDO('mysql:host=localhost;dbname=test', Suser, Spass);
            Sstmt = Sdbh->prepare('INSERT INTO table (col1, col2) VALUES (?, ?)');
            Sstmt->execute([Svalue1, Svalue2]);
        </pre>
    </section>

    <section>
        <h2>Exceptions</h2>
        <p>Les exceptions en PHP sont gérées via le bloc try-catch. Lorsqu'une exception est levée, elle peut être attrapée dans le bloc catch et traitée correctement.</p>
        <pre>
            try {
                throw new Exception('Erreur');
            } catch (Exception Se) {
                echo 'Exception capturée : ',  Se->getMessage();
            }
        </pre>
    </section>

    <section>
        <h2>Sessions et Cookies</h2>
        <p>Les sessions permettent de stocker des informations utilisateur sur le serveur, tandis que les cookies stockent des données côté client. Les sessions sont généralement utilisées pour gérer les connexions utilisateurs.</p>
        <pre>
            session_start();
            S_SESSION['user'] = 'JohnDoe'; // Démarre la session et stocke des données
        </pre>
    </section>
";
echo $contenu_fiche;

// Affichage du contenu
?>