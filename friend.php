<?php

session_start();

$ID = 6;



$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');

if (isset($_GET['target'])) {
    $target = $_GET['target'];
    if ($target == "dem") { //demande ajout amis
        $demandeur = $_GET['demandeur'];
        $demande = $_GET['demande'];
        $date = date("Y-m-d");

        echo "INSERT INTO demandefriend (id_demandeur, id_demande, date) VALUES (" . $demandeur . "," . $demande . "," . $date . ")";
        $bdd->query("INSERT INTO demandefriend (id_demandeur, id_demande, date) VALUES (" . $demandeur . "," . $demande . "," . $date . ")");
    }
    if ($target == "aff") { // afficher demande ajout amis
        $result = $bdd->query('SELECT * FROM demandefriend WHERE id_demande ="' . $ID . '"');
        echo 'SELECT * FROM demandefriend WHERE id_demande ="' . $ID . '"';
        while ($data = $result->fetch()) {
            echo $data['id_demandeur'];
            echo " souhaite devenir votre ami(e)s" . "<br/>" ;
            echo "<a href ='friend.php?target=acp&accep=true&demandeur=".$data['id_demandeur']."'>Accepter</a>" ;
            echo "<br/>";
            echo "<a href ='friend.php?target=acp&accep=false&demandeur=".$data['id_demandeur']."'>Refuser</a>";
            echo "<br/><br/>";
        }$result->closeCursor();
    }

    if ($target == "acp") { // accepter ou reffuser une demande en  amis
        $accept = $_GET['accept'];
        $demandeur = $_GET['demandeur'];
        if ($accept == true) {
            $bdd->query("INSERT INTO friend (id_f1, id_f2) VALUES (" . $demandeur . "," . $ID . ")");
        }
        $bdd->query("DELETE FROM demandefriend WHERE id_demandeur=".$demandeur." AND id_demande =".$ID."");
        echo "DELETE FROM demandefriend WHERE id_demandeur=".$demandeur." AND id_demande =".$ID."";
    }
}
?>
