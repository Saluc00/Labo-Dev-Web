<?php
    if(!empty($_POST)) {
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['content']) && !empty($_POST['content'])) {
            $req = $db->prepare('INSERT INTO message (username, content) VALUE (?, ?)');
            $req->execute([$_POST['username'],$_POST['content']]);
        }
        else {
            echo '<p><strong>Vous devez renseigner un pseudo et un message ! :O</strong> </p>';
        }
    }
    ?>