<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

