<?php

if (isset($_POST['nomDeCompte']) && isset($_POST['mdp'])) {

    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');


    $nomDeCompte = $_POST['nomDeCompte'];
    $mdp = sha1($_POST['mdp'] . "erwan");




    $booleantest = FALSE;
    $resultMDP = $bdd->query('SELECT * FROM compte WHERE nomDeCompte ="' . $nomDeCompte . '"');

    $data2 = $resultMDP->fetch();
    if ($data2['mdp'] == $mdp) {
        $booleantest = TRUE;
        $_SESSION['ID'] = $data2['idCompte'];
    }

    if ($booleantest == TRUE) {

        header('Location:index.php');
    } else {

        header('Location:connection.php');
    }
}
?>

