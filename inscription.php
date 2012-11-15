<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>

        <?php session_start(); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>

        <section>
            <article>
                <div class="titreacticle">
                    <h2><span> Inscription</span></h2>
                </div>
                <div class="page">

                    <form class="center" method="post" action="traitementInscription.php">                       
                        <pre>
                        <label for ="nomDeCompte">Nom de compte:</label>
                        <input type="text" name="nomDeCompte" id="nomDeCompte"  size="30" maxlength="20" autofocus required/><br/>

                        <label for="mdp">Votre mot de passe :</label>
                        <input type="password" name="mdp" id="mdp" required/><br/>

                        <label for="mdp2">Retaper mot de passe :</label>
                        <input type="password" name="mdp2" id="mdp2" required/><br/>

                        <label for="mailCompte">Votre email :</label>
                        <input type="email" name="mailCompte" id="mailCompte" value="exemple@gmail.com" required/><br/>

                        <input type="submit" value="Envoyer" />
                        </pre>

                    </form>

                </div>
            </article>
            <?php include("aside.php"); ?>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>