<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <link rel="stylesheet" media="screen, print, handheld" type="text/css" href="index.css" />
        <link rel="shortcut icon" type="image/x-icon" href="img/icone.png" />
        <link rel="stylesheet" href="assets/css/styles.css" />
       
        <link rel="stylesheet" href="parametre.css">
       

        <link rel="shortcut icon" type="image/x-icon" href="img/dye_logo.jpg" />
        <link rel="stylesheet" media="screen, print, handheld" href="assets/css/styles.css" />
        <?php
        if (!empty($titre)) {
            echo '<title>' . $titre . '</title>';
        } else {
            echo '<title>Do You Events</title>';
        }
        ?>
        <?php header('Content-Type: text/html; charset=utf-8'); ?>       
    </head>
    <body>
