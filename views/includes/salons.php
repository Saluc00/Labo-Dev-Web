<div id="salons">
    <h2>Ici tous les salons :</h2>
    <?php
    $req = $db->query('SELECT salon_nom FROM salons');
    $salons = $req->fetchAll();?>

    <form method="post" action=''>
        <div class="form-group">
            <label for="salon">Créer un nouveau salon :</label>
            <input type="text" class="form-control" name="salon" id="salon" aria-describedby="Nouveau salon" placeholder="Nouveau salon">
        </div>
        <button type="submit" class="btn btn-primary" value="new_salon" name="salonbutton">Créer un salon</button>
    </form>
    
    <? foreach ($salons as $salon) {?>
    <p><a href="#"><strong><?= $salon['salon'] ?></strong></a></p>
    <hr>
    <?php ?>

</div>