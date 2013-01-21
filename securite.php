

    <?php include("start.php"); ?>
   
        <?php session_start(); ?>
        <?php include("BDD.php"); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>

        <section>
            <article>
                <div class="titreacticle">
                    <h2><span> Cr&eacute;ation &Eacute;v&eacute;nement :</span></h2>
                </div>
                <div class="page">

                    <form method="post" action="traitementsecurite.php">

                        <fieldset>

                            <label for="description">Description de l'&Eacute;v&eacute;nement:</label><br />
                            <textarea name="description" id="description" >Comment va se passer l'&Eacute;v&eacute;nement...</textarea><br/>

                        </fieldset>

                        <input type="submit" value="Envoyer" />
                    </form>

                </div>
            </article>
            <?php include("aside.php"); ?>
        </section>

        <?php include("footer.php"); ?>
