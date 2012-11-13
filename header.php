<header>
    <h1><span>Do You Events !</span></h1>
</header>
<div id ="ID">
    <?php
    if (!empty($_SESSION['ID'])) {
        echo "connecté";
        echo $_SESSION['ID'];
    } else {

        echo "non connecté";
    }

    ?>
</div>