<?php
session_start();

    $ID = 6;
    


$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');

if (isset($_GET['target'])) {
    $target = $_GET['target'];
    if ($target == "da") { //demande ajout amis
        $demandeur = $_GET['demandeur'];
        $demande = $_GET['demande'];
        $date = date("Y-m-d");

        echo "INSERT INTO demandefriend (id_demandeur, id_demande, date) VALUES (" . $demandeur . "," . $demande . "," . $date . ")";
        $bdd->query("INSERT INTO demandefriend (id_demandeur, id_demande, date) VALUES (" . $demandeur . "," . $demande . "," . $date . ")");
        
    }
    if($target == "ad"){ // afficher demande ajout amis
        $result = $bdd->query('SELECT * FROM demandefriend WHERE id_demande ="'.$ID.'"');
        echo 'SELECT * FROM demandefriend WHERE id_demande ="'.$ID.'"';
        while($data = $result->fetch()){
            echo $data['id_demandeur']." souhaite devenir votre ami(e)s"."<br/>"."Accepter"."<br/>"."refuser"."<br/><br/>";
            
            
            
            
            
        }$result->closeCursor();
        
        
        
        
    }
}


?>
