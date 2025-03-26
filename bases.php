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

// Contenu de la fiche de révision : Variables, Fonctions, Boucles en PHP
$contenu_fiche = "
<h2>Fiche de révision : Variables, Fonctions et Boucles en PHP</h2>

<h3>1. Les Variables en PHP</h3>
<p>Une variable est une zone de stockage de données en mémoire. En PHP, une variable commence toujours par le signe <code>\$</code> suivi de son nom. Les variables peuvent contenir différents types de données : chaînes de caractères, entiers, flottants, tableaux, objets, etc.</p>

<h4>Exemple de variables :</h4>
<pre>
\$nom = 'Jean';  // Chaîne de caractères
\$age = 25;      // Entier
\$prix = 19.99;  // Flottant
\$est_actif = true; // Booléen
</pre>

<h4>La portée d'un variable</h4>

<ul>
<li>Variable Globale
	<ul>
	<li>Définie en dehors d’une fonction.

	<li>Accessible partout dans le script sauf dans une fonction sans déclaration spéciale.

	<li>Pour l’utiliser dans une fonction, il faut la déclarer avec le mot-clé global.
	</ul>
<li>Variable Locale
	<ul>
	<li>Définie à l’intérieur d’une fonction.

	<li>Accessible uniquement dans cette fonction.

	<li>Elle est réinitialisée à chaque appel de la fonction.
	</ul>
<li>Variable Statique
	<ul>
	<li>Déclarée avec le mot-clé static dans une fonction.

	<li>Sa valeur est conservée entre les appels de la fonction.
	</ul>
</ul>

<h4>Par Valeur ou par Référence ?</h4>
<ul>
<li>Passage par valeur -> une copie est faite sans modification de l'originale.
<li>Passage par référence -> les variables partagent la même valeur en mémoire avec modification. On utilise le symbole <code>&</code> signiafiant 'et commercial'.
</ul>

<h3>2. Les Fonctions en PHP</h3>
<p>Une fonction est un bloc de code réutilisable qui peut être exécuté à plusieurs reprises. En PHP, une fonction est définie avec le mot-clé <code>function</code> suivi du nom de la fonction et de ses paramètres éventuels.</p>

<h4>Exemple de fonction :</h4>
<pre>
function saluer(\$nom) {
    echo 'Bonjour, ' . \$nom . '!';
}

saluer('Alice'); // Affiche : Bonjour, Alice!
</pre>

<h4>Fonction avec valeur de retour :</h4>
<pre>
function additionner(\$a, \$b) {
    return \$a + \$b;
}

\$resultat = additionner(5, 3); // \$resultat = 8
</pre>

<h3>3. Les Boucles en PHP</h3>
<p>Les boucles permettent d'exécuter un bloc de code plusieurs fois. En PHP, il existe plusieurs types de boucles : <code>while</code>, <code>for</code>, <code>foreach</code>, etc.</p>

<h4>Exemple de boucle <code>while</code> :</h4>
<pre>
\$i = 0;
while (\$i < 5) {
    echo \$i . '<br>';
    \$i++; // Incrémentation
}
</pre>

<h4>Exemple de boucle <code>for</code> :</h4>
<pre>
for (\$i = 0; \$i < 5; \$i++) {
    echo \$i . '<br>';
}
</pre>

<h4>Exemple de boucle <code>foreach</code> (idéal pour les tableaux) :</h4>
<pre>
\$noms = ['Alice', 'Bob', 'Charlie'];
foreach (\$noms as \$nom) {
    echo \$nom . '<br>';
}
</pre>

<h3>Résumé :</h3>
<ul>
    <li><strong>Les variables</strong> permettent de stocker des valeurs dans la mémoire.</li>
    <li><strong>Les fonctions</strong> regroupent du code réutilisable, acceptent des paramètres et peuvent retourner une valeur.</li>
    <li><strong>Les boucles</strong> sont utilisées pour répéter une tâche plusieurs fois de manière itérative.</li>
</ul>
";

// Affichage du contenu
echo $contenu_fiche;
?>