<!DOCTYPE html>
<html>
    <head>
        <title><?= ucfirst($page) ?> - Projet Dev Web !</title>
    </head>
    <body>
        
        <?php
        include_once 'includes/header.php';
        include_once 'includes/jumbotron.php';?>







    <div id="container">
        <?php
        include_once 'includes/salons.php';
        $req = $db->query('SELECT username, content FROM message');
        $messages = $req->fetchAll();
        ?>

        <div id="message">
            <?php
            foreach ($messages as $message) {?>
                    <p><strong><?= $message['username']?> :</strong> <?= $message['content']?></p>
            <?php }?>
            <div id="formMessage">
                <form method="post" action=''>
                <p>
                <label for="username">Pseudo</label> : <input type="text" name="username" id="username" /><br />
                <label for="content">Message</label> :  <input type="text" name="content" id="content" /><br />
                <input type="submit" value="Envoyer" />
                </p>
                </form>
            </div> 
        </div>
        <?php include_once 'includes/amis.php';?>
    </div>










        <?php
        // Ici importation du footer
        include_once 'views/includes/footer.php';?>

    </body>
</html>