<?php

$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
$idSignaleur = $_POST['IDsignaleur'];
$idMessage = $_POST['IDmessage'];
$motif = $_POST['motif'];
$adresse = $_POST['URL'];
$date = date("Y-m-d");



/*
  echo $idSignaleur;
  echo "<br/>";
  echo $idMessage;
  echo "<br/>";
  echo $motif;

 */





$sql = 'INSERT signalement (date, id_message, id_signaleur, id_motif) VALUES ("' . $date . '","' . $idMessage . '","' . $idSignaleur . '","' . $motif . '")';
$bdd->query($sql);
//echo $sql;



header('Location:'.$adresse);
?>

