<!DOCTYPE html>
<html>
    <head>
        <title><?= ucfirst($page) ?> - Projet Dev Web !</title>
    </head>
    <body>
        
        <?php include_once 'views/includes/header.php'?>

            <h1>Home</h1>

            <form method="post">
            <p>
            <label for="username">Pseudo</label> : <input type="text" name="username" id="username" /><br />
            <label for="content">Message</label> :  <input type="text" name="content" id="content" /><br />
            <input type="submit" value="Envoyer" />
            </p>
            </form>

        <?php 

        require_once '_config/db.php';

        $reponse = $db->query('SELECT username, content FROM message ORDER BY ID DESC');

        if(!empty($_POST)) {
            if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['content']) && !empty($_POST['content'])) {
                $req = $db->prepare('INSERT INTO message (username, content) VALUE (?, ?, NOW())');
                $req->execute([$_POST['username'],$_POST['content']]);
                echo '<p>Message envoyé !</p>';
            }
        }
        ?>

        <?php include_once 'views/includes/footer.php'?>

    </body>
</html>