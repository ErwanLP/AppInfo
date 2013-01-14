<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
if (isset($_POST['nomO']) && isset($_POST['prenomO']) && isset($_POST['pseudoO']) && (isset($_POST['nomSocieteO'])) && isset($_POST['adresseO']) && isset($_POST['telO']) && isset($_POST['url']) && isset($_POST['pays']) && isset($_POST['description'])) {


    $nom = $_POST['nomO'];
    $prenom = $_POST['prenomO'];
    $pseudo = $_POST['pseudoO'];
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
    
    $bdd->query("INSERT INTO organisateur (nom, prenom, pseudo, lieuNaissance, pays, villes, adresse, codePostal, description, sexe, telephoneFixe, telephoneMobile, dateDeNaissance, mail, siteWeb, avatar, profession, loisirs, preference ) VALUES ('$nom','$prenom','$pseudo','$lieuNaissance','$pays','$ville','$adresse','$codePostal','$description','$personne','$telFixe','$telMobile','$date','$mail','$siteWeb','$avatar','$profession','$loisir','$preference')");
}
?>
