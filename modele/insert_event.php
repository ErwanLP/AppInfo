<?php

function inserteventall($bdd, $nom, $lieu, $description, $date, $theme, $type) {
    return $bdd->query('SELECT * FROM event WHERE theme ="' . $theme . '"');
    $sql = 'INSERT INTO event(nom, lieu, description, date, theme,type) VALUES (:nom,:lieu';

    $sth = $bdd->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

    $sth->execute(array(':description' => $description));

    $red = $sth->fetchAll();
}

?>
