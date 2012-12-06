
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>

        <?php session_start(); ?>
        <?php include("BDD.php"); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>

        <section>
            <article>
                <div class="titreacticle">
                    <h2><span> Cr&eacute;ation &Eacute;v&egrave;nement :</span></h2>
                </div>
                <div class="page">

                    <form method="post" action="traitementsecurite.php">

                        <fieldset>

                            <label for="description">Description Event:</label><br />
                            <textarea name="description" id="description" >Comment va se passer l'Evenement...</textarea><br/>

                        </fieldset>

                        <input type="submit" value="Envoyer" />
                    </form>

                </div>
            </article>
            <?php include("aside.php"); ?>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>