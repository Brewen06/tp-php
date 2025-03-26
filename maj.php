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

// Contenu de la fiche de révision : Erreurs et mises à jours
$contenu_fiche = "
 <h1>Fiche de révision PHP : Erreurs et Mise à jour - include, require, .env, Composer</h1>

    <h2>1. Les erreurs liées à `include` et `require`</h2>
    <p>En PHP, les fonctions <code>include</code> et <code>require</code> sont utilisées pour inclure des fichiers externes dans un script. Cependant, elles présentent des différences importantes en matière de gestion des erreurs :</p>
    <ul>
        <li><strong>include</strong> : Si le fichier spécifié n'est pas trouvé, PHP génère un avertissement (warning), mais l'exécution du script continue.</li>
        <li><strong>require</strong> : Si le fichier spécifié est introuvable, PHP génère une erreur fatale (fatal error) et l'exécution du script s'arrête immédiatement.</li>
    </ul>

    <h2>2. Différence entre `include` et `require`</h2>
    <p>Le principal avantage de <code>require</code> est qu'il garantit l'inclusion du fichier avant l'exécution du reste du code. Si ce fichier est essentiel au bon fonctionnement de l'application, utilisez <code>require</code> pour éviter les erreurs.</p>
    <pre>
         Exemple d'utilisation de require :
        require 'config.php';  Si 'config.php' est introuvable, une erreur fatale est générée
    </pre>
    <p>Dans le cas de <code>include</code>, vous pouvez utiliser un mécanisme de vérification pour gérer les erreurs :</p>
    <pre>
        if (file_exists('config.php')) {
            include 'config.php';  Le fichier est inclus si il existe
        } else {
            echo 'Le fichier config.php est manquant';
        }
    </pre>

    <h2>3. Utilisation d'un fichier `.env` pour la gestion des variables d'environnement</h2>
    <p>Les fichiers <code>.env</code> sont utilisés pour stocker des informations sensibles, telles que les clés API, les configurations de base de données, etc., afin d'éviter de les laisser en dur dans le code source.</p>
    <p>Pour utiliser un fichier <code>.env</code> en PHP, il faut une bibliothèque comme <code>vlucas/phpdotenv</code>. Voici un exemple de configuration :</p>
    <pre>
         1. Installer la bibliothèque avec Composer
        composer require vlucas/phpdotenv

         2. Charger et utiliser les variables d'environnement dans votre code PHP
        <?php
        require_once 'vendor/autoload.php';

         Charger les variables depuis le fichier .env
        Sdotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        Sdotenv->load();

         Accéder à une variable d'environnement
        SdbPassword = getenv('DB_PASSWORD');
        echo 'Le mot de passe de la base de données est : ' . SdbPassword;
        ?>
    </pre>
    <p>Dans cet exemple, le fichier <code>.env</code> pourrait ressembler à ceci :</p>
    <pre>
        DB_PASSWORD=secret
        DB_USER=root
        DB_HOST=localhost
        DB_NAME=jean-michel
        MAIL_USER=jean-michel@mail.net
        MAIL_PASS=jeanmilebg
    </pre>

    <h2>4. Utilisation de Composer pour la gestion des dépendances</h2>
    <p><strong>Composer</strong> est un gestionnaire de dépendances pour PHP qui permet de gérer facilement les bibliothèques et les packages nécessaires à votre projet.</p>
    <ul>
        <li><strong>Installation de Composer :</strong> Vous pouvez installer Composer sur votre machine en suivant les instructions de la documentation officielle.</li>
        <li><strong>Initialiser un projet avec Composer :</strong> Utilisez la commande suivante pour créer un fichier <code>composer.json</code> dans votre projet :</li>
    </ul>
    <pre>
        composer init
    </pre>
    <p>Vous serez ensuite invité à définir les informations du projet (nom, version, description) et à ajouter les dépendances.</p>
    <ul>
        <li><strong>Ajouter des dépendances :</strong> Pour installer une bibliothèque, vous pouvez utiliser :</li>
    </ul>
    <pre>
        composer require monolog/monolog
    </pre>
    <p>Cette commande ajoute automatiquement la bibliothèque à votre fichier <code>composer.json</code> et la télécharge dans le répertoire <code>vendor</code>.</p>
    <p>Vous pouvez aussi installer toutes les dépendances listées dans le fichier <code>composer.json</code> avec :</p>
    <pre>
        composer install
    </pre>

    <h2>5. Conclusion</h2>
    <p>En résumé :</p>
    <ul>
        <li><code>include</code> et <code>require</code> permettent d'inclure des fichiers externes, mais avec des comportements différents en cas d'erreur (avertissement pour <code>include</code>, erreur fatale pour <code>require</code>).</li>
        <li>Les fichiers <code>.env</code> permettent de gérer les configurations sensibles de manière sécurisée.</li>
        <li>Composer est un outil indispensable pour gérer les dépendances de votre projet PHP et simplifier l'intégration de bibliothèques externes.</li>
    </ul>
";
echo $contenu_fiche;

// Affichage du contenu
?>