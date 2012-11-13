<?php

if (isset($_POST['nomEvent']) && isset($_POST['lieuEvent']) && isset($_POST['description']) && isset($_POST['dateEvent']) /* && ($_POST['typeEvent'] != NULL) */) {
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');


    $nomEvent = $_POST['nomEvent'];
    $lieuEvent = $_POST['lieuEvent'];
    $description = $_POST['description'];
    $dateEvent = $_POST['dateEvent'];
    $typeEvent = $_POST['typeEvent'];



    $resultEVT = $bdd->query('SELECT nomEvent FROM event WHERE nomEvent = "' . $nomEvent . '"');
    $booleantest = FALSE;
    while ($data = $resultEVT->fetch()) {
        if ($data['nomEvent'] == $nomEvent) {
            $booleantest = TRUE;
        }
    }


    if ($booleantest == FALSE) {
        echo $nomEvent;
        echo $lieuEvent;
        echo $description;
        echo $dateEvent;
        echo $typeEvent;
        $bdd->query("INSERT INTO event(nomEvent, lieuEvent, description, dateEvent, typeEvent) VALUES ('$nomEvent','$lieuEvent','$description','$dateEvent','$typeEvent')");
    } else {

        echo "L event compte existe deja";
    }
} else {
    echo 'Erreur !';
}
?>


