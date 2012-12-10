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
                <!--  <div class="page">
  
                      <form class="inscr" method="post" action="traitementInscription.php">                       
                          <pre>
                          <h1>Inscrivez-vous !</h1>
                          <label for ="nomDeCompte"><span>Nom de compte:</span></label>
                          <input style="alignment-baseline: before-edge;" type="text" name="nomDeCompte" id="nomDeCompte"  size="30" maxlength="15" autofocus required/><br/>
  
                          <label for="mdp"><span>Votre mot de passe :</span></label>
                          <input type="password" name="mdp" id="mdp" size="30" required/><br/>
  
                          <label for="mdp2"><span>Confirmer mot de passe :</span></label>
                          <input type="password" name="mdp2" id="mdp2" size="30" required/><br/>
  
                          <label for="mailCompte"><span>Votre email :</span></label>
                          <input type="email" name="mailCompte" placeholder="exemple@operateur.com" id="mailCompte" size="30"  required/><br/>
  
                          <input style="position:relative;left:50px;" type="submit" value="Envoyer" />
                          </pre>
  
                      </form>
  
                  </div> -->
                <div id="formContainer">
                    <form id="login" method="post" action="./">
                        <a href="#" id="flipToRecover" class="flipLink">Forgot?</a>
                        <input type="text" name="loginEmail" id="loginEmail" value="Email" />
                        <input type="password" name="loginPass" id="loginPass" value="pass" />
                        <input type="submit" name="submit" value="Login" />
                    </form>
                    <form id="recover" method="post" action="./">
                        <a href="#" id="flipToLogin" class="flipLink">Forgot?</a>
                        <input type="text" name="recoverEmail" id="recoverEmail" value="Email" />
                        <input type="submit" name="submit" value="Recover" />
                    </form>
                </div>
                <!-- JavaScript includes -->
                <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
                <script src="assets/js/script.js"></script>
            </article>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>