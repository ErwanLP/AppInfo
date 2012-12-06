<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>

        <?php session_start(); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>

        <section>
            <aside class ="new">
            
                <div class ="eventNew">
    <img class ="photonew" src ="img/new.jpg"/>
                </div>
            </aside>
            <aside class ="navg">
                <?php include ("arbre.php"); ?>
            </aside>
            <article>
                <div class="titreArticleInscription">
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
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>