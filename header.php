<div id ="ID">
    <?php
    if (!empty($_SESSION['ID'])) {
        echo "connecté";
        echo $_SESSION['ID'];
        if (!empty($_SESSION['SWITCH'])) {
            echo $_SESSION['SWITCH'];
        }
    } else {

        echo "non connecté";
    }
    ?>
</div>