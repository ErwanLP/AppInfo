<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pseudo']) && (isset($_POST['personne'])) && isset($_POST['pays'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $pays = $_POST['pays'];
    $idSession = $_SESSION['ID'];
    $personne = $_POST['personne'];
    $adresse = NULL;
    $telMobile = NULL;
    $codePostal = NULL;
    $ville = NULL;
    $avatar = NULL;
    $profession = NULL;
    $loisir = NULL;
    $preference = NULL;
    
    if (isset($_POST['lieuNaissance'])) {
        $lieuNaissance = $_POST['lieuNaissance'];
    }else {
        $lieuNaissance = NULL;
    }
    
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
    }else {
        $description = NULL;
    }
    
    if (isset($_POST['telFixe'])) {
        $telFixe = $_POST['telFixe'];
    }else {
        $telFixe = NULL;
    }
    
    if (isset($_POST['date'])) {
        $date = $_POST['date'];
    }else {
        $date = NULL;
    }
    
    if (isset($_POST['url'])) {
        $siteWeb = $_POST['url'];
    }else {
        $siteWeb = NULL;
    }

    $result = $bdd->query('SELECT mail FROM compte WHERE compte.ID = "' . $idSession . '"');
    while ($data = $result->fetch()) {
        
        $mail = $data['mail'];
    }$result->closeCursor();
    
    $bdd->query("INSERT INTO participant (nom, prenom, pseudo, lieuNaissance, pays, villes, adresse, codePostal, description, sexe, telephoneFixe, telephoneMobile, dateDeNaissance, mail, siteWeb, avatar, profession, loisirs, preference ) VALUES ('$nom','$prenom','$pseudo','$lieuNaissance','$pays','$ville','$adresse','$codePostal','$description','$personne','$telFixe','$telMobile','$date','$mail','$siteWeb','$avatar','$profession','$loisir','$preference')");
}
?>
