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

    <?php
    if (isset($_GET['IDprofil']) AND isset($_GET['Pseudo'])) {

        $idProfilAmi = $_GET['IDprofil'];
        $idAutre = $_GET['IDprofil'];
        $id = $_SESSION['ID'];
        $pseudo = $_GET['Pseudo'];

        $boubou1 = false;
        $boubou2 = false;

        $result1 = $bdd->query('SELECT pseudo FROM participant');
        while ($data1 = $result1->fetch()) {

            if ($pseudo == $data1['pseudo']) {
                $boubou1 = true;
            }
        }$result1->closeCursor();


        if ($boubou1) {

            $resultBis = $bdd->query('SELECT * FROM participant WHERE participant.ID = "' . $idProfilAmi . '" AND participant.pseudo = "' . $pseudo . '"');
            while ($dataBis = $resultBis->fetch()) {
                ?>

                <div id="description">
                    <fieldset>
                        <?php
                        $result = $bdd->query('SELECT * FROM participant WHERE ID = ' . $idAutre . ' ');
                        while ($data = $result->fetch()) {
                            $avatar = $data['avatar'];
                            if ($avatar == NULL) {
                                $avatar = "img/dye_logo.jpg";
                            } else {
                                $avatar = $data['avatar'];
                            }
                            ?>

                            <img src="<?php echo $avatar; ?>" alt="Avatar" width="200" height="200" title="Avatar" style="border: solid black 2px"/>                  


                            <p class="nom4"><?php echo $data['nom'] . "  " . $data['prenom'];
                            ?></p>
                            <p class="lieu4"><?php
                            echo $data['pays'] . ", " . $data['villes'];
                        }$result->closeCursor();
                        ?></p>

                        <?php
                        // ici pour invite amis 

                        if ($id != $idAutre) {

                            $bf = false;
                            $bdf = false;
                            $sql1 = '(SELECT * FROM friend)';
                            $result = $bdd->query($sql1);
                            while ($data = $result->fetch()) {
                                if ($data['id_f1'] == $id) {
                                    if ($data['id_f2'] == $idAutre) {
                                        $bf = true;
                                    }
                                }
                                if ($data['id_f2'] == $id) {
                                    if ($data['id_f1'] == $idAutre) {
                                        $bf = true;
                                    }
                                }
                            }$result->closeCursor();
                            $sql2 = '(SELECT * FROM demandefriend WHERE id_demande="' . $id . '" AND id_demandeur="' . $idAutre . '")UNION (SELECT * FROM demandefriend WHERE id_demandeur="' . $id . '" AND id_demande="' . $idAutre . '")';
                            //echo $sql2;
                            $result = $bdd->query($sql2);
                            while ($data = $result->fetch()) {
                                if ($data['id_demandeur'] == $id) {
                                    if ($data['id_demande'] == $idAutre) {
                                        $bdf = true;
                                    }
                                }
                                if ($data['id_demandeur'] == $id) {
                                    if ($data['id_demande'] == $idAutre) {
                                        $bdf = true;
                                    }
                                }
                            }$result->closeCursor();

                            // echo !$bf."<br/>".!$bdf;


                            if (!$bf && !$bdf) {
                                $lien = 'traitementFriend.php?target=dem&demandeur=' . $id . '&demande=' . $idAutre;
                                echo '<a href="' . $lien . '" title="Ajout Ami" class ="imgAddF"><img src="img/addF.jpg" height="50" width="50"></a>';
                            }
                        } else {
                            header('Location:profil.php?target=info');
                        }
                        ?>


                    </fieldset>



                </div>
                <div class="menu">
                    <ul id="simple-menu">
                        <li><input type="button" onclick="afficherc();" value="Mes Infos"/></li>
                    </ul>
                </div>
                <div id="coordonnee">
            <?php if ($bf) { ?>
                        <p id="infoPerso">
                            <!--<span class="titre">Informations Personnelles</span><br/><br/><br/>-->
                            <strong>Pseudo :</strong><?php echo " " . $pseudo; ?><br/><br/>
                            <strong>Pr&eacute;nom :</strong><?php echo " " . $dataBis['prenom']; ?><br/><br/>
                            <strong>Nom :</strong><?php echo " " . $dataBis['nom']; ?><br/><br/>
                            <strong>Sexe :</strong><?php
                if ($dataBis['sexe'] == 1) {
                    echo " Homme";
                } else {
                    echo " Femme";
                }
                ?><br/><br/>                    
                            <strong>Date de naissance :</strong><?php echo " " . $dataBis['dateDeNaissance']; ?><br/><br/>
                            <strong>Adresse :</strong><?php echo " " . $dataBis['adresse'] . " - " . $dataBis['codePostal'] . " - " . $dataBis['villes']; ?><br/><br/>
                            <strong>E-mail :</strong><?php echo " " . $dataBis['mail']; ?><br/><br/>
                            <strong>T&eacute;l&eacute;phone fixe :</strong><?php echo " " . $dataBis['telephoneFixe']; ?><br/><br/>
                            <strong>T&eacute;l&eacute;phone mobile :</strong><?php echo " " . $dataBis['telephoneMobile']; ?><br/><br/>
                            <strong>Site Web :</strong><?php echo " " . $dataBis['siteWeb']; ?>
                        </p>

                        <p id="preference">
                            <strong>Profession :</strong><?php echo " " . $dataBis['profession']; ?><br/><br/>
                            <strong>Loisirs :</strong><?php echo " " . $dataBis['loisirs']; ?><br/><br/>
                            <strong>&Eacute;v&eacute;nements pr&eacute;f&eacute;r&eacute;s :</strong><?php echo " " . $dataBis['preference']; ?><br/><br/>
                            <strong>Description :</strong><br/><br/>
                <?php echo " " . $dataBis['description']; ?>

                        </p>

            <?php } else { ?>
                        <p id="infoPerso">


                            <strong>Vous devez être amis avec cette personne pour voir son profil</strong>
                        </p>
            <?php } ?>
                </div>

                <?php
            }$resultBis->closeCursor();
        }


        $result2 = $bdd->query('SELECT pseudo FROM organisateur');
        while ($data2 = $result2->fetch()) {

            if ($pseudo == $data2['pseudo']) {
                $boubou2 = true;
            }
        }$result2->closeCursor();

        if ($boubou2) {

            $resultBis = $bdd->query('SELECT * FROM organisateur WHERE organisateur.ID = "' . $idProfilAmi . '" AND organisateur.pseudo = "' . $pseudo . '"');
            while ($dataBis = $resultBis->fetch()) {
                ?>
                <div id="description">
                    <fieldset>

                        <?php
                        $result = $bdd->query('SELECT * FROM organisateur WHERE ID = "' . $idAutre . '"');
                        while ($data = $result->fetch()) {
                            $logo = $data['logo'];
                            if ($logo == NULL) {
                                $logo = "img/dye_logo.jpg";
                            } else {
                                $logo = $data['logo'];
                            }
                            ?>

                            <img src="<?php echo $logo; ?>" width="200" height="200" alt="Logo" title="Logo" style="border: solid black 2px"/>

                            <p class="nom4"><?php echo $dataBis['nom'] . "  " . $dataBis['prenom'];
                            ?></p>
                            <p class="lieu4"><?php
                            echo $dataBis['pays'] . ", " . $dataBis['ville'];
                        }$result->closeCursor();
                        ?></p>
                    </fieldset>

                           <?php  $ba = false;
                            $sql1 = '(SELECT * FROM abonnement)';
                            $result = $bdd->query($sql1);
                            while ($data = $result->fetch()) {
                                if ($data['ID_participant'] == $id) {
                                    if ($data['ID_organisateur'] == $idAutre) {
                                        $ba = true;
                                    }
                                }
                            }$result->closeCursor();

                            if (!$ba) {
                                $lien = 'traitementFollow.php?target=suivi&ID=' . $id . '&follow=' . $idAutre;
                                echo '<a href="' . $lien . '" title="Suivre un organisateur" class ="imgAddF"><img src="img/addF.jpg" height="50" width="50"></a>';
                            
                        } else {
                            header('Location:profil.php?target=info');
                        }
                        ?>

                    </fieldset>                    
                </div>

                <div class="menu">
                    <ul id="simple-menu">
                        <li><input type="button" value="Mes Infos"/></li>
                    </ul>
                </div>

                <?php
                $resultba = $bdd->query('SELECT * FROM organisateur WHERE ID = ' . $idAutre. ' ');
                while ($data = $resultba->fetch()) {
                    ?>

                    <div id="coordonnee">
                        <p id="infoPerso">
                            <strong>Pseudo :</strong><?php echo " " . $dataBis['pseudo']; ?><br/><br/>
                            <strong>Pr&eacute;nom :</strong><?php echo " " . $dataBis['prenom']; ?><br/><br/>
                            <strong>Nom :</strong><?php echo " " . $dataBis['nom']; ?><br/><br/> 
                            <strong>E-mail :</strong><?php echo " " . $dataBis['mail']; ?><br/><br/>                        
                            <strong>T&eacute;l&eacute;phone mobile :</strong><?php echo " " . $dataBis['telephoneMobile']; ?><br/><br/>

                        </p>
                        <p id="preference">
                            <strong>Soci&eacute;t&eacute; :</strong><?php echo " " . $dataBis['nomSociete']; ?><br/><br/>
                            <strong>Adresse de la soci&eacute;t&eacute; :</strong><?php echo " " . $dataBis['adresseSociete'] . " - " . $dataBis['codePostalSociete'] . " - " . $dataBis['ville']; ?><br/><br/>
                            <strong>Site Web :</strong><a href="<?php echo " " . $dataBis['siteWeb']; ?>"><?php echo " " . $dataBis['siteWeb']; ?></a><br/><br/>  
                            <strong>T&eacute;l&eacute;phone soci&eacute;t&eacute; :</strong><?php echo " " . $dataBis['telephoneSociete']; ?><br/><br/>                        
                            <strong>Activit&eacute; :</strong><?php echo " " . $dataBis['activite']; ?><br/><br/>
                            <strong>Profession :</strong><?php echo " " . $dataBis['profession']; ?><br/><br/>

                        </p>
                    </div>                

                    <?php
                }$resultba->closeCursor();
            }$resultBis->closeCursor();
        }
    }
    ?>

</section>
<?php include("footer.php"); ?>
