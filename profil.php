<?php
session_start();
include("start.php");

include("header.php");

include("nav.php");

$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
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
    <?php if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "participant" AND $_SESSION['ID'] != null) { ?>
        <div id="description">
            <fieldset>
                <img src="img/avatar_mini.jpg" alt="Avatar" title="Avatar" style="border: solid black 2px"/>                  
                <?php
                $result = $bdd->query('SELECT * FROM participant WHERE ID = ' . $_SESSION['ID'] . ' ');
                $data = $result->fetch();
                ?>
                <p class="nom4"><?php echo $data['nom'] . "  " . $data['prenom'];
            ?></p>
                <p class="lieu4"><?php echo $data['pays'] . ", " . $data['villes'];
            ?></p>
            </fieldset>

        </div>
        <div class="menu">
            <ul id="simple-menu">
                <li><input type="button" onclick="afficherc();" value="Mes Infos"/></li>
                <li><input type="button" onclick="affichera();" value="Mes Amis"/></li>
                <li><input type="button" onclick="afficherab();" value="Mes Abonnements"/></li>
                <li><input type="button" onclick="afficherme();" value="Mes &Eacute;v&eacute;nements"/></li>
                <li><input type="button" onclick="afficherm();" value="Ma Messagerie"/></li>
                <li><input type="button" onclick="self.location.href='parametreparticipant.php';" value="Param&egrave;tres"/></li>
            </ul>
        </div>
        <div id="coordonnee">
            <p id="infoPerso">
                <!--<span class="titre">Informations Personnelles</span><br/><br/><br/>-->
                <strong>Pseudo :</strong><?php echo " " . $data['pseudo']; ?><br/><br/>
                <strong>Pr&ecute;nom :</strong><?php echo " " . $data['prenom']; ?><br/><br/>
                <strong>Nom :</strong><?php echo " " . $data['nom']; ?><br/><br/>
                <strong>Sexe :</strong><?php
            if ($data['sexe'] == 1) {
                echo " Homme";
            } else {
                echo " Femme";
            }
                ?><br/><br/>                    
                <strong>Date de naissance :</strong><?php echo " " . $data['dateDeNaissance']; ?><br/><br/>
                <strong>Adresse :</strong><?php echo " " . $data['adresse'] . " - " . $data['codePostal'] . " - " . $data['villes']; ?><br/><br/>
                <strong>E-mail :</strong><?php echo " " . $data['mail']; ?><br/><br/>
                <strong>T&eacute;l&eacute;phone fixe :</strong><?php echo " " . $data['telephoneFixe']; ?><br/><br/>
                <strong>T&eacute;l&eacute;phone mobile :</strong><?php echo " " . $data['telephoneMobile']; ?><br/><br/>
                <strong>Site Web :</strong><?php echo " " . $data['siteWeb']; ?>
            </p>

            <p id="preference">
                <strong>Profession :</strong><?php echo " " . $data['profession']; ?><br/><br/>
                <strong>Loisirs :</strong><?php echo " " . $data['loisirs']; ?><br/><br/>
                <strong>&Eacute;v&eacute;nements pr&eacute;f&eacute;r&eacute;s :</strong><?php echo " " . $data['preference']; ?><br/><br/>
                <strong>Description :</strong><br/><br/>
                <?php echo " " . $data['description']; ?>

            </p>
        </div>
        <div id="amis" style="display:none;">
            <!-- php -->
            <fieldset>
                <a href="img/jerry.jpg"><img src="img/jerry_mini.jpg" alt="Jerry" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                <p class="nom1">Jerry BOLZASTREET</p>
                <p class="lieu1">France, Paris</p>
            </fieldset>
            <fieldset>
                <a href="img/momo.jpg"><img src="img/momo_mini.jpg" alt="Momo" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                <p id="nom2">Mohammed LACHKHAB</p>
                <p id="lieu2">France, Versailles</p>
            </fieldset>
            <fieldset>
                <a href="img/flo.jpg"><img src="img/flo_mini.jpg" alt="Flo" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                <p id="nom3">Florian GUITOGER</p>
                <p id="lieu3">France, Gonesse</p>
            </fieldset>
        </div>
        <div id="abonnement" style="display:none;">
            <?php
            $result2 = $bdd->query('SELECT * FROM organisateur,abonnement WHERE organisateur.ID = abonnement.ID_organisateur AND abonnement.ID_participant = ' . $_SESSION['ID'] . '');
            while ($data2 = $result2->fetch()) {
                ?>
                <fieldset>
                    <a href="img/jerry.jpg"><img src="img/jerry_mini.jpg" alt="Jerry" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                    <p class="nom4"><?php echo $data2['nom'] . "  " . $data2['prenom'];
        ?></p>
                    <p class="lieu4"><?php echo $data2['nomSociete'] . ", " . $data2['pays'];
        ?></p>
                        <?php
                        $action = $_GET['action'];
                        if ($action == "delete") {
                            $bdd->query('DELETE FROM organisateur, abonnement WHERE organisateur.ID = abonnement.ID_organisateur AND abonnement.ID_participant = ' . $_SESSION['ID'] . '');
                        }
                        ?>
                    <a href="profil.php?action=delete"><img src="img/croixsupp.png" alt="Supprimer" id="supprimer"/></a>
                </fieldset>
                <?php
            }
            $result2->closeCursor();
            ?>
        </div>
        <div id="mesEvents" style="display:none;">
            <?php
            if (!isset($_GET['onglet'])) { //si ya rien
                $result = $bdd->query('SELECT * FROM  event LIMIT 0 , 30');
            }
            if (isset($_GET['onglet']) && !isset($_GET['sousOnglet'])) { //si ya juste onglet
                $result = $bdd->query('SELECT  * FROM  event WHERE theme =  "' . $_GET['onglet'] . '"');
            }


            if (isset($_GET['sousOnglet'])) { //si ya un sous onglet
                $result = $bdd->query('SELECT  * FROM  event WHERE type =  "' . $_GET['sousOnglet'] . '"');
            }


            while ($data = $result->fetch()) {


                include("articleevent.php");
                ?>
                <!--  <div class ="evenement">
                      
                      <div class="color">
                         
                      </div>


                <?php
                // echo '<img class = "imageflottante" alt="Photo de évenement" src= "'.$data["photo"].'"/>' 
                ?>
                      <img class = "imageflottante" alt="Photo de évenement" src= "imgUser/gad_elmaleh.jpeg"/>
                      <div class ="texteEvent">
                          <h1><?php echo $data['nom']; ?></h1>
                          <strong>Adresse: </strong><?php echo $data['lieu']; ?><span><?php echo $data['lieu']; ?></span><br/>
                          <strong>Date et Heure :</strong><?php echo $data['date']; ?><br/>
                          <strong>Prix: </strong>30€ <br/>
                          <strong>Description: </strong> <?php echo $data['description']; ?><br/>
                          <strong>Note: </strong><img src="img/etoile.png" class="etoile" alt="Note" /><p id="note">(5,0 sur 5,0)</p><br/>
                          <p id="bouton1">Voir Plus de Détails</p>
                          <p id="bouton2">Voir Commentaires</p>
                          <p id="bouton3">Réserver</p>
                      </div>

                  </div> -->


                <?php
            }

            $result->closeCursor();
            ?>
        </div>
    <?php } ?>
    <?php if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) { ?>
        <div id="description">
            <fieldset>
                <img src="img/logo.png" width="200" height="200" alt="Logo" style="border: solid black 2px"/>                  
                <?php
                $result = $bdd->query('SELECT * FROM organisateur WHERE ID = ' . $_SESSION['ID'] . ' ');
                $data = $result->fetch();
                ?>
                <p id="nom4"><?php echo $data['nom'] . "  " . $data['prenom'];
            ?></p>
                <p id="lieu"><?php echo $data['nomSociete'] . ", " . $data['pays'];
            ?></p>
            </fieldset>

        </div>
    
        <div class="menu">
            <ul id="simple-menu">
                <li><input type="button" onclick="afficherc();" value="Mes Infos"/></li>
                <li><input type="button" onclick="afficherme();" value="Mes &Eacute;v&eacute;nements"/></li>
                <li><input type="button" onclick="afficherm();" value="Ma Messagerie"/></li>
                <li><input type="button" onclick="self.location.href='parametreorganisateur.php';" value="Param&egrave;tres"/></li>
            </ul>
        </div>
        <div id="coordonnee">
            <p id="infoPerso">
                <strong>Pseudo :</strong><?php echo " " . $data['pseudo']; ?><br/><br/>
                <strong>Pr&eacute;nom :</strong><?php echo " " . $data['prenom']; ?><br/><br/>
                <strong>Nom :</strong><?php echo " " . $data['nom']; ?><br/><br/> 
                <strong>E-mail :</strong><?php echo " " . $data['mail']; ?><br/><br/>                        
                <strong>T&eacute;l&eacute;phone mobile :</strong><?php echo " " . $data['telephoneMobile']; ?><br/><br/>

            </p>
            <p id="preference">
                <strong>Soci&eacute;t&eacute; :</strong><?php echo " " . $data['nomSociete']; ?><br/><br/>
                <strong>Adresse de la oci&eacute;t&eacute; :</strong><?php echo " " . $data['adresseSociete'] . " - " . $data['codePostalSociete'] . " - " . $data['ville']; ?><br/><br/>
                <strong>Site Web :</strong><?php echo " " . $data['siteWeb']; ?><br/><br/>  
                <strong>T&eacute;l&eacute;phone soci&eacute;t&eacute; :</strong><?php echo " " . $data['telephoneSociete']; ?><br/><br/>                        
                <strong>Activit&eacute; :</strong><?php echo " " . $data['activite']; ?><br/><br/>
                <strong>Profession :</strong><?php echo " " . $data['profession']; ?><br/><br/>

            </p>
        </div>                
        <div id="mesEvents" style="display:none;">
            <?php
            if (!isset($_GET['onglet'])) { //si ya rien
                $result = $bdd->query('SELECT * FROM  event LIMIT 0 , 30');
            }
            if (isset($_GET['onglet']) && !isset($_GET['sousOnglet'])) { //si ya juste onglet
                $result = $bdd->query('SELECT  * FROM  event WHERE theme =  "' . $_GET['onglet'] . '"');
            }


            if (isset($_GET['sousOnglet'])) { //si ya un sous onglet
                $result = $bdd->query('SELECT  * FROM  event WHERE type =  "' . $_GET['sousOnglet'] . '"');
            }


            while ($data = $result->fetch()) {


                include("articleevent.php");
                ?>
                <!--  <div class ="evenement">
                      
                      <div class="color">
                         
                      </div>


                <?php
                // echo '<img class = "imageflottante" alt="Photo de évenement" src= "'.$data["photo"].'"/>' 
                ?>
                      <img class = "imageflottante" alt="Photo de évenement" src= "imgUser/gad_elmaleh.jpeg"/>
                      <div class ="texteEvent">
                          <h1><?php echo $data['nom']; ?></h1>
                          <strong>Adresse: </strong><?php echo $data['lieu']; ?><span><?php echo $data['lieu']; ?></span><br/>
                          <strong>Date et Heure :</strong><?php echo $data['date']; ?><br/>
                          <strong>Prix: </strong>30€ <br/>
                          <strong>Description: </strong> <?php echo $data['description']; ?><br/>
                          <strong>Note: </strong><img src="img/etoile.png" class="etoile" alt="Note" /><p id="note">(5,0 sur 5,0)</p><br/>
                          <p id="bouton1">Voir Plus de Détails</p>
                          <p id="bouton2">Voir Commentaires</p>
                          <p id="bouton3">Réserver</p>
                      </div>

                  </div> -->


                <?php
            }

            $result->closeCursor();
            ?>
        </div>
    <?php } ?>
</section>
<?php include("footer.php"); ?>
<script type="text/javascript">
    function afficherc(){
        document.getElementById("mesEvents").style.display="none";
        document.getElementById("coordonnee").style.display="";
        document.getElementById("amis").style.display="none";
        document.getElementById("abonnement").style.display="none";
        document.getElementById("messagerie").style.display="none";
    }
    function affichera(){ 
        document.getElementById("amis").style.display="";
        document.getElementById("coordonnee").style.display="none";
        document.getElementById("mesEvents").style.display="none";
        document.getElementById("abonnement").style.display="none";
        document.getElementById("messagerie").style.display="none";
    }
    function afficherab(){ 
        document.getElementById("abonnement").style.display="";
        document.getElementById("amis").style.display="none";
        document.getElementById("coordonnee").style.display="none";
        document.getElementById("mesEvents").style.display="none";
        document.getElementById("messagerie").style.display="none";
    }
    function afficherme(){ 
        document.getElementById("mesEvents").style.display="";
        document.getElementById("coordonnee").style.display="none";
        document.getElementById("amis").style.display="none";
        document.getElementById("abonnement").style.display="none";
        document.getElementById("messagerie").style.display="none";
    }
    function afficherm(){ 
        document.getElementById("mesEvents").style.display="none";
        document.getElementById("coordonnee").style.display="none";
        document.getElementById("amis").style.display="none";
        document.getElementById("abonnement").style.display="none";
        document.getElementById("messagerie").style.display="none";
        
    }
</script>
