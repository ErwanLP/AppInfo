
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', 'root'); 
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
