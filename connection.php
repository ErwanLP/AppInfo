<!DOCTYPE html>
<html>

    <?php include("head.php"); ?>

    <body>

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
                <div class="titreArticleConnexion">
                </div>
                <div class="page">

                    <form class="connec" method="post" action="traitementConnection3.php">
                        <pre>
                            <label for ="nomDeCompte">Nom de compte:</label>
                            <input type="text" name="nomDeCompte" id="nomDeCompte"  size="20" maxlength="15" autofocus required/><br/>

                            <label for="mdp">Votre mot de passe :</label>
                            <input type="password" name="mdp" id="mdp" required/><br/>
                         Se connecter en tant que :<br/>
                              <label for="participant">Participant  </label><input type="radio" name="profil" value="participant" id="participant" checked/> 
                              <label for="organisateur">Organisateur </label><input type="radio" name="profil" value="organisateur" id="organisateur" /> 
                                                  <p><a href="">Mot de passe oublié</a></p>
                            <input style="position:relative;left:35px;" type="submit" value="Envoyer" />
                        </pre>
                    </form>

                </div>
            </article>
        </section>

        <?php include("footer.php"); ?>
    </body>
</html>