<?php 

class connection {

    static function chercheCompte() {

        global $db;

        if(!empty($_POST)) {
            if (isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['mdp']) && !empty($_POST['mdp']))
            {
                $pseudo = $_POST['pseudo'];
                $mdp = $_POST['mdp'];
                $reponse = $db->query('SELECT membre_pseudo, membre_pass FROM membre WHERE membre_pseudo = \''.$pseudo.'\' and membre_pass =\''.$mdp.'\'');
                $results = $reponse->fetch();
                if ($results['membre_pseudo'] == $pseudo && $results['membre_pass'] == $mdp)
                {
                    $_SESSION['pseudo'] = $results['membre_pseudo'];
                    $_SESSION['mdp'] = $results['membre_pass'];
                }
                else {
                    echo 'pas de compte existant';
                }

            }

            else {
                echo '<p><strong>Merci d\'entrer tout les champs</strong></p>';
            }
        }
    }
}