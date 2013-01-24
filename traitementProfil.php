<?php
session_stat();
include('BDD.php');
include('start.php');

$idSession = $_SESSION['ID'];


    if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "participant" AND $_SESSION['ID'] != null) {
        
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $pays = $_POST['pays'];
    $adresse = $_POST['adresse'];
    $telMobile = $_POST['numeroPortable'];
    $codePostal = $_POST['pcode'];
    $ville = $_POST['villes'];
    $avatar = $_POST['avatar'];
    $profession = $_POST['profession'];
    $loisir = $_POST['loisirs'];
    $lieuNaissance = $_POST['lieuDeNaissance'];
    $description = $_POST['description'];
    $telFixe = $_POST['telephoneFixe'];
    $dateDeNaissance = $_POST['date'];
    $siteWeb = $_POST['siteWeb'];
    $mail = $_POST['email'];
    $sexe = $_POST['genre'];
      
    $bdd->query('UPDATE participant SET nom = "' .$nom .'", prenom = "' .$prenom .'", pseudo = "' .$pseudo .'", lieuNaissance = "' .$lieuNaissance .'", pays = "' .$pays .'", villes = "' .$ville .'", adresse = "' .$adresse .'", codePostal = "' .$codePostal .'", description = "' .$description .'", sexe = "' .$sexe .'", telephoneFixe = "' .$telFixe .'", telephoneMobile = "' .$telMobile .'", dateDeNaissance = "' .$dateDeNaissance .'", mail = "' .$mail .'", siteWeb = "' .$siteWeb .'", avatar = "' .$avatar .'", profession = "' .$profession .'", loisirs = "' .$loisir .'" WHERE ID = "' . $idSession . '"');
   


    }else if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
        
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
        
        
        
        
      $bdd->query('UPDATE participant SET nom = "' .$nom .'", prenom = "' .$prenom .'", pseudo = "' .$pseudo .'", lieuNaissance = "' .$lieuNaissance .'", pays = "' .$pays .'", villes = "' .$ville .'", adresse = "' .$adresse .'", codePostal = "' .$codePostal .'", description = "' .$description .'", sexe = "' .$sexe .'", telephoneFixe = "' .$telFixe .'", telephoneMobile = "' .$telMobile .'", dateDeNaissance = "' .$dateDeNaissance .'", mail = "' .$mail .'", siteWeb = "' .$siteWeb .'", avatar = "' .$avatar .'", profession = "' .$profession .'", loisirs = "' .$loisir .'" WHERE ID = "' . $idSession . '"');
     
    }
?>
