<?php
// Contenu de la fiche de révision : Utilisation des bases de données
$contenu_fiche = "
<h1>Fiche de révision PHP : Bases de Données : Son utilisation, exceptions, les sessions et les cookies</h1>

    <section>
        <h2>Utilisation de la base de données</h2>
        <p>En PHP, pour interagir avec une base de données, on utilise PDO pour exécuter des requêtes préparées, sécurisant ainsi l'application contre les injections SQL.</p>
        <pre>
            $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
            $stmt = $dbh->prepare('INSERT INTO table (col1, col2) VALUES (?, ?)');
            $stmt->execute([$value1, $value2]);
        </pre>
    </section>

    <section>
        <h2>Exceptions</h2>
        <p>Les exceptions en PHP sont gérées via le bloc try-catch. Lorsqu'une exception est levée, elle peut être attrapée dans le bloc catch et traitée correctement.</p>
        <pre>
            try {
                throw new Exception("Erreur");
            } catch (Exception $e) {
                echo 'Exception capturée : ',  $e->getMessage();
            }
        </pre>
    </section>

    <section>
        <h2>Sessions et Cookies</h2>
        <p>Les sessions permettent de stocker des informations utilisateur sur le serveur, tandis que les cookies stockent des données côté client. Les sessions sont généralement utilisées pour gérer les connexions utilisateurs.</p>
        <pre>
            session_start();
            $_SESSION['user'] = 'JohnDoe'; // Démarre la session et stocke des données
        </pre>
    </section>
";
echo $contenu_fiche;

// Affichage du contenu
?>