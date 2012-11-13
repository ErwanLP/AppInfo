<?php
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');

$description = $_POST['description'];

$sql = 'INSERT INTO event(description) VALUES (:description)';
$sth = $bdd->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute(array(':description' => $description));
$red = $sth->fetchAll();










$result = $bdd->query('SELECT description FROM event WHERE 1');
while ($data = $result->fetch()) {

   /* echo $data['description'];*/
    echo htmlspecialchars($data['description']); 
}
?>