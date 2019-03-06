<?php
$nav_en_cours='connexion';?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= ucfirst($page) ?> - Projet Dev Web !</title>
    </head>
    <body>
    
    
    
    <?php
    include_once 'views/includes/header.php';?>

    <h1>Rejoignez la communauté !</h1>

        <!-- <form method="post" action=''>
                <p>
                <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
                <label for="mdp">Mot de passe</label> :  <input type="text" name="mdp" id="mdp" /><br />
                <label for="rmdp">Retapez votre mot de passe</label> : <input type="text" name="rmdp" id="rmdp" /><br />
                <label for="email">Mot de passe</label> :  <input type="text" name="email" id="email" /><br />
                <input type="submit" value="Créer compte !" />
                </p>
        -->
        <div id="formConn">
        <h2 id="h2titre">Connexion</h2>
        <form method="post" action=''>
            <p>
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo" aria-describedby="username" placeholder="Entrez votre pseudo">
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input class="form-control" name="mdp" id="mdp" rows="3" placeholder="Votre mot de passe">
            </div>
            <button type="submit" class="btn btn-primary" value="Envoyer">Connexion !</button>
            </p>
        </form>
        </div>
    <?php include_once 'views/includes/footer.php'?>

    </body>
</html>