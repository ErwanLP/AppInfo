<?php

function eventall($bdd) {
    return $bdd->query('SELECT * FROM event LIMIT 0,30');
}

function eventtheme($bdd,$theme){
    return $bdd->query('SELECT * FROM event WHERE theme ="'.$theme.'"');   
    
}
function eventtype($bdd,$type){
    return $bdd->query('SELECT * FROM event WHERE type ="'.$type.'"');   
    
}
function eventtop($bdd){
    return $bdd->query('SELECT nom,note,photo FROM event ORDER BY note DESC LIMIT 0,12');   
    
}
function eventnom($bdd,$nom){
    return $bdd->query('SELECT * FROM event WHERE nom ="'.$nom.'"');   
    
}
?>
