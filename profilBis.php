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
                        <img src="img/avatar_mini.jpg" alt="Avatar" title="Avatar" style="border: solid black 2px"/>                  
                        <p class="nom4"><?php echo $dataBis['nom'] . "  " . $dataBis['prenom'];
                ?></p>
                        <p class="lieu4"><?php echo $dataBis['pays'] . ", " . $dataBis['villes'];
                ?></p>
                    </fieldset>

                </div>
                <div class="menu">
                    <ul id="simple-menu">
                        <li><input type="button" onclick="afficherc();" value="Mes Infos"/></li>
                    </ul>
                </div>
                <div id="coordonnee">
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
                </div>

                <?php
            }$resultBis->closeCursor();
        }


        $result2 = $bdd->query('SELECT pseudo FROM organisateur');
        while ($data2 = $result2->fetch()) {

            if ($boubou2 == $data2['pseudo']) {
                $boubou2 = true;
            }
        }$result2->closeCursor();

        if ($boubou2) {

            $resultBis = $bdd->query('SELECT * FROM organisateur WHERE organisateur.ID = "' . $idProfilAmi . '" AND organisateur.pseudo = "' . $pseudo . '"');
            while ($dataBis = $resultBis->fetch()) {
                ?>
                <div id="description">
                    <fieldset>
                        <img src="img/logo.png" width="200" height="200" alt="Logo" style="border: solid black 2px"/>                  
                        <p id="nom4"><?php echo $dataBis['nom'] . "  " . $dataBis['prenom'];
                ?></p>
                        <p id="lieu"><?php echo $dataBis['nomSociete'] . ", " . $dataBis['pays'];
                ?></p>
                    </fieldset>

                </div>
                <div class="menu">
                    <ul id="simple-menu">
                        <li><input type="button" value="Mes Infos"/></li>
                    </ul>
                </div>
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
                        <strong>Adresse de la soci&eacute;t&eacute; :</strong><?php echo " " . $dataBis['adresseSociete'] . " - " . $dataBis['codePostalSociete'] . " - " . $dataBis['villeSociete']; ?><br/><br/>
                        <strong>Site Web :</strong><?php echo " " . $dataBis['siteWeb']; ?><br/><br/>  
                        <strong>T&eacute;l&eacute;phone soci&eacute;t&eacute; :</strong><?php echo " " . $dataBis['telephoneSociete']; ?><br/><br/>                        
                        <strong>Activit&eacute; :</strong><?php echo " " . $dataBis['activite']; ?><br/><br/>
                        <strong>Profession :</strong><?php echo " " . $dataBis['profession']; ?><br/><br/>

                    </p>
                </div>                

                <?php
            }$resultBis->closeCursor();
        }
    }
    ?>

</section>
<?php include("footer.php"); ?>