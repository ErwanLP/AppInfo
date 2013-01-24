<?php
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    $id_part=$_POST['id_participant'];
    $id_event=$_POST['id_event'];
    $bdd->query("INSERT INTO event_participant(id_event,id_participant) VALUES ('".$id_event."','".$id_part."')");
    header('Location:eventDetaille.php?ID='.$id_event);

?>
