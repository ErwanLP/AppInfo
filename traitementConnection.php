<?php


if (isset($_POST['nomDeCompte']) && isset($_POST['mdp'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');

    /* echo 'Bonjour ' . $_POST['nomDeCompte']; */
    $nomDeCompte = $_POST['nomDeCompte'];
    $mdp = sha1($_POST['mdp']."erwan");


   /* $resultMDP = $bdd->query('SELECT mdp FROM compte WHERE nomDeCompte ="'.$nomDeCompte.'"');
$data2 = $resultMDP->fetch();
if ($data2['mdp] == $mdp) {
   ...
}*/
    
    
    

    $resultNDC = $bdd->query('SELECT nomDeCompte FROM compte WHERE 1');
    $booleantest = FALSE;
    while ($data = $resultNDC->fetch()) {

        if ($data['nomDeCompte'] == $nomDeCompte) {

           /* $resultMDP = $bdd->query('SELECT mdp FROM compte WHERE nomDeCompte = "$nomDeCompte"');*/
            $resultMDP = $bdd->query('SELECT mdp FROM compte WHERE nomDeCompte ="'.$nomDeCompte.'"');
            $data2 = $resultMDP->fetch();
            if ($data2['mdp'] == $mdp) {
                $booleantest = TRUE;
                echo 'Tu es connect&eacute !!';
                            echo $nomDeCompte;
                            echo $data['nomDeCompte'];
                            echo $mdp;
                            echo $data2['mdp'];
            }else{
                
                echo 'le mot de pass est incorect';
            }
        } else {

            echo 'Tu n a pas de compte !!';
        }
    }
    $resultNDC->closeCursor();
} else {
    echo 'Erreur !';
}
?>