<?php

session_start();

if (isset($_SESSION['SWITCH'])) {
    echo $_SESSION['SWITCH'];
    if ($_SESSION['SWITCH'] == "organisateur") {
        $_SESSION['SWITCH'] = "participant";
    } else {
        $_SESSION['SWITCH'] = "organisateur";
    }
    echo $_SESSION['SWITCH'];


    header('Location:index.php');
}
header('Location:index.php');
?>
