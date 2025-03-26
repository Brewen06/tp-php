<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiches de Révision</title>
</head>
<body>
<center>
    <h1>Fiches de Révision</h1>
</center>
<hr>
<table width="100%">
<tr>
    <td width="50%">
        <form method="post">
            <button type="submit" name="rafraichir">Rafraîchir la fiche</button>
        </form>
        <br>
    </td>
</table>
<table>
    <td>
        <form method="post">
            <button type="submit" name="fiche" value="bases.php">Variables, fonctions et boucles</button>
        </form> <br><br>

        <form method="post">
            <button type="submit" name="fiche" value="types_tableaux.php">Les types et tableaux</button>
        </form> <br><br>

        <form method="post">
            <button type="submit" name="fiche" value="MAJ.php">Les erreurs et les mises à jour</button>
        </form> <br><br>

        <form method="post">
            <button type="submit" name="fiche" value="BD.php">Les bases de données</button>
        </form> <br><br>
    </td>
    <td>
        <div class="fiche" style="border:1px solid #000; padding:10px;">
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
           $dbname = 'tp-php';   // Nom de la base de données que nous allons créer
           

            if (isset($_POST['fiche'])) {
                $fichier = basename($_POST['fiche']); // Récupération des fichiers sans les chemins
                $chemin = __DIR__ . '/' . $fichier;

                if (file_exists($chemin)) {
                    include_once($chemin); // Inclusion et exécution du contenu PHP 
                } else {
                    echo "Impossible de charger la fiche.";
                }
            } elseif (isset($_POST['rafraichir'])) {
                echo "Fiche rafraîchie. Cliquez sur une fiche pour l'afficher.";
            } else {
                echo "Veuillez sélectionner une fiche pour commencer.";
            }
            ?>
        </div>
    </td>
</tr>
</table>
</body>
</html>
