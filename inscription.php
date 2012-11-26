<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>

        <?php session_start(); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>
        
        <?php include("Recherche.php"); ?>

        <section>
            <article>
                <div class="titreArticleInscription">
                    <!--<h2><span> Inscription</span></h2>-->
                </div>
                <div class="page">

                    <form class="inscr" method="post" action="traitementInscription.php">                       
                        <pre>
                        <h1>Inscrivez-vous !</h1>
                        <label for ="nomDeCompte">Nom de compte:</label>
                        <input style="alignment-baseline: before-edge;" type="text" name="nomDeCompte" id="nomDeCompte"  size="30" maxlength="15" autofocus required/><br/>

                        <label for="mdp">Votre mot de passe :</label>
                        <input type="password" name="mdp" id="mdp" size="30" required/><br/>

                        <label for="mdp2">Confirmer mot de passe :</label>
                        <input type="password" name="mdp2" id="mdp2" size="30" required/><br/>

                        <label for="mailCompte">Votre email :</label>
                        <input type="email" name="mailCompte" placeholder="exemple@operateur.com" id="mailCompte" size="30"  required/><br/>

                        <input style="position:relative;left:50px;" type="submit" value="Envoyer" />
                        </pre>

                    </form>

                </div>
            </article>
            <?php include("aside.php"); ?>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>