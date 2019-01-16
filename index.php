<?php

include_once '_config/config.php';
include_once '_config/db.php';

if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

// Dossier contenant toutes les pages
$allPages = scandir('controllers/');

if (in_array($page.'_controller.php', $allPages)) {
    // Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {
    // Retour d'un erreur 404 ! El famosso !
    echo '<img src="assets/images/404.png" alt="Erreur 404" style="margin=auto">';
}

?>