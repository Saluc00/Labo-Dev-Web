<?php
$nav_en_cours='accueil';?>

<!DOCTYPE html>
<html>

<head>
    <title>
        <?= ucfirst($page) ?> - Projet Dev Web !</title>
</head>

<body>

    <?php
    // Ici importation du header
    include_once 'includes/header.php';?>

    <div id="presentation">
        <h2><strong>Bonsoir</strong> : Qu'est ce que c'est quoi ?</h2>
        <p>C'est un site, sur lequel vous vous trouvez, <em>eh oui !!!!</em> , est un site dédié au tchat en ligne !<br>Bonne
            humeur et rigolade au rendez-vous !</p>
    </div>
    <div id="discuter">
        <div id="discGauche">
            <h2>Faites des rencontres !</h2>
            <p>Ici faites des rencontres en explorant les salons !<br>Ou bien rejoingez vos amis pour discuter avec eux
                !</p>
        </div>
        <div id="discDroite">
            <img src="../Labo_Dev_Web/assets/images/discuter.png">
        </div>
    </div>
    <div id="partagez">
        <div id="parGauche">
            <img src="../Labo_Dev_Web/assets/images/salons.png">
        </div>
        <div id="parDroite">
            <h2>Diversité</h2>
            <p>Créer votre propre salon !<br> ou rejoingez en un créé pas la communauté,<br>Tout est possible !!</p>
        </div>
    </div>
    <div id="petitmessage">
        <p><strong>FUUUUUUN !!</strong></p>

    </div>
    <?php
    // Ici importation du footer
    include_once 'views/includes/footer.php';?>


    <script src="./_scripts/ApiGIPHY.js"></script>
</body>

</html>