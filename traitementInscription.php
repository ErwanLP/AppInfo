<?php

if (isset($_POST['nomDeCompte']) && isset($_POST['mailCompte']) && isset($_POST['mdp'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');

    /*echo 'Bonjour ' . $_POST['nomDeCompte'];*/
    $nomDeCompte = $_POST['nomDeCompte'];
    $mdp = sha1($_POST['mdp']."erwan");
    $mailCompte = $_POST['mailCompte'];



    $result = $bdd->query('SELECT mailCompte FROM compte WHERE 1');
    $booleantest = FALSE;
    while ($data = $result->fetch()) {
        if ($data['mailCompte']==$mailCompte){
            $booleantest = TRUE;
                    }
    }
    $result->closeCursor();

if ($booleantest==FALSE){
        $bdd->query("INSERT INTO compte(nomDeCompte, mdp, mailCompte) VALUES ('$nomDeCompte','$mdp','$mailCompte')");
    
}else{
    
    echo 'Le compte existe deja';
}




} else {
    echo 'Erreur !';
}
?>


