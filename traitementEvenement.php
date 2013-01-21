<?php

if (isset($_POST['nomEvent']) && isset($_POST['lieuEvent']) && isset($_POST['description']) && isset($_POST['dateDebut']) && isset($_POST['heureDebut']) && isset($_POST['heureFin']) && ($_POST['themeEvent'] != 'NULL')) {
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    $imageSet = false;
    if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0) {
        echo '<strong>La taille du fichier est trop grande. Veuillez selectionner une image faisant moins de 100 Ko.';

        if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0 AND $_FILES['image']['size'] <= 102400) {
            $infoImage = pathinfo($_FILES['image']['name']);
            $extImage = $infosfichier['extension'];
            $extAccept = array('jpg', 'jpeg', 'png');
            if (in_array($extImage, $extAccept)) {
                $t = 0;
                $nbr = $bdd->query('SELECT photo FROM event');
                while ($dataImage = $nbr->fetch()) {
                    $t = $t + 1;
                }$nbr->closeCursor;
                $imageSet = true;
            } else {
                echo '<strong>Veuillez choisir une photo au format jpeg ou png</strong>';
                echo '<strong>Picture format are not allowed, please choose a jpeg or png picture</strong>';
            }
        } else {
            echo '<strong>La taille du fichier est trop grande. Veuillez selectionner une image faisant moins de 100 Ko.</strong>';
            echo '<strong>File size is bigger than authorized. Please choose a picture shorter than 100 KB</strong>';
        }
    } else {
        echo '<strong>Probl&egrave;me avec la r&eacute;ception du fichier</strong>';
        echo '<strong>File uploading failed.</strong>';
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
    $sousThemeEvent = $_POST['themeEvent'];
    $sousThemeExistants = $bdd->query('SELECT nom,nomEn FROM soustheme');
    $sousThemeEx = FALSE;
    $themeEx = FALSE;
    $lang = 'fr';

    $lundi = false;
    if ($_POST['lundi'] == 'on') {
        $lundi = true;
    }

    $mardi = false;
    if ($_POST['mardi'] == 'on') {
        $mardi = true;
    }

    $mercredi = false;
    if ($_POST['mercredi'] == 'on') {
        $mercredi = true;
    }

    $jeudi = false;
    if ($_POST['jeudi'] == 'on') {
        $jeudi = true;
    }

    $vendredi = false;
    if ($_POST['vendredi'] == 'on') {
        $vendredi = true;
    }

    $samedi = false;
    if ($_POST['samedi'] == 'on') {
        $samedi = true;
    }

    $dimanche = false;
    if ($_POST['dimanche'] == 'on') {
        $dimanche = true;
    }

    while ($dataSousTheme = $sousThemeExistants->fetch()) {
        if ($sousThemeEvent == $dataSousTheme['nom']) {
            $sousThemeEx = TRUE;
        }
        if ($sousThemeEvent == $dataSousTheme['nomEn']) {
            $lang = 'en';
            $sousThemeEx = TRUE;
        }
    }$sousThemeExistants->closeCursor();


    $themeRel = $bdd->query('SELECT theme.nom,theme.nomEn From theme,soustheme WHERE soustheme.nom="' . $sousThemeEvent . '" AND soustheme.id_theme=theme.id');
    if ($lang = 'en') {
        $themeRel = $bdd->query('SELECT theme.nom,theme.nomEn From theme,soustheme WHERE soustheme.nomEn="' . $sousThemeEvent . '" AND soustheme.id_theme=theme.id');
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


    if ($booleantest == FALSE && $sousThemeEx == TRUE && $themeEx == TRUE && $imageSet==true) {
        move_uploaded_file($_FILES['image']['tmp_name'], 'imgUser/' . $t . $extImage);
        $chemin = 'imgUser/' . $t . $extImage;
        $bdd->query("INSERT INTO event(nom,lieu,description,dateDebut,dateFin,heureDebut,heureFin,theme,type, photo, lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche, prix, nbDePersonne, placesRestantes, nbVotes) VALUES ('.$nomEvent.','.$lieuEvent.','.$description.','.$dateDebut.','.$dateFin.','.$heureDebut.','.$heureFin.','.$themeEvent.','.$sousThemeEvent.','.$chemin.','.$lundi.','.$mardi.','.$mercredi.','.$jeudi.','.$vendredi.','.$samedi.','.$dimanche.','.$prix.','.$nbDePersonne.','.$nbDePersonne.',0)");
        
        
        header('Location:index.php');
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


