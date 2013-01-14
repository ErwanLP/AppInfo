<?php

$action = $_GET['action'];
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');

switch ($action) {
    case "ban":
        $pseudo = $_POST['pseudo'];
        $choix = $_POST['choix'];
        if ($choix = "profil") {
            $bdd->query('DELETE FROM participant WHERE pseudo = "' . $pseudo . '"');
        } else {
            $bdd->query('');
        }

        break;
    case "topic":
        $topic = $_POST['topic'];
        $result = $bdd->query('SELECT  id FROM  topicforum WHERE nom =  "' . $topic . '"');



        while ($data = $result->fetch()) {
            $topic = $data['id'];
        }
        $bdd->query('DELETE FROM forummessage WHERE forummessage.id_topic ="' . $topic . '"');
        $bdd->query('DELETE FROM topicforum WHERE topicforum.id="' . $topic . '"');

        break;
    case "mes":
        $author = $_POST['author'];
        //$author = "boby";
        $date = $_POST['date'];
        $datenew = substr($date, 0, 10) . " " . substr($date, 13, 21);

        $result = $bdd->query('SELECT compte.ID FROM compte, participant, organisateur WHERE ( compte.ID = participant.id_compte AND participant.pseudo =  "' . $author . '" ) OR ( compte.ID = organisateur.id_compte AND organisateur.pseudo =  "' . $author . '" )');
        while ($data = $result->fetch()) {
            $authorID = $data['ID'];
        }
        echo 'DELETE FROM forummessage WHERE forummessage.date_creation = "' . $datenew . '" AND (forummessage.id_participant ="' . $authorID . '" OR forummessage.id_organisateur ="' . $authorID . '")';
        $bdd->query('DELETE FROM forummessage WHERE forummessage.date_creation = "' . $datenew . '" AND (forummessage.id_participant ="' . $authorID . '" OR forummessage.id_organisateur ="' . $authorID . '")');

        break;
    case "event":
        $nom = $_POST['nom'];
        $bdd->query('DELETE FROM event WHERE nom = "' . $nom . '"');
        break;
        
    case "addth":
        
        
        
        
        
        
        
        
        
}
?>