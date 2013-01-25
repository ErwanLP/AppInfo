<?php

session_start();
include('BDD.php');
include('start.php');

$idSession = $_SESSION['ID'];


if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "participant" AND $_SESSION['ID'] != null) {

    $result = $bdd->query('SELECT avatar FROM participant WHERE participant.ID = "' . $idSession . '"');
    while($data = $result->fetch()){
        $avatarGet = $data['avatar'];
    }$result->closeCursor();
    $avatarDET = pathinfo($_FILES['avatar']['name']);
    $avatarExt = $avatarDET['extension'];
    if ($avatarExt == NULL) {
        $chemin = $avatarGet;
    } else {
        
        
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'img/test321' . $avatarExt);
        $chemin = 'img/test321' . $avatarExt;
    }



    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $pays = $_POST['pays'];
    $adresse = $_POST['adresse'];
    $telMobile = $_POST['numeroPortable'];
    $codePostal = $_POST['pcode'];
    $ville = $_POST['villes'];
    $profession = $_POST['profession'];
    $loisir = $_POST['loisirs'];
    $lieuNaissance = $_POST['lieuDeNaissance'];
    $description = $_POST['description'];
    $telFixe = $_POST['telephoneFixe'];
    $dateDeNaissance = $_POST['date'];
    $siteWeb = $_POST['siteWeb'];
    $mail = $_POST['email'];
    $sexe = $_POST['genre'];

    $bdd->query('UPDATE participant SET nom = "' . $nom . '", prenom = "' . $prenom . '", pseudo = "' . $pseudo . '", lieuNaissance = "' . $lieuNaissance . '", pays = "' . $pays . '", villes = "' . $ville . '", adresse = "' . $adresse . '", codePostal = "' . $codePostal . '", description = "' . $description . '", sexe = "' . $sexe . '", telephoneFixe = "' . $telFixe . '", telephoneMobile = "' . $telMobile . '", dateDeNaissance = "' . $dateDeNaissance . '", mail = "' . $mail . '", siteWeb = "' . $siteWeb . '", avatar = "' . $chemin . '", profession = "' . $profession . '", loisirs = "' . $loisir . '" WHERE ID = "' . $idSession . '"');

    header('Location:profil.php?target=info#description');
} else if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
 
    $result = $bdd->query('SELECT logo FROM organisateur WHERE organisateur.ID = "' . $idSession . '"');
    while($data = $result->fetch()){
        $logoGet = $data['logo'];
    }$result->closeCursor();
    $logoDET = pathinfo($_FILES['logo']['name']);
    $logoExt = $logoDET['extension'];
    if ($logoExt == NULL) {
        $chemin = $logoGet;
    } else {
           
        move_uploaded_file($_FILES['logo']['tmp_name'], 'img/test321' . $logoExt);
        $chemin = 'img/test321' . $logoExt;
    }
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $nomSociete = $_POST['nomSociete'];
    $pays = $_POST['pays'];
    $sexe = $_POST['genre'];
    $telSociete = $_POST['telephoneSociete'];
    $siteWeb = $_POST['siteWeb'];
    $dateDeNaissance = $_POST['date'];
    $mail = $_POST['email'];
    $profession = $_POST['profession'];
    $adresse = $_POST['adresse'];
    $codePostal = $_POST['pcode'];
    $ville = $_POST['ville'];
    $telMobile = $_POST['telephoneMobile'];
    $activite = $_POST['activite'];


    $bdd->query('UPDATE organisateur SET nom = "' . $nom . '", prenom = "' . $prenom . '", pseudo = "' . $pseudo . '", nomSociete = "' . $nomSociete . '", pays = "' . $pays . '", ville = "' . $ville . '", adresseSociete = "' . $adresse . '", codePostalSociete = "' . $codePostal . '", sexe = "' . $sexe . '", telephoneSociete = "' . $telSociete . '", telephoneMobile = "' . $telMobile . '", dateDeNaissance = "' . $dateDeNaissance . '", mail = "' . $mail . '", siteWeb = "' . $siteWeb . '", logo = "' . $chemin . '", profession = "' . $profession . '", activite = "' . $activite . '" WHERE ID = "' . $idSession . '"');

    header('Location:profil.php?target=info#description');
}
?>
