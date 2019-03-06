<?php
$nav_en_cours='tchat';?>

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
        foreach ($messages as $message) {
            if ($message['username'] == $_SESSION['pseudo']) { ?>
                <p style="color: #e63946;"><strong> <?= $message['username']?> :</strong>
                  <?php  }
            elseif (!$_SESSION['pseudo']) { ?>
                <p><strong> <?= $message['username']?> :</strong>
                <?php } ?>
                <?= $message['content']?></p>
                <?php }
        if (isset($_SESSION['pseudo'])) {?>
            <div id="formMessage">
                <form method="post" action=''>
                    <div class="form-group">
                        <label for="content">Message</label>
                        <textarea class="form-control" name="content" id="content" rows="3" placeholder="Votre message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" value="Envoyer" name="messagebutton">Envoyer</button>
                </form>
            </div>
            <?php
        } else { ?>
            <h2 id="merciDe"><strong>Merci de vous connecter !</strong></h2>
        <?php 
        }
        ?>
        </div>
        <?php include_once 'includes/amis.php';?>
    </div>

    <?php
    // Ici importation du footer
    include_once 'views/includes/footer.php';?>

</body>

</html>