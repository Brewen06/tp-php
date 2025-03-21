<?php
// Contenu de la fiche de révision : Variables, Fonctions, Boucles en PHP
$contenu_fiche = "
<h2>Variables, Fonctions et Boucles en PHP</h2>

<h3>1. Les Variables en PHP</h3>
<p>Une variable est une zone de stockage de données en mémoire. En PHP, une variable commence toujours par le signe <code>\$</code> suivi de son nom. Les variables peuvent contenir différents types de données : chaînes de caractères, entiers, flottants, tableaux, objets, etc.</p>

<h4>Exemple de variables :</h4>
<pre>
\$nom = 'Jean';  // Chaîne de caractères
\$age = 25;      // Entier
\$prix = 19.99;  // Flottant
\$est_actif = true; // Booléen
</pre>

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