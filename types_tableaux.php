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

// Contenu de la fiche de révision : Types et Tableaux avec les formulaires
$contenu_fiche = "
<h1>Fiche de révision PHP : Types, tableaux et formulaires</h1>
<h2>1. Types scalaires</h2>
    <ul>
        <li><strong>Entier (<code>int</code>)</strong> : Nombres entiers, ex : <code>5</code>, <code>-3</code>.</li>
        <li><strong>Flottant (<code>float</code>)</strong> : Nombres à virgule, ex : <code>3.14</code>, <code>-0.99</code>.</li>
        <li><strong>Chaîne de caractères (<code>string</code>)</strong> : Texte, ex : <code>'Bonjour'</code>.</li>
        <li><strong>Booléen (<code>bool</code>)</strong> : Valeurs de vérité, <code>true</code> ou <code>false</code>.</li>
        <li><strong>Tableau (<code>array</code>)</strong> : Stocke plusieurs valeurs.
            <pre><code>Sfruits = array('pomme', 'banane', 'cerise');</code></pre>
        </li>
        <li><strong>Objet (<code>object</code>)</strong> : Instance d'une classe.
            <pre><code>class Personne {
    public Snom;
    public function __construct(Snom) {
        Sthis->nom = Snom;
    }
}
Spersonne = new Personne('Alice');</code></pre>
        </li>
    </ul>

    <h2>2. Détection du type d'une variable</h2>
    <p>Utilisez <code>var_dump()</code> pour afficher le type et la valeur :</p>
    <pre><code>Svariable = 42;
var_dump(Svariable); // Affiche : int(42)</code></pre>

    <h2>3. Conversion de types</h2>
    <p>PHP convertit automatiquement les types si nécessaire, ou vous pouvez forcer la conversion :</p>
    <pre><code>Snombre = '10';
Snombre_entier = (int)Snombre; // Conversion explicite</code></pre>

    <h2>4. Bonnes pratiques</h2>
    <ul>
        <li>Vérifiez vos types avec <code>var_dump()</code> ou <code>gettype()</code>.</li>
        <li>Soyez vigilant lors des comparaisons et des opérations entre différents types.</li>
    </ul>

    <h2>Les tableaux en PHP</h2>
    <p>En PHP, un tableau (<code>array</code>) est une structure permettant de stocker plusieurs valeurs dans une seule variable.</p>

    <h3>1. Déclaration d'un tableau</h3>
    <pre><code>Stableau = array('pomme', 'banane', 'cerise');</code></pre>

    <h3>2. Tableau associatif</h3>
    <p>Les tableaux peuvent contenir des paires clé/valeur :</p>
    <pre><code>Spersonne = array(
    'nom' => 'Dupont',
    'age' => 30,
    'ville' => 'Paris'
);</code></pre>

    <h3>3. Accès aux éléments</h3>
    <pre><code>echo Stableau[0];   Affiche 'pomme'
echo Spersonne['nom']; // Affiche 'Dupont'</code></pre>

    <h3>4. Ajout d'un élément</h3>
    <pre><code>Stableau[] = 'orange'; Ajoute 'orange' à la fin du tableau</code></pre>

    <h3>5. Fonctions utiles</h3>
    <ul>
        <li><code>count(Stableau)</code> : Retourne le nombre d'éléments</li>
        <li><code>array_push(Stableau, 'fraise')</code> : Ajoute un élément à la fin</li>
        <li><code>array_pop(Stableau)</code> : Retire le dernier élément</li>
    </ul>

    <h2>Formulaires en PHP</h2>

    <h3>1. Création d'un formulaire HTML</h3>
    <p>Un formulaire est créé avec la balise <code>&lt;form&gt;</code>. Voici un exemple de formulaire :</p>
    <pre><code>
<form method='POST' action='traitement.php'>
  <label for='nom'>Nom :</label>
  <input type='text' id='nom' name='nom'><br><br>

  <label for='email'>Email :</label>
  <input type='email' id='email' name='email'><br><br>

  <input type='submit' value='Envoyer'>
</form>
    </code></pre>

    <h3>2. Traitement des données en PHP</h3>
    <p>Voici comment récupérer et traiter les données envoyées par un formulaire :</p>
    <pre><code>
<?php
if (S_SERVER['REQUEST_METHOD'] == 'POST') {
    Snom = S_POST['nom'];
    Semail = S_POST['email'];

    echo 'Nom : ' . htmlspecialchars(Snom) . '<br>';
    echo 'Email : ' . htmlspecialchars(Semail);
}
?>
    </code></pre>

    <h3>3. Sécurisation des formulaires</h3>
    <p>Il est important de valider et sécuriser les données. Voici comment vérifier la validité des données :</p>
    <pre><code>
<?php
if (S_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(S_POST['nom']) || empty(S_POST['email'])) {
        echo 'Tous les champs sont obligatoires.';
    } else {
        echo 'Formulaire soumis avec succès.';
    }
}
?>
    </code></pre>

    <p>4. Protection contre les attaques XSS et CSRF :</p>
    <pre><code>
// CSRF - Génération d'un jeton
Stoken = bin2hex(random_bytes(32));
S_SESSION['token'] = Stoken;
<input type='hidden' name='token' value='<?php echo Stoken; ?>'>
// Vérification du jeton
if (S_POST['token'] !== S_SESSION['token']) {
    die('Jeton CSRF invalide');
}
    </code></pre>

    <h3>5. Redirection après traitement</h3>
    <pre><code>
header('Location: merci.php');
exit();
    </code></pre>
";
echo $contenu_fiche;

// Affichage du contenu
?>