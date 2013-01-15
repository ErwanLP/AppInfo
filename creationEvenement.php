<!DOCTYPE html>

<?php if (true) { ?>


    <html>
        <?php include("head.php");
        include("vue.creationEvenement");
        $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', ''); ?>
        <body>

    <?php session_start(); ?>


            <?php include("header.php"); ?>

    <?php include("nav.php"); ?>

            <section>
                <aside class ="new">
                    <div class ="eventNew">
                        <img class ="photonew" src ="img/new.jpg"/>
                    </div>

                    <?php
                    if (!isset($_SESSION['ID'])) {
                        include("connexion.php");
                    }
                    if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
                        ?>
                        <div class="positionBouton">
                            <a href="creationEvenement.php"><img src ="img/BoutonCreerEvent.png"/></a>
                        </div>
                        <?php
                    }
                    ?>

                </aside>
                <aside class ="navg">
    <?php include ("arbre.php"); ?>
                </aside>
                <article>
                    <?php
                    $lang = 'en';
titreFormEvent($lang);
$theme = $bdd->query('SELECT * FROM theme');
$lang = 'en';
formDebEvent($lang);
//print_r($theme);
while ($donnees = $theme->fetch()) {
    formMidThEvent($lang, $donnees);
    $soustheme = $bdd->query('SELECT * FROM soustheme WHERE soustheme.id_theme="'.$donnees['ID'].'"');
    while ($donnees2 = $soustheme->fetch()) {
        formMidSThEvent($lang, $donnees2);
    }$soustheme->closeCursor();
    formMidFEvent();
}$theme->closeCursor();
formFinEvent($lang);
?>

                </article>

            </section>

    <?php include("footer.php"); ?>


        </body>
    </html>

    <?php
} else {
    header('Location:index.php');
}
?>
