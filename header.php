<header>
        <div>
            <img src="img/images.jpg" alt="">
            <h1>Insolite rainbow</h1>
        </div>

        <div class="liste">
            <ul>
                <li><a href="http://livre-or/">Accueil</a></li>
                <?php if (!empty($_SESSION['login'])): ?>
                <li><a href="http://livre-or/profil.php">Profil</a></li>
                <li><a href="http://livre-or/deconnexion.php">Se déconnecter</a></li>
                <?php else: ?>
                <li><a href="http://livre-or/connexion.php">Connexion</a></li>
                <li><a href="http://livre-or/inscription.php">Inscription</a></li>
                <?php endif; ?>
                <li><a href="http://livre-or/commentaire">Commentaire</a></li>
                <li><a href="http://livre-or/livre-or">Livre d'or</a></li>
            </ul>
        </div>

    </header>