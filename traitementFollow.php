<?php

session_start();
$ID = $_SESSION['ID'];
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');




$follow = $_GET['follow'];

$sql = "INSERT INTO abonnement (ID_participant, ID_organisateur) VALUES (" . $ID . "," . $follow . ")";
$bdd->query($sql);
echo $sql;



header('Location:profil.php?target=abo');
?>