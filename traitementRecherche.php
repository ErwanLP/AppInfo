<?php
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
//connection à la base de données
$CDC = $_POST['recherche'];
//la variable recherche importée par méthode post est mise dans la variable CDC
$pieces = explode(" ", $CDC);
//la chaine qui est une suite de mots séparés par des espaces est divisée en mots qui sont placés dans le tableau pieces
$long = count($pieces);
// on compte le nombre de mots/cases du tableau
$requete = "WHERE";
//début de la requête
for ($i = 0; $i < $long; $i++) {
    //début de la boucle du 1er au dernier mots de la chaine de caractères

    $requetei = ' (nom LIKE ' . "'" . '%' . $pieces[$i] . '%' . "'" . ' or lieu LIKE ' . "'" . '%' . $pieces[$i] . '%' . "')";
    /* on regarde si un mot de la chaine de caractères est un nom d'event ou un lieu d'event */
// on rajoute une extention a la requête



    if ($i > 0) {

        $requete = $requete . ' and ';
        //si on n'est plus au 1er passage de la boucle on est obliger de rajouter "and"
    }
    $requete = $requete . $requetei;
    //si on est au premier passage de la boucle
}


echo 'SELECT * FROM event ' . $requete;
//on affiche la requête en entière (pour verifier les erreurs)
?><br/><?php
//retour à la ligne

$result = $bdd->query('SELECT * FROM event ' . $requete);
//envois de la requete sql

while ($data = $result->fetch()) {
    //boucle qui affiche les résultats
    echo $data['nom'];
    ?><br/><?php
}
$result->closeCursor();
$result = null;
// on ferme le curseur
?>




<!--if (($pieces[$i] != "le") || ($pieces[$i] != "la") || ($pieces[$i] != "les") || ($pieces[$i] != " ") || ($pieces[$i] != "de") || ($pieces[$i] != "du") || ($pieces[$i] != "des") || ($pieces[$i] != "au") || ($pieces[$i] != "evenement") || ($pieces[$i] != "soiree")) { // faire un fichier php avec un tableau avec tout les mot bidon 



// faire un fichier php avec un tableau avec tout les mots non voulus 

-->


