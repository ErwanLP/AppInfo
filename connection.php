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

                <div id="formContainer">
                    <form id="login" method="post" action="./">
                        <a href="#" id="flipToRecover" class="flipLink">Forgot?</a>
                        <input type="text" name="loginEmail" id="loginEmail" placeholder="Email" />
                        <input type="password" name="loginPass" id="loginPass" placeholder="Password" />
                        <input type="submit" name="submit" value="Login" />
                    </form>
                    <form id="recover" method="post" action="./">
                        <a href="#" id="flipToLogin" class="flipLink">Forgot?</a>
                        <input type="text" name="recoverEmail" id="recoverEmail" placeholder="Your Email" />
                        <input type="submit" name="submit" value="Recover" />
                    </form>
                </div>

















                <!--<div class="page">

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

                </div>-->
            </article>
        </section>

        <?php include("footer.php"); ?>
        <script type="text/javascript">
            $(function(){
	 
                // Checking for CSS 3D transformation support
                $.support.css3d = supportsCSS3D();
	 
                var formContainer = $('#formContainer');
	 
                // Listening for clicks on the ribbon links
                $('.flipLink').click(function(e){
 
                    // Flipping the forms
                    formContainer.toggleClass('flipped');
	 
                    // If there is no CSS3 3D support, simply
                    // hide the login form (exposing the recover one)
                    if(!$.support.css3d){
                        $('#login').toggle();
                    }
                    e.preventDefault();
                });
	 
                formContainer.find('form').submit(function(e){
                    // Preventing form submissions. If you implement
                    // a backend, you will want to remove this code
                    e.preventDefault();
                });
	 
                // A helper function that checks for the
                // support of the 3D CSS3 transformations.
                function supportsCSS3D() {
                    var props = [
                        'perspectiveProperty', 'WebkitPerspective', 'MozPerspective'
                    ], testDom = document.createElement('a');
	 
                    for(var i=0; i<props.length; i++){
                        if(props[i] in testDom.style){
                            return true;
                        }
                    }

                    return false;
                }
            });
        </script>

    </body>
</html>