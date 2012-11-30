<?php

//PARTIE SECURITE INSERTION DANS LA BDD

$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
//Connection à la base de données
$description = $_POST['description'];

$sql = 'INSERT INTO event(description) VALUES (:description)';
// On écrit la requete SQL dans la variable sql
$sth = $bdd->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//On prépare l'éxecution de la requête
$sth->execute(array(':description' => $description));
//on éxecute la requête
$red = $sth->fetchAll();




// PARTIE SECURITE AFFICHAGE DE LA BDD


$result = $bdd->query('SELECT description FROM event WHERE 1');
// requête sql
while ($data = $result->fetch()) {
    //boucle pour tout les résultats
    echo htmlspecialchars($data['description']); 
    // affichage de tout les résulats description da la base de données
    //htmlspecialchar sert à ne pas éxecuter le code à l'affichage mais juste d'écrire le code
}
?>