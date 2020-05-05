<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <form class="col s12" action="#" method="POST">
            <h4>Sexe</h4>
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
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" class="validate" type="text" id="nom" placeholder="Nom" required>
                        <!-- <label for="nom">Nom</label> -->
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" class="validate" type="text" id="prenom" placeholder="Prénom" required>
                        <!-- <label for="prenom">Prénom</label> -->
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">edit_location</i>
                    <input class="validate" type="text" id="adresse" placeholder="Adresse" required>
                        <!-- <label for="adresse">Adresse</label> -->
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input class="validate" type="email" id="email" placeholder="Email" required>
                        <!-- <label for="email">Email</label> -->
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">remove_red_eye</i>
                    <input class="validate" type="password" id="password" placeholder="Mot de passe" required>
                        <!-- <label for="password">Mot de passe</label> -->
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">remove_red_eye</i>
                    <input class="validate" type="password" id="passwordcon" placeholder="Confirmer le mot de passe" required>
                        <!-- <label for="passwordcon">Confirmer mot de passe</label> -->
                </div>
                <h4>Hobbies</h4>
                    <label>
                        <input type="checkbox" />
                            <span>Informatique</span>
                    </label><br>
                    <label>
                        <input type="checkbox" />
                            <span>Voyages</span>
                    </label><br>
                    <label>
                        <input type="checkbox" />
                            <span>Sports</span>
                    </label><br>
                    <label>
                        <input type="checkbox" />
                            <span>Lecture</span>
                    </label><br><br>
                <input type="submit" name="envoyerform" value="Envoyer"><br><br>
            </form>
        </div>
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