<?php

include_once '_functions/functions.php';
include_once '_config/config.php';
include_once '_config/db.php';
include_once 'views/includes/head.php';
<<<<<<< HEAD


=======
>>>>>>> master

if (isset($_GET['page']) AND !empty($_GET['page'])) {
    if (in_array($_GET['page'].'_controller.php', $allPages)){
        $page = trim(strtolower($_GET['page']));
        require_once '_config/db.php';
    }
} else {
    $page = 'accueil';
}


// Dossier contenant toutes les pages
$allPages = scandir('controllers/');


if (in_array($page.'_controller.php', $allPages)) {
    require_once '_config/db.php';

    // Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {
<<<<<<< HEAD
    // Retour d'une erreur 404 ! El famosso !
=======
    // Retour d'un erreur 404 ! El famosso !
>>>>>>> master
    echo 'Page introuvable';
}
