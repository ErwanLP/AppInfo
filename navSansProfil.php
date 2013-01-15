<div class = "connexionSansProfil">
    <ul>
        <li><a href="creationProfilOrganisateur.php">Cr&eacute;er Profil Organisateur</a> |</li>


        <?php
        $idSession = $_SESSION['ID'];

        $result = $bdd->query('SELECT * FROM compte WHERE ID = "' . $idSession . '"');
        while ($data = $result->fetch()) {

            $idParticipant = $data['profilParticipant'];
            $idOrganisateur = $data['profilOrganisateur'];
        }$result->closeCursor();

        if ($idParticipant == 0) {
            ?>

        <li><a href="creationProfilParticipant.php">Cr&eacute;er Profil Participant</a> |</li>
        <?php  } ?>
        <?php if ($idOrganisateur == 0){ ?>
        
        <li><a href="deconnection.php">Deconnexion</a></li>
        <?php } ?>
    </ul>

</div>

