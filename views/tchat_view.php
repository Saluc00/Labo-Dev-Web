<!DOCTYPE html>
<html>

<head>
    <title>
        <?= ucfirst($page) ?> - Projet Dev Web !</title>
</head>

<body>

    <?php
    include_once 'includes/header.php';?>

    <div id="container">
        <?php
    include_once 'includes/salons.php';
    $req = $db->query('SELECT username, content FROM message');
    $messages = $req->fetchAll();
    ?>

        <div id="message">

            <h2>Canal Général</h2>

            <?php
        foreach ($messages as $message) {?>
            <p><strong>
                    <?= $message['username']?> :</strong>
                <?= $message['content']?>
            </p>
            <?php }
        ?>
            <div id="formMessage">
                <form method="post" action=''>
                    <div class="form-group">
                        <label for="username">Pseudo</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="username"
                            placeholder="Entrez votre pseudo">
                    </div>
                    <div class="form-group">
                        <label for="content">Message</label>
                        <textarea class="form-control" name="content" id="content" rows="3" placeholder="Votre message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" value="Envoyer" name="messagebutton">Envoyer</button>
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