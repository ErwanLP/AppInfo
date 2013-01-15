<?php

function theme($bdd,$lang){
    if($lang=='en'){
    $theme = $bdd->query('SELECT * FROM theme SELECT *
FROM `soustheme`
ORDER BY `nomEn` ASC');
    return $theme;
    }else{
      $theme = $bdd->query('SELECT *
FROM `soustheme`
ORDER BY `nom` ASC');
    return $theme;  
    }
}

function sousTheme($bdd,$donnees,$lang){
    
    return $soustheme;
    if($lang=='en'){
    $soustheme = $bdd->query('SELECT *
FROM `soustheme`
ORDER BY `nomEn` ASC WHERE soustheme.id_theme=' . $donnees['ID']);
    return $theme;
    }else{
        $soustheme = $bdd->query('SELECT *
FROM `soustheme`
ORDER BY `nom` ASC WHERE soustheme.id_theme=' . $donnees['ID']);
    return $theme;
    }
}
?>
