<?php
session_start();
$_SESSION['SWITCH'] = $_GET['switch'];
//echo $_GET['switch'];
//echo $_SESSION['SWITCH'];

header('Location:index.php');
?>