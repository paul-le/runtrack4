<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack</title>
</head>
<body>
   <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
        </nav>
   </header>
   <main>
        <form>
            <input type="radio" name="sexe" value="homme" required>
                <label for="sexe">Homme</label>
            <input type="radio" name="sexe" value="femme" required>
                <label for="sexe">Femme</label>
            <input type="radio" name="sexe" value="inconnu" required>
                <label for="sexe">Inconnu</label><br><br>
            <input type="text" name="nom" placeholder="Nom" required><br><br>
            <input type="text" name="prenom" placeholder="Prénom" required><br><br>
            <input type="text" name="adresse" placeholder="Adresse" required><br><br>
            <input type="email" name="email" placeholder="Adresse Email" required><br><br>
            <input type="password" name="password" placeholder="Mot de passe" required><br><br>
            <input type="password" name="confirmpass" placeholder="Confirmer le mot de passe" required><br><br>
            <input type="checkbox" name="info">
                <label for="info">Informatique</label>
            <input type="checkbox" name="voyage">
                <label for="voyage">Voyages</label>
            <input type="checkbox" name="sport">
                <label for="sport">Sports</label>
            <input type="checkbox" name="lecture">
                <label for="lecture">Lecture</label><br><br>
            <input type="submit" name="envoyerform" value="Envoyer">
        </form>
   </main>
   <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul>
   </footer> 
</body>
</html>