<?php
// Contenu de la fiche de révision : Types et Tableaux avec les formulaires
$contenu_fiche = "
<h1>Fiche de révision PHP : Types, tableaux et formulaires</h1>
<h2>Les types</h2>
<h3>1. Types courants</h3>
    <ul>
        <li><strong>Entier (<code>int</code>)</strong> : Nombres entiers, ex : <code>5</code>, <code>-3</code>.</li>
        <li><strong>Flottant (<code>float</code>)</strong> : Nombres à virgule, ex : <code>3.14</code>, <code>-0.99</code>.</li>
        <li><strong>Chaîne de caractères (<code>string</code>)</strong> : Texte, ex : <code>'Bonjour'</code>.</li>
        <li><strong>Booléen (<code>bool</code>)</strong> : Valeurs de vérité, <code>true</code> ou <code>false</code>.</li>
		<li><strong>Tableau (<code>(array)</code>)</strong> : Valeurs de vérité, <code>true</code> ou <code>false</code>.</li>
		<li><strong>Objet (<code>object</code>)</strong> : Instance d'une classe.
            
    </ul>

    <h3>2. Types composés</h3>
    <ul>
        <li><strong>Tableau (<code>array</code>)</strong> : Stocke plusieurs valeurs.
            <pre><code>$fruits = array('pomme', 'banane', 'cerise');</code></pre>
        </li>
        <li><strong>Objet (<code>object</code>)</strong> : Instance d'une classe.
            <pre><code>class Personne {
    public $nom;
    public function __construct($nom) {
        $this->nom = $nom;
    }
}
$personne = new Personne('Alice');</code></pre>
        </li>
    </ul>

    <h3>3. Type spécial</h3>
    <p><strong>NULL</strong> : Représente une variable sans valeur.</p>

    <h3>4. Détection du type d'une variable</h3>
    <p>Utilisez <code>var_dump()</code> pour afficher le type et la valeur :</p>
    <pre><code>$variable = 42;
var_dump($variable); // Affiche : int(42)</code></pre>

    <h3>5. Conversion de types</h3>
    <p>PHP convertit automatiquement les types si nécessaire, ou vous pouvez forcer la conversion :</p>
    <pre><code>$nombre = '10';
$nombre_entier = (int)$nombre; // Conversion explicite</code></pre>

    <h3>6. Bonnes pratiques</h3>
    <ul>
        <li><code>var_dump()</code> ou <code>gettype()</code> sont généralement utilisable pendant le développement et le débogage.</li>
        <li>Les opérateurs.</li>
		<ul>
			<li>'=' : opérateur d'affectation, attribut une valeur à une variable.</li>
			<li>'==' : opérateur de comparaison d'égalité, vérifie l'égalité de deux valeurs.</li>
			<li>'===' : opérateur de comparaison d'identité, vérifie si deux valeurs sont égaux et s'ils sont du même types.</li>
			
    </ul>

";
echo $contenu_fiche;

// Affichage du contenu
?>