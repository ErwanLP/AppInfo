<?php
     session_start();
$_SESSION['ID'] = NULL;
$_SESSION['SWITCH'] = NULL;

header('Location:index.php');
?>
