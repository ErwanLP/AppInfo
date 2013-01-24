<?php
    $tab = array();
    $var = 0;
    $req = $bdd->query('SELECT photo FROM event ORDER BY date DESC LIMIT 10');
    while ($donnees = $req->fetch()) {
            $tab[$var][0] = $donnees["photo"];
            $var++;
    }$req->closeCursor();
    ?>

    <div class="babar">
        <div id="slider">
<?php for ($a = 0; $a < count($tab); $a++) { ?>
            <a href="#"><img border="0" src="<?php echo $tab[$a][0] ?>" height="219" width="400" /></a>
<?php } ?>
    </div>
</div>
<p class="titreNews"> NEWS</p>
<button id="bmoins" title="nouveauté précédente"><</button>
<button id="bplus" title="nouveauté suivante">></button><br/><br/>
<div id="lien"></div>