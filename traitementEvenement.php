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



    $resultEVT = $bdd->query('SELECT nomEvent FROM event WHERE nomEvent = "' . $nomEvent . '"');
    $booleantest = FALSE;
    while ($data = $resultEVT->fetch()) {
        if ($data['nomEvent'] == $nomEvent) {
            $booleantest = TRUE;
        }
    }
    $resultEVT->closeCursor();
    $resultEVT = null;


    if ($booleantest == FALSE) {
        echo $nomEvent;
        echo $lieuEvent;
        echo $description;
        echo $dateEvent;
        echo $typeEvent;
        echo $themeEvent;
        echo "INSERT INTO event(nomEvent, lieuEvent, description, dateEvent, typeEvent, themeEvent) VALUES ('$nomEvent','$lieuEvent','$description','$dateEvent','$typeEvent','$themeEvent')";
        $bdd->query("INSERT INTO event(nomEvent, lieuEvent, description, dateEvent, typeEvent, themeEvent) VALUES ('$nomEvent','$lieuEvent','$description','$dateEvent','$typeEvent','$themeEvent')");
    } else {

        echo "L event compte existe deja";
    }
} else {
    echo 'Erreur !';
}
?>


