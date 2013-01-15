<?php

if (isset($_POST['nomEvent']) && isset($_POST['lieuEvent']) && isset($_POST['description']) && isset($_POST['dateDebut']) && isset($_POST['heureDebut']) && isset($_POST['heureFin']) && ($_POST['themeEvent'] != 'NULL') ) {
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');


    $nomEvent = $_POST['nomEvent'];
    $lieuEvent = $_POST['lieuEvent'];
    $description = $_POST['description'];
    $dateDebut = $_POST['dateDebut'];
    $dateFin = $_POST['dateFin'];
    $heureDebut = $_POST['heureDebut'];
    $heureFin = $_POST['heureFin'];
    $sousThemeEvent = $_POST['themeEvent'];
    $sousThemeExistants=$bdd->query('SELECT nom,nomEn FROM soustheme');
    $sousThemeEx=FALSE;
    $themeEx=FALSE;
    $lang='fr';
    
    while($dataSousTheme=$sousThemeExistants->fetch()){
        if($sousThemeEvent == $dataSousTheme['nom']){
            $sousThemeEx=TRUE;
        }
        if($sousThemeEvent == $dataSousTheme['nomEn']){
            $lang='en';
            $sousThemeEx=TRUE;
        }
    }$sousThemeExistants->closeCursor();
    
    
    $themeRel=$bdd->query('SELECT theme.nom,theme.nomEn From theme,soustheme WHERE soustheme.nom="'.$sousThemeEvent.'" AND soustheme.id_theme=theme.id');
    if($lang='en'){
        $themeRel=$bdd->query('SELECT theme.nom,theme.nomEn From theme,soustheme WHERE soustheme.nomEn="'.$sousThemeEvent.'" AND soustheme.id_theme=theme.id');
    }
    $themeEx=FALSE;
    while($dataTheme=$themeRel->fetch()){ 
        
        if($lang=='fr'){
            $themeEx=TRUE;
        $themeEvent=$dataTheme['nom'];}
        
        if($lang=='en'){
            $themeEx=TRUE;
        $themeEvent=$dataTheme['nomEn'];}
        
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


    if ($booleantest == FALSE && $sousThemeEx==TRUE && $themeEx==TRUE) {

        $bdd->query("INSERT INTO event(nom,lieu,description,dateDebut,dateFin,heureDebut,heureFin,theme,type) VALUES ('.$nomEvent.','.$lieuEvent.','.$description.','.$dateDebut.','.$dateFin.','.$heureDebut.','.$heureFin.','.$themeEvent.','.$sousThemeEvent.')");
        echo '"INSERT INTO event(nom,lieu,description,dateDebut,dateFin,heureDebut,heureFin,theme,type) VALUES ('.$nomEvent.','.$lieuEvent.','.$description.','.$dateDebut.','.$dateFin.','.$heureDebut.','.$heureFin.','.$themeEvent.','.$sousThemeEvent.')"';
        //header('Location:index.php');
    } else {
        if($booleantest==TRUE){
        echo 'Le nom de l\'&eacute;v&egrave;nement est d&eacute;j&aacute; utilis&eacute;.';}
        if($sousThemeEx==FALSE){
        echo 'Pb sous theme';}
        if($themeEx==FALSE){
        echo 'Pb theme';}
    }
} else {
    echo 'Erreur !';
}
?>


