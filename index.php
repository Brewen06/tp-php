<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <center><h1>Connexion</h1></center>

    <form method="POST" action="tp-php.php">

        <label for="nom">Nom :</label>
        <input type="nom" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="prenom" id="prenom" name="prenom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>

    <p><a href="inscription.php">S'inscrire</a></p>
</body>
</html>
