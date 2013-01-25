<?php

session_start();

$ID = $_SESSION['ID'];



$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');

if (isset($_GET['target'])) {
    $target = $_GET['target'];
    if ($target == "suivi") {
        $follow = $_GET['follow'];

        echo "INSERT INTO abonnement (ID_participant, ID_organisateur, date) VALUES (" . $ID . "," . $follow . ")";
        $bdd->query("INSERT INTO abonnement (ID_participant, ID_organisateur, date) VALUES (" . $ID . "," . $follow . ")");
    }
    
    
    header('Location:profil.php?target=abo');
    
    
    
}
?>
