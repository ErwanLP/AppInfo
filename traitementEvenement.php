<?php

if (isset($_POST['nomEvent']) && isset($_POST['lieuEvent']) && isset($_POST['description']) && isset($_POST['dateEvent']) /* && ($_POST['typeEvent'] != NULL) */) {
  $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', ''); 


    $nomEvent = $_POST['nomEvent'];
    $lieuEvent = $_POST['lieuEvent'];
    $description = $_POST['description'];
    $dateEvent = $_POST['dateEvent'];
    $typeEvent = $_POST['typeEvent'];
    
    if(($typeEvent == "comedieMusicale") or ($typeEvent == "theatre") or ($typeEvent == "cafe") or ($typeEvent == "cabaret") or ($typeEvent == "dance") or ($typeEvent == "sonEtLumiere") or ($typeEvent == "opera") or ($typeEvent == "oneManShow") or ($typeEvent == "spectacleDeRue")){
        $themeEvent = "spectacle";
        
    }



    $resultEVT = $bdd->query('SELECT nom FROM event WHERE nom = "' . $nomEvent . '"');
    $booleantest = FALSE;
    while ($data = $resultEVT->fetch()) {
        if ($data['nomEvent'] == $nomEvent) {
            $booleantest = TRUE;
        }
    }
    $resultEVT->closeCursor();
    $resultEVT = null;


    if ($booleantest == FALSE) {

        $bdd->query("INSERT INTO event(nom, lieu, description, date, type, theme) VALUES ('$nomEvent','$lieuEvent','$description','$dateEvent','$typeEvent','$themeEvent')");
        header('Location:index.php');
    } else {

        echo "L event existe deja";
    }
} else {
    echo 'Erreur !';
}
?>


