<nav class = "elementmenu" > <!-- Cadre correspondant � un sous-menu -->
    <ul>
        <li id="soiree"><a href="nav.php" ><img src ="img/ongletSoiree.png" alt="onglet" /></a></li> <!-- Liste des liens du sous-menu -->
        <li id="bar"><a href="nav.php"></a></li>
        <li id ="concert"><a href=#></a></li>
        <li id ="restauration"><a href=#></a></li>
        <li id  ="spectacle"><a href ="event.php?onglet=spectacle">test</a></li>
        <li id ="autre"><a href=creationEvenement.php>Cre&acute;ation Evenement</a></li>
    </ul>
</nav>
<?php
        if (!empty($_SESSION['ID'])) {
            include("navConnect.php");
        } else {
            include("navNonConnect.php");
        }
  ?>      