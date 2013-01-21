<?php
session_start();

include("start.php");
include("BDD.php");

include("header.php");

include("nav.php");
?>



<section>
    <aside class ="navg">
<?php include ("arbre.php"); ?>
    </aside>

    <aside class ="new">
        <?php include('nouveauteEvenement.php'); ?>

        <?php
        if (!isset($_SESSION['ID'])) {
            include("connexion.php");
        }
        if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
            ?>
            <div class="positionBouton">
                <a href="creationEvenement.php"><img src ="img/ampouleCreerEvenement.png"/></a>
            </div>
            <?php
        }
        ?>

    </aside>

    <article class ="articleevent">                  

        <div>
            <?php
            $ID = $_GET['ID'];
            $reponse = $bdd->query('SELECT * FROM event WHERE event.ID=' . $ID);
            while ($donnees = $reponse->fetch()) {
                ?><div class = "imageDetail" >

                    <img alt="Photo de l'évènement" src= "<?php echo $donnees['photo'] ?>" title="Nom de l\'&eacute;v&egrave;nement." height="420" width="280"/>

                </div>
                <div class ="imageDetail">	
                    <p class="titreDetailEvent"><?php echo $donnees['nom']; ?></p>

                    <p class="sousTitreThemeDetail"><?php echo $donnees['theme'] . ' - ' . $donnees['type']; ?></p>

                    <p class="sousTitreLieuDetail">Adresse de l'&eacute;v&eacute;nement : </br><?php echo $donnees['lieu']; ?></p>

                </div>


                <div class ="imageDetail">

                    <p class="sousTitreLieuDetail"><?php if ($donnees['dateFin'] == "0000-00-00") {
                    ?> &Eacute;v&eacute;nement ayant lieu le : <?php echo $donnees['dateDebut']; ?>
                        <?php } else {
                            ?> &Eacute;v&eacute;nement ayant lieu du  <?php echo $donnees['dateDebut']; ?> au <?php echo $donnees['dateFin']; ?>
                        <?php }
                        ?>
                        </br></br>Budget : <?php
                    if ($donnees['prix'] != 0 && $donnees['prix'] != null) {
                        
                        echo $donnees['prix'];
                        echo '&euro;';
                    } else {
                        if($donnees['prix']==0){
                        echo 'Gratuit';}else{
                            echo '-NC-';
                        }
                    }
                        ?> <span style="margin-left:50px;"><?php
                    if ($donnees['nbDePersonne'] != 0 && $donnees['nbDePersonne'] != null) {
                        echo 'Places dispo :   ';
                        if ($donnees['placesRestantes'] > 0) {
                            echo $donnees['placesRestantes'];
                        } else {
                            echo 'Complet';
                        }
                    } else {
                        echo 'Places dispo : -NC-';
                    }
                        ?>
                            </br></br><?php
                    $tiret = 0;
                    if ($donnees['lundi'] == true) {
                        echo 'Lu';
                        $tiret = 1;
                    }
                    if ($donnees['mardi'] == true) {
                        if ($tiret = 1) {
                            echo ' - ';
                        }
                        echo 'Ma';
                        $tiret = 1;
                    }
                    if ($donnees['mercredi'] == true) {
                        if ($tiret = 1) {
                            echo ' - ';
                        }
                        echo 'Me';
                        $tiret = 1;
                    }
                    if ($donnees['jeudi'] == true) {
                        if ($tiret = 1) {
                            echo ' - ';
                        }
                        echo 'Je';
                        $tiret = 1;
                    }
                    if ($donnees['vendredi'] == true) {
                        if ($tiret = 1) {
                            echo ' - ';
                        }
                        echo 'Ve';
                        $tiret = 1;
                    }
                    if ($donnees['samedi'] == true) {
                        if ($tiret = 1) {
                            echo ' - ';
                        }
                        echo 'Sa';
                        $tiret = 1;
                    }
                    if ($donnees['dimanche'] == true) {
                        if ($tiret = 1) {
                            echo ' - ';
                        }
                        echo 'Di';
                        $tiret = 1;
                    }

                    if ($tiret == 0) {
                        if ($donnees['dateFin'] != "0000-00-00") {
                            echo 'Jour d\'ouverture : -NC-';
                        } else {
                            echo ' ';
                        }
                    }
                        ?></p> 


                </div>

                <div class ="imageDetail">
                    <p class="evenementDetailDescription"><span style="margin-left:70px;"><?php echo $donnees['description']; ?></span></p>
                </div> <?php
                    }$reponse->closeCursor();
                    ?>
        </div>








        </article>
</section>


<?php include("footer.php"); ?>
