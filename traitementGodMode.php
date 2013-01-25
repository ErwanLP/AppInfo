<?php

$action = $_GET['action'];
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');

switch ($action) {
    case "ban":
        $pseudo = $_POST['pseudo'];

        $sql = '(SELECT ID FROM participant WHERE pseudo = "' . $pseudo . '") UNION (SELECT ID FROM organisateur WHERE pseudo = "' . $pseudo . '")';
        $result = $bdd->query($sql);
        while ($data = $result->fetch()) {
            $banID = $data['ID'];
        }$result->closeCursor();

        $bdd->query('DELETE FROM participant WHERE ID = "' . $banID . '"');
        $bdd->query('DELETE FROM organisateur WHERE ID = "' . $banID . '"');
        $bdd->query('DELETE FROM compte WHERE ID = "' . $banID . '"');

        break;

    case "topic":
        $topic = $_POST['topic'];

        $sql = 'SELECT  id FROM  topicforum WHERE nom =  "' . $topic . '"';
        $result = $bdd->query($sql);
        while ($data = $result->fetch()) {
            $topic = $data['id'];
        }$result->closeCursor();

        $bdd->query('DELETE FROM forummessage WHERE forummessage.id_topic ="' . $topic . '"');
        $bdd->query('DELETE FROM topicforum WHERE topicforum.id="' . $topic . '"');

        break;

    case "mes":
        $author = $_POST['author'];
        $date = $_POST['date'];
        $datenew = substr($date, 0, 10) . " " . substr($date, 13, 21);

        $sql = 'SELECT compte.ID FROM compte, participant, organisateur WHERE ( compte.ID = participant.id_compte AND participant.pseudo =  "' . $author . '" ) OR ( compte.ID = organisateur.id_compte AND organisateur.pseudo =  "' . $author . '" )';
        $result = $bdd->query($sql);
        while ($data = $result->fetch()) {
            $authorID = $data['ID'];
        }$result->closeCursor();

        $bdd->query('DELETE FROM forummessage WHERE forummessage.date_creation = "'. $datenew .'" AND (forummessage.id_participant ="' . $authorID . '" OR forummessage.id_organisateur ="' . $authorID . '")');

        break;

    case "event":
        $nom = $_POST['nom'];

        $bdd->query('DELETE FROM event WHERE nom = "' . $nom . '"');

        break;

    case "addth":
        $theme = $_POST['theme'];
        $themeCamel = $_POST['themeCamel'];
        $themeEn = $_POST['themeEn'];

        $sql = 'INSERT INTO theme (nom, nomCamel, nomEn) VALUES ("' . $theme . '", "' . $themeCamel . '","' . $themeEn . '")';
        //echo $sql;
        $bdd->query($sql);

        break;

    case "addsth":
        $stheme = $_POST['stheme'];

        $sthemeCamel = $_POST['sthemeCamel'];
        $sthemeEn = $_POST['sthemeEn'];
        $theme = $_POST['theme'];

        $sql = 'SELECT ID FROM theme WHERE nom =  "' . $theme . '"';
        $result = $bdd->query($sql);
        while ($data = $result->fetch()) {
            $themeID = $data['ID'];
        }$result->closeCursor();

        $sql = 'INSERT INTO theme (nom, nomCamel, nomEn, id-theme) VALUES ("' . $stheme . '", "' . $sthemeCamel . '","' . $sthemeEn . '","' . $themeID . '")';
        //echo $sql;
        $bdd->query($sql);

        break;

    case "supth":
        $theme = $_POST['theme'];

        $bdd->query('DELETE FROM theme WHERE nom = "' . $theme . '"');

        break;

    case "supsth":
        $stheme = $_POST['stheme'];

        $bdd->query('DELETE FROM soustheme WHERE nom = "' . $stheme . '"');

        break;
}
?>