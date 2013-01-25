<?php
include('BDD.php');
    $tab = array();
    $tabid = array();
    $var = 0;
    $re = $bdd->query('SELECT ID,photo FROM event ORDER BY dateDebut DESC LIMIT 10');
    while ($donnees = $re->fetch()) {
            $tab[$var][0] = $donnees["photo"];
            $tabid[$var][0] = $donnees['ID'];
            $var++;
    }$re->closeCursor();
    ?>

    <div class="babar">
        <div id="slider">
<?php for ($a = 0; $a < count($tab); $a++) { ?>
            <a href="eventDetaille.php?ID=<?php echo $tabid[$a][0]; ?>"><img border="0" src="<?php echo $tab[$a][0]; ?>" height="219" width="400" /></a>
            
<?php } ?>
    </div>
</div>
<p class="titreNews"> NEWS</p>
<button id="bmoins" title="nouveauté précédente"><</button>
<button id="bplus" title="nouveauté suivante">></button><br/><br/>
<div id="lien"></div>