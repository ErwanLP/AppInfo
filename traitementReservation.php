<?php
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    $id_part=$_POST['id_participant'];
    $id_event=$_POST['id_event'];
    $bdd->query("INSERT INTO event_participant(id_event,id_participant) VALUES ('".$id_event."','".$id_part."')");
    header('Location:eventDetaille.php?ID='.$id_event);
    $res=$bdd->query('SELECT placesRestantes FROM event WHERE event.ID='.$id_event);
    while($da=$res->fetch()){
        $nbPl=$da['placesRestantes']-1;
        $bdd->query('UPDATE event SET placesRestantes='.$nbPl.' WHERE event.ID='.$id_event);
    }

?>
