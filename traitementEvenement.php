<?php

if (isset($_POST['nomEvent']) && isset($_POST['lieuEvent']) && isset($_POST['description']) && isset($_POST['dateDebut']) && isset($_POST['heureDebut']) && isset($_POST['heureFin']) && ($_POST['themeEvent'] != 'NULL')) {
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    $imageSet = false;
    if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0) {

        if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0 AND $_FILES['image']['size'] <= 307200) {
            $infoImage = pathinfo($_FILES['image']['name']);
            $extImage = $infoImage['extension'];
            $extAccept = array('jpg', 'jpeg', 'png');
            if (in_array($extImage, $extAccept)) {
                $t = 0;
                $nbr = $bdd->query('SELECT photo FROM event');
                while ($dataImage = $nbr->fetch()) {
                    $t = $t + 1;
                }$nbr->closeCursor();
                $imageSet = true;
            } else {
                echo '<strong>Veuillez choisir une photo au format jpeg ou png</strong><br/>';
                echo '<strong>Picture format are not allowed, please choose a jpeg or png picture</strong>';
            }
        } else {
            echo '<strong>La taille du fichier est trop grande. Veuillez selectionner une image faisant moins de 300 Ko.</strong><br/>';
            echo '<strong>File size is bigger than authorized. Please choose a picture shorter than 300 KB</strong>';
        }
    } else {
        echo '<strong>Probl&egrave;me avec la r&eacute;ception du fichier</strong><br/>';
        echo '<strong>File uploading failed.</strong>';
    }
    if($imageSet==false){
        echo '<br/>Le fichier n\'a pas pu &ecirc;tre upload&eacute;<br/>The file haven\'t been uploaded';
    }

    $nomEvent = $_POST['nomEvent'];
    $lieuEvent = $_POST['lieuEvent'];
    $prix = $_POST['prix'];
    $nbDePersonne = $_POST['nbDePersonne'];
    $description = $_POST['description'];
    $dateDebut = $_POST['dateDebut'];
    $dateFin = $_POST['dateFin'];
    $heureDebut = $_POST['heureDebut'];
    $heureFin = $_POST['heureFin'];
    $id_organisateur=$_POST['id_organisateur'];
    $sousThemeEvent = $_POST['themeEvent'];
    $sousThemeExistants = $bdd->query('SELECT nomCamel FROM soustheme');
    $sousThemeEx = FALSE;
    $themeEx = FALSE;
    $lang = 'fr';
    
    $lundi = false;
    if (!empty($_POST['lundi']) ) {
        $lundi = true;
    }

    $mardi = false;
    if (!empty($_POST['mardi'])) {
        $mardi = true;
    }

    $mercredi = false;
    if (!empty($_POST['mercredi'])) {
        $mercredi = true;
    }

    $jeudi = false;
    if (!empty($_POST['jeudi'])) {
        $jeudi = true;
    }

    $vendredi = false;
    if (!empty($_POST['vendredi'])) {
        $vendredi = true;
    }

    $samedi = false;
    if (!empty($_POST['samedi'])) {
        $samedi = true;
    }

    $dimanche = false;
    if (!empty($_POST['dimanche'])) {
        $dimanche = true;
    }
    
    while ($dataSousTheme = $sousThemeExistants->fetch()) {
        if ($sousThemeEvent == $dataSousTheme['nomCamel']) {
            $sousThemeEx = TRUE;
        }
    }$sousThemeExistants->closeCursor();


    $themeRel = $bdd->query('SELECT theme.nom From theme,soustheme WHERE soustheme.nomCamel="' . $sousThemeEvent . '" AND soustheme.id_theme=theme.id');
    if ($lang == 'en') {
        $themeRel = $bdd->query('SELECT theme.nomEn From theme,soustheme WHERE soustheme.nomEn="' . $sousThemeEvent . '" AND soustheme.id_theme=theme.id');
    }
    $themeEx = FALSE;
    while ($dataTheme = $themeRel->fetch()) {

        if ($lang == 'fr') {
            $themeEx = TRUE;
            $themeEvent = $dataTheme['nom'];
        }

        if ($lang == 'en') {
            $themeEx = TRUE;
            $themeEvent = $dataTheme['nomEn'];
        }
    }$themeRel->closeCursor();





    $resultEVT = $bdd->query('SELECT nom FROM event WHERE nom = "' . $nomEvent . '"');
    $booleantest = FALSE;
    while ($data = $resultEVT->fetch()) {
        if ($data['nom'] == $nomEvent) {
            $booleantest = TRUE;
        }
    }
    $resultEVT->closeCursor();
    $resultEVT = null;

    $description;
    if ($booleantest == FALSE && $sousThemeEx == TRUE && $themeEx == TRUE && $imageSet==TRUE) {
        move_uploaded_file($_FILES['image']['tmp_name'], 'imgUser/' . $t . $extImage);
        $chemin = 'imgUser/' . $t . $extImage;
        $bdd->query("INSERT INTO event(id_organisateur,nom,lieu,description,dateDebut,dateFin,heureDebut,heureFin,theme,type, lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche, prix, nbDePersonne, placesRestantes, nbVotes, photo) VALUES ('".$id_organisateur."','".$nomEvent."','".$lieuEvent."','".$description."','".$dateDebut."','".$dateFin."','".$heureDebut."','".$heureFin."','".$themeEvent."','".$sousThemeEvent."','".$lundi."','".$mardi."','".$mercredi."','".$jeudi."','".$vendredi."','".$samedi."','".$dimanche."','".$prix."','".$nbDePersonne."','".$nbDePersonne."',0,'".$chemin."')");
        /*echo "INSERT INTO event(id_organisateur,nom,lieu,description,dateDebut,dateFin,heureDebut,heureFin,theme,type, lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche, prix, nbDePersonne, placesRestantes, nbVotes, photo) VALUES ('".$id_organisateur."','".$nomEvent."','".$lieuEvent."','".$description."','".$dateDebut."','".$dateFin."','".$heureDebut."','".$heureFin."','".$themeEvent."','".$sousThemeEvent."','".$lundi."','".$mardi."','".$mercredi."','".$jeudi."','".$vendredi."','".$samedi."','".$dimanche."','".$prix."','".$nbDePersonne."','".$nbDePersonne."',0,'".$chemin."')";
        requete */
        $IDEvent = $bdd->query('SELECT ID FROM event');
        while ($data16 = $IDEvent->fetch()) {
            $IDEventCree=$data16['ID'];
        }$IDEvent->closeCursor();
        /*echo $IDEventCree;*/
        header('Location:eventDetaille.php?ID='.$IDEventCree);
    } else {
        if ($booleantest == TRUE) {
            echo 'Le nom de l\'&eacute;v&egrave;nement est d&eacute;j&aacute; utilis&eacute;.';
        }
        if ($sousThemeEx == FALSE) {
            echo 'Pb sous theme';
        }
        if ($themeEx == FALSE) {
            echo 'Pb theme';
        }
    }
} else {
    echo 'Erreur !';
}
?>


