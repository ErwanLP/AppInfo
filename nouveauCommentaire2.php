<?php
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
$id_top=$_POST['id_topic'];
$pseud=$_POST['pseudo'];
$msg=$_POST['message'];
echo $id_top;
echo $pseud;
echo $msg;
?>
