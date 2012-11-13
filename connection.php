<!DOCTYPE html>
<html>

  <?php include("head.php"); ?>

    <body>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>

        <section>
            <article>
                <div class="titreacticle">
                    <h2><span>Connection</span></h2>
                </div>
                <div class="page">

                    <form method="post" action="traitementConnection3.php">

                            <label for ="nomDeCompte">Nom de compte:</label>
                            <input type="text" name="nomDeCompte" id="nomDeCompte"  size="30" maxlength="10" autofocus required/><br/>

                            <label for="mdp">Votre mot de passe :</label>
                            <input type="password" name="mdp" id="mdp" required/><br/>
    
    
                        <input type="submit" value="Envoyer" />
                    </form>

                </div>
            </article>
            <?php include("aside.php"); ?>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>