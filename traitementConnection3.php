<?php

if (isset($_POST['nomDeCompte']) && isset($_POST['mdp'])) {

    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');


    $nomDeCompte = $_POST['nomDeCompte'];
    $mdp = sha1($_POST['mdp'] . "erwan");




    $booleantest = FALSE;
    $resultMDP = $bdd->query('SELECT * FROM compte WHERE nomDeCompte ="' . $nomDeCompte . '"');

    $data2 = $resultMDP->fetch();
    if ($data2['mdp'] == $mdp) {
        $booleantest = TRUE;
        $_SESSION['ID'] = $data2['idCompte'];
        $profilParticipant = $data2['profilParticipant'];
        $profilOrganisateur = $data2['profilOrganisateur'];
    }

    if ($booleantest == TRUE) {
        if ($_POST['profil'] == "participant") {          //PEUT ETRE REUTILISER POUR LE SWITCH
            if ($profilParticipant == 1) {
                $_SESSION['SWITCH'] = "participant";
                header('Location:index.php');
            } else {
                $_SESSION['SWITCH'] = "pasdeprofilparticipant";
                header('Location:index.php'); //redirection pasge de creation profil participant
            }
        }else{
            if ($profilOrganisateur == 1) {
                $_SESSION['SWITCH'] = "organisateur";
                header('Location:index.php');
            } else {
                $_SESSION['SWITCH'] = "pasdeprofilorganisateur";
                header('Location:index.php'); //redirection page de creation organisateur
            }
            
            
            
        }
    } else {

        header('Location:connection.php');
    }
}
?>

