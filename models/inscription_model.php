<?php 

class connection {

    public $membreId;
    public $pseudo;
    public $mdp;
    public $email;
    public $inscDate;

    static function getCompte() {

        global $db;
        
        $reqCompte = $db->prepare('SELECT * FROM membre');
        $reqCompte->execute([]);
        return $reqComptes-fetchall();
    }

    static function creaCompte() {

        global $db;

        if(!empty($_POST)) {
            if (isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['mdp']) && !empty($_POST['mdp']) && isset($_POST['rmdp']) && !empty($_POST['rmdp']) && isset($_POST['email']) && !empty($_POST['email']))
            {
                $req = $db->prepare('INSERT INTO membre(membre_pseudo, membre_pass, membre_email) VALUES (?, ?, ?)');
                $req->execute([$_POST['pseudo'], $_POST['mdp'], $_POST['email']]);
                $_SESSION['pseudo'] = $_POST['pseudo'];
                $_SESSION['mdp'] = $_POST['mdp'];
            }
            else {
                echo '<p><strong>Il manque des informations</strong></p>';
            }
        }
    }
}