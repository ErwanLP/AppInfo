<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
             <link rel="stylesheet" href="index.css" />
             <link rel="stylesheet" href="forumMan.css" />
            
             <link rel="shortcut icon" type="image/x-icon" href="img/icone.png" />
             <link rel="stylesheet" href="assets/css/styles.css" />
<?php
if (!empty($titre)) {
    echo '<title>'.$titre.'</title>';
}
 else {
    echo '<title>forum</title>';
}
?>
    </head>

