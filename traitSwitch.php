<?php

session_start();
if (isset($_SESSION['ID'])) {

    $ID = $_SESSION['ID'];
    $result = $bdd->query('SELECT * FROM compte WHERE ID ="' . $ID . '"');
    while ($data = $result->fetch()) {
        $profilParticipant = $data['profilParticipant'];
        $profilOrganisateur = $data['profilOrganisateur'];
    }$result->closeCursor();



   if (isset($_SESSION['SWITCH'])) {
        if($_SESSION['SWITCH']== "participant" || $_SESSION['SWITCH']=="pasdeprofilparticipant") {
            if ($profilOrganisateur == 1) {
                $_SESSION['SWITCH'] = "organisateur";
                header('Location:index.php');
            } else {
                $_SESSION['SWITCH'] = "pasdeprofilorganisateur";
                header('Location:creationProfilOrganisateur.php');
            }
        }else{
            if ($profilParticipant == 1) {
                //si l'utilisateur à un profil participant
                $_SESSION['SWITCH'] = "participant";
                // on indique dans la session de l'utilisateur qu'il se connnecte en tant que Participant
                header('Location:index.php');
                //on le redirige dans la page principale qui est dynamique par rapport à l'acteur qui la voie
            } else {
                $_SESSION['SWITCH'] = "pasdeprofilparticipant";
                header('Location:creationProfilParticipant.php'); //redirection à la page de création profil Participant
            }
        }
    }
}
?>

