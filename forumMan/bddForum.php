
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=forumman', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
