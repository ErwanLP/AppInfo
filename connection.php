<!DOCTYPE html>
<html>

    <?php include("head.php"); ?>

    <body>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>
        
        <?php include("Recherche.php"); ?>

        <section>
            <article>
                <div class="titreActicleConnexion">
                    <!--<h2><span>Connection</span></h2>-->
                </div>
                <div class="page">

                    <form class="connec" method="post" action="traitementConnection3.php">
                        <pre>
                            <label for ="nomDeCompte">Nom de compte:</label>
                            <input type="text" name="nomDeCompte" id="nomDeCompte"  size="20" maxlength="15" autofocus required/><br/>

                            <label for="mdp">Votre mot de passe :</label>
                            <input type="password" name="mdp" id="mdp" required/>
                                                  <p><a href="">Mot de passe oublié</a></p>
                            <input style="position:relative;left:35px;" type="submit" value="Envoyer" />
                        </pre>
                    </form>

                </div>
            </article>
            <?php include("aside.php"); ?>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>