<?php
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    $id_part=$_POST['id_participant'];
    $id_event=$_POST['id_event'];
    $bdd->query("INSERT INTO aime(id_event,id_participant) VALUES ('".$id_event."','".$id_part."')");
    header('Location:eventDetaille.php?ID='.$id_event);
    $res=$bdd->query('SELECT nbAime FROM event WHERE event.ID='.$id_event);
    while($da=$res->fetch()){
        $nbAi=$da['nbAime']+1;
        $bdd->query('UPDATE event SET nbAime='.$nbAi.' WHERE event.ID='.$id_event);
    }

?>
