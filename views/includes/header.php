<?php

if (!isset($_SESSION['pseudo']) && !isset($_SESSION['mdp']))
{?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light" id="header-color">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav nav-site">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" <?php if ($nav_en_cours=='accueil' ) {echo ' id="en-cours"'
                        ;}?>>Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=tchat" <?php if ($nav_en_cours=='tchat' ) {echo
                        ' id="en-cours"' ;}?>>Tchat !</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=inscription" <?php if ($nav_en_cours=='inscription' )
                        {echo ' id="en-cours"' ;}?>>Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=connexion" <?php if ($nav_en_cours=='connexion' ) {echo
                        ' id="en-cours"' ;}?>>Connexion</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php include_once 'jumbotron.php';?>
</header>

<?php }

if (isset($_SESSION['pseudo']) && isset($_SESSION['mdp'])) {?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light" id="header-color">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav nav-site">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" <?php if ($nav_en_cours=='accueil' ) {echo ' id="en-cours"'
                        ;}?>>Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=tchat" <?php if ($nav_en_cours=='tchat' ) {echo
                        ' id="en-cours"' ;}?>>Tchat !</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" id="pseudo">Bienvenue <strong>
                            <?php echo $_SESSION['pseudo']; ?></strong> !</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=deco">Déconnexion</a>
            </li>
    </nav>
    <?php include_once 'jumbotron.php';?>
</header>

<?php
}?>