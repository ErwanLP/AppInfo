<?php
if (isset($_SESSION['ID'])) {

    $idSession = $_SESSION['ID'];
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    $result = $bdd->query('SELECT * FROM compte WHERE ID = "' . $idSession . '"');
    while ($data = $result->fetch()) {

        $idParticipant = $data['profilParticipant'];
        $idOrganisateur = $data['profilOrganisateur'];
    }$result->closeCursor();
    ?>


    <div class = "connexionSansProfil">
        <ul>
            <?php
            if (($idParticipant == 1 AND $idOrganisateur == 0) OR ($idParticipant == 0 AND $idOrganisateur == 1)) {
                ?>
                <li><a href="traitSwitch.php"><img src="img/switch.png" style="margin-right: 20px;"/></a></li>
                    <?php }
                    ?>




            <?php if ($idOrganisateur == 0) { ?>
                <li><a href="creationProfilOrganisateur.php">Cr&eacute;er Profil Organisateur</a> |</li>
                <?php
            }

            if ($idParticipant == 0) {
                ?>

                <li><a href="creationProfilParticipant.php">Cr&eacute;er Profil Participant</a> |</li>
                <?php
            }
        } else {

            header('Location:deconnection.php');
        }
        ?>

        <li><a href="deconnection.php">D&eacute;connexion</a></li>

    </ul>

</div>

