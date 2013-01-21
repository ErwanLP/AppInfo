<?php if (true) { ?>



    <?php include("start.php"); ?>
    <?php include("BDD.php"); ?>
    <?php session_start(); ?>
    <?php include("vue.creationEvenement"); ?>

    <?php include("header.php"); ?>

    <?php include("nav.php"); ?>

    <section>
        <aside class ="new">
            <?php include('nouveauteEvenement.php'); ?>

            <?php
            if (!isset($_SESSION['ID'])) {
                include("connexion.php");
            }
            if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
                ?>
                <div class="positionBouton">
                    <a href="creationEvenement.php"><img src ="img/ampouleCreerEvenement.png"/></a>
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
            $lang = 'fr';
            titreFormEvent($lang);
            $theme = $bdd->query('SELECT * FROM theme');
            $lang = 'fr';
            formDebEvent($lang);
//print_r($theme);
            while ($donnees = $theme->fetch()) {
                formMidThEvent($lang, $donnees);
                $soustheme = $bdd->query('SELECT * FROM soustheme WHERE soustheme.id_theme="' . $donnees['ID'] . '"');
                while ($donnees2 = $soustheme->fetch()) {
                    formMidSThEvent($lang, $donnees2);
                }$soustheme->closeCursor();
                formMidFEvent();
            }$theme->closeCursor();
            formFinEvent($lang);
            ?>

        </article>

    </section>
    <?php
} else {
    header('Location:index.php');
}
?>
<?php include("footer.php"); ?>
