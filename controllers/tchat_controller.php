<?php
    if(!empty($_POST)) {
        if(isset($_POST['messagebutton'])) {
            if (isset($_POST['content']) && !empty($_POST['content'])) {
                $req = $db->prepare('INSERT INTO message (username, content) VALUE (?, ?)');
                $req->execute([$_SESSION['pseudo'],$_POST['content']]);
            }
            else {
                echo '<p><strong>Vous devez renseigner un pseudo et un message ! :O</strong> </p>';
            }
        }

        if(isset($_POST['salonbutton'])) {
            if (isset($_POST['salon']) && !empty($_POST['salon'])) {
                $req = $db->query('INSERT INTO salons (salon_nom) VALUE (\''.$_POST['salon'].'\')');
            }
        }
    }
    ?>