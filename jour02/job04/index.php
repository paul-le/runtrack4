<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
    <title>Runtrack</title>
</head>
<body>
   <header>
        <nav class="nav-wrapper">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
        </nav>
   </header>
   <main>
        <form action="#" method="POST">
            <label>
                <input class="with-gap" name="group1" type="radio"  />
                    <span>Homme</span>
            </label>
            <label>
                <input class="with-gap" name="group1" type="radio"  />
                    <span>Femme</span>
            </label>
            <label>
                <input class="with-gap" name="group1" type="radio"  />
                    <span>Inconnu</span>
            </label>
            <input type="text" name="nom" placeholder="Nom" required><br><br>
            <input type="text" name="prenom" placeholder="Prénom" required><br><br>
            <input type="text" name="adresse" placeholder="Adresse" required><br><br>
            <input type="email" name="email" placeholder="Adresse Email" required><br><br>
            <input type="password" name="password" placeholder="Mot de passe" required><br><br>
            <input type="password" name="confirmpass" placeholder="Confirmer le mot de passe" required><br><br>
                <label>
                    <input type="checkbox" />
                        <span>Informatique</span>
                </label>
                <label>
                    <input type="checkbox" />
                        <span>Voyages</span>
                </label>
                <label>
                    <input type="checkbox" />
                        <span>Sports</span>
                </label>
                <label>
                    <input type="checkbox" />
                        <span>Lecture</span>
                </label><br><br>
            <input type="submit" name="envoyerform" value="Envoyer"><br><br>
        </form>
   </main>
   <footer class="page-footer">
        <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer blabla.</h5>
                <p class="grey-text text-lighten-4">Blablabla.</p>
        </div>
        <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
            </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
   </footer> 
</body>
</html>