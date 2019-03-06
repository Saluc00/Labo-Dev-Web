<?php
$nav_en_cours='inscription';?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= ucfirst($page) ?> - Projet Dev Web !</title>
    </head>
    <body>
    <?php
    include_once 'views/includes/header.php';?>
    <h1>Rejoignez la communauté !</h1>
    <div id="lesFormConn">
        <div id="formCréa">
            <h2 id="h2titre">Inscription</h2>
            <form method="post" action=''>
                <p>
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" name="pseudo" id="pseudo" aria-describedby="username" placeholder="Entrez votre pseudo">
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe <br><em>(8 characters minimum)</em></label>
                    <input class="form-control" name="mdp" id="mdp" rows="3" placeholder="Votre mot de passe" type="password" minlength="8" required>
                </div>
                <div class="form-group">
                    <label for="rmdp">Vérification du mot de passe</label>
                    <input class="form-control" name="rmdp" id="rmdp" rows="3" placeholder="Vérification du mot de passe" type="password" minlength="8" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" name="email" id="email" rows="3" placeholder="Votre email" type="email" pattern="+@+.+" required>
                </div>
                    <button type="submit" class="btn btn-primary" value="Envoyer">Go !</button>
                </p>
            </form>
        </div>
    </div>
    <?php include_once 'views/includes/footer.php'?>

    </body>
</html>