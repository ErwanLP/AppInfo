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

    <article class ="eventDetaille">                  

        <div>
            <?php
            $ID = $_GET['ID'];
            $reponse = $bdd->query('SELECT * FROM event WHERE event.ID='.$ID);
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
                        if ($donnees['prix'] == 0) {
                            echo 'Gratuit';
                        } else {
                            echo '-NC-';
                        }
                    }
                        ?> <span style="margin-left:50px;"><?php
                    if ($donnees['nbDePersonne'] != 0 && $donnees['nbDePersonne'] != null) {
                        echo 'Places disponibles :   ';
                        if ($donnees['placesRestantes'] > 0) {
                            echo $donnees['placesRestantes'];
                        } else {
                            echo 'Complet';
                        }
                    } else {
                        echo 'Places disponibles : -NC-';
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
                </div>
<div class="imageDetail2">
        <?php if($donnees['note']!=0){
            ?><strong>Note des participants : </strong><img src="<?php 
            $notas=$donnees['note']/$donnees['nbVotes'];
        if($notas<=0.5){
            echo 'img/etoile0.png';
        }
        if($notas>0.5 &&$notas<=1.5){
            echo 'img/etoile1.png';
        }
        if($notas>1.5 &&$notas<=2.5){
            echo 'img/etoile2.png';
        }
        if($notas>2.5 &&$notas<=3.5){
            echo 'img/etoile3.png';
        }
        if($notas>3.5 &&$notas<=4.5){
            echo 'img/etoile4.png';
        }
        if($notas>4.5){
            echo 'img/etoile5.png';
        }
        
        ?>"  alt="Note" />(<?php echo $notas; ?> sur 5)  pour <?php echo $donnees['nbVotes']; ?> vote(s).<br/><?php
            }else{
            echo 'Aucune note pour le moment';
        }
        ?>
        </div>
            
        <?php
        $resultComment=$bdd->query('SELECT commentairesevent.note,commentairesevent.contenu, participant.pseudo FROM commentairesevent,event,compte,participant WHERE event.ID='.$_GET['ID'].' AND commentairesevent.id_event=event.ID AND commentairesevent.id_participant=compte.ID AND compte.ID=participant.ID');
        while($donneesCom=$resultComment->fetch()){
            ?> <div class="imageDetail2">
                <p><?php echo $donneesCom['note']; ?>/5 : <?php echo $donneesCom['contenu']; ?><br/>
                - <?php echo $donneesCom['pseudo']; ?> -</p>
            </div>
                <?php
        }
        
        if(isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "participant"){
            $reponse2=$bdd->query('SELECT * FROM commentairesevent,event,compte WHERE event.ID='.$_GET['ID'].' AND event.ID=commentairesevent.id_event AND commentairesevent.id_participant='.$_SESSION['ID']);
            $comment=true;
            while($donnees3=$reponse2->fetch()){
                $comment=false;
            }$reponse2->closeCursor();
            if($comment==true){
            ?><div class="imageDetail">
            <form method="post" action="traitementCommentaire.php">

                <fieldset class="formulaireCommentaire">
                    <legend class="">Commenter l'&eacute;v&eacute;nement :</legend>
                    <label for ="commentaire">Commentaire :</label><br/>
                    <textArea class="commenterEvent" type="text" name="commentaire" id="commentaire"  maxlength="400"/></textarea><br/>
                    <label for ="note">Note :</label>
                    <select name="note" id="note">
                        <option value="NULL"> </option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><br/><br/>
                    <select name="id_participant" id="id_participant" hidden>
                                        <option value="<?php echo $_SESSION['ID']; ?>"><?php echo $_SESSION['ID']; ?></option>
                                    </select>
                    <select name="id_event" id="id_event" hidden>
                                        <option value="<?php echo $ID; ?>"><?php echo $ID; ?></option>
                                    </select>
                    <input type="submit" value="Envoyer" />
                    
                </fieldset>
            </form>


        </div>
            <?php
        }}?>
 <?php
                    }$reponse->closeCursor();
                    ?>
            
        </div>
        








    </article>
</section>


<?php include("footer.php"); ?>
