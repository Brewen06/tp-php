<?php
// Contenu de la fiche de révision
$contenu_fiche = "
<h2>Bases de données</h2>
<p>Les bases de données sont des collections organisées d'informations ou de données. Elles permettent de stocker, organiser, et récupérer facilement des données selon des critères spécifiques.</p>

<h3>Principaux types de bases de données :</h3>
<ul>
    <li><strong>Base de données relationnelle</strong> (SQL) : Utilise des tables pour stocker les données (ex : MySQL, PostgreSQL, Oracle).</li>
    <li><strong>Base de données NoSQL</strong> : Stocke des données non structurées ou semi-structurées (ex : MongoDB, Cassandra).</li>
    <li><strong>Base de données graphique</strong> : Spécialement conçue pour gérer des données sous forme de graphes (ex : Neo4j).</li>
</ul>

<h3>Concepts clés :</h3>
<ul>
    <li><strong>Schéma</strong> : Structure définissant la manière dont les données sont organisées.</li>
    <li><strong>Clé primaire</strong> : Un identifiant unique pour chaque enregistrement dans une table.</li>
    <li><strong>Clé étrangère</strong> : Utilisée pour établir une relation entre deux tables.</li>
    <li><strong>SQL</strong> : Langage de requêtes utilisé pour manipuler les bases de données relationnelles.</li>
</ul>

<h3>Exemples de requêtes SQL :</h3>
<pre>
-- Créer une table
CREATE TABLE Etudiants (
    id INT PRIMARY KEY,
    nom VARCHAR(100),
    age INT
);

-- Insérer des données
INSERT INTO Etudiants (id, nom, age) VALUES (1, 'Pierre', 20);

-- Sélectionner des données
SELECT * FROM Etudiants WHERE age > 18;
</pre>
";

// Affichage du contenu
echo $contenu_fiche;
?>

