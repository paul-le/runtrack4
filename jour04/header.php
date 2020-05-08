<header>
    <section id="topHeaderBar">
        <img id="topHeaderBarLogo" src="assets/laplateforme-long2.png">
        <img onclick="menuClick()" id="menu-smoll" src="assets/hamburger.png">
    </section>
    <nav id="navBar">
        <?php if(isset($_SESSION['id']))
        { ?>
        <ul id="ulNavBar">
            <a href="index.php"><li>ACCUEIL</li></a>
            <a href="profil.php"><li>PROFIL</li></a>
            <li></li>
            <img id="plateLogo" src="assets/plateformelogoopa.png">
            <li></li>
            <a href="#"><li>CALENDRIER</li></a>
            <a href="#"><li>DECONNEXION</li></a>
        </ul>
        <?php } else{ ?>
            <ul id="ulNavBar">
            <a href="index.php"><li>ACCUEIL</li></a>
            <a href="connexion.php"><li>CONNEXION</li></a>
            <li></li>
            <img id="plateLogo" src="assets/plateformelogoopa.png">
            <li></li>
            <li></li>
            <li></li>
        </ul>
       <?php } ?>
    </nav>
</header>