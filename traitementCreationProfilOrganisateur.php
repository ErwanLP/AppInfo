<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
if (isset($_POST['nomO']) && isset($_POST['prenomO']) && isset($_POST['pseudoO']) && isset($_POST['personne']) && isset($_POST['nomSocieteO']) && isset($_POST['adresseO']) && isset($_POST['telSociete']) && isset($_POST['url']) && isset($_POST['pays'])) {


    $nom = $_POST['nomO'];
    $prenom = $_POST['prenomO'];
    $pseudo = $_POST['pseudoO'];
    $nomSociete = $_POST['nomSocieteO'];
    $pays = $_POST['pays'];
    $idSession = $_SESSION['ID'];
    $personne = $_POST['personne'];
    $adresse = $_POST['adresseO'];
    $telSociete = $_POST['telSociete'];
    $siteWeb = $_POST['url'];
    $telMobileO = NULL;
    $mail = NULL;
    $codePostal = NULL;
    $ville = NULL;
    $logo = NULL;
    $activite = NULL;
    $date = NULL;
    $profession = NULL;
    
    $bdd->query("INSERT INTO organisateur (ID, pays, pseudo, prenom, nom, sexe, nomSociete, adresseSociete, siteWeb, telephoneSociete ) VALUES ('. $idSession .','$pays','$pseudo','$prenom','$nom','$personne','$nomSociete','$adresse','$siteWeb','$telSociete')");

    $bdd->query('UPDATE compte SET profilOrganisateur = 1 WHERE ID = "' . $idSession . '"');
    
    $_SESSION['SWITCH'] = "organisateur";
    
}
header('Location:index.php');
?>
