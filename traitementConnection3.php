<?php

if (isset($_POST['nomDeCompte']) && isset($_POST['mdp'])) {
    //on regarde si les variables nom de Compte et mdp envoyées par la methode post sont bien sont bien présentent
    session_start();
    //debut de la session
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    //connection à la base de données
    $nomDeCompte = $_POST['nomDeCompte'];
    //la variable nomDeCompte importée par méthode post est mise dans la variable nomDeCompte    
    $mdp = sha1($_POST['mdp'] . "erwan");
    //le variable mdp importée par la méthode post est criptée puis mise dans la variable mdp




    $booleantest = FALSE;
    //on initialise une variable boolean qui regarde si la connection est valide ou pas
    $resultMDP = $bdd->query('SELECT * FROM compte WHERE nomDeCompte ="' . $nomDeCompte . '"');
    //on va chercher l'instance d'entité ayant le même nom de compte 

    $data2 = $resultMDP->fetch();
    if ($data2['mdp'] == $mdp) {
        // on regarde si le mdp rentré par l'utilisateur est égal a celui dans la base de données (en cripté)
        $booleantest = TRUE;
        // si la condition est realisée, la connection est valide
        $_SESSION['ID'] = $data2['ID'];
        // on créer une session pour l'utilisateur
        $profilParticipant = $data2['profilParticipant'];
        $profilOrganisateur = $data2['profilOrganisateur'];
        //on va regarder si l'utilisateur possède un profil Participant ou Organisateur
        $godMode = $data2['godMode'];
    }

    if ($booleantest == TRUE) {  //PEUT ETRE REUTILISER POUR LE SWITCH
        //si la connection est valide
        if ($godMode == 1) {
            echo 'IN GOD MODE';
            header('Location:godMode.php');
        } else {

            if ($_POST['profil'] == "participant") {
                // si l'utilisateur a choisi de se connecter en tant que participant
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
            } else {
                // si l'utilisateur a choisi de se connecter en tant qu'organisateur
                if ($profilOrganisateur == 1) {
                    $_SESSION['SWITCH'] = "organisateur";
                    header('Location:index.php');
                } else {
                    $_SESSION['SWITCH'] = "pasdeprofilorganisateur";
                    header('Location:creationProfilOrganisateur.php'); //redirection page de création Organisateur
                }
            }
        }
    } else {

        header('Location:index.php');

        // si la connection n'aboutit pas , on redirige l'utilisateur vers la page de connexion
    }
}
?>

