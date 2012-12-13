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

                <?php 
                if(isset($_SESSION['ID'])){
                include("connexion.php"); 
                }
                ?>

            </aside>
            <aside class ="navg">
                <?php include ("arbre.php"); ?>
            </aside>
            <article>
                <div class="titreArticleInscription">
                </div>


                <form class="aa" action="toto.php" method="post" >

                    <fieldset class="ab">
                        <legend class="ac"> A propos des CSS : </legend>
                        <p>Savez-vous ce que veut dire CSS ? : </p>
                        <input type="radio" name="CSS" value="oui" id="oui"
                               checked="checked" />
                        <label class="ad" for="oui" class="inline">oui</label>
                        <input type="radio" name="CSS" value="non" id="non" />
                        <label class="ad" for="non" class="inline">non</label>

                        <label class="ad" for="utilise">Si oui, les utilisez-vous plutôt : </label>
                        <select name="utilise" id="utilise">
                            <option value="toujours"> toujours</option>
                            <option value="parfois"> parfois</option>
                            <option value="jamais"> jamais</option>
                        </select>
                    </fieldset>

                    <fieldset class="ab">
                        <legend class="ac">Vos coordonnées :</legend>
                        <label class="ad" for="email">Votre email :</label>
                        <input type="text" name="email" size="20" 
                               maxlength="40" value="email" id="email" />

                        <label class="ad" for="comments">Vos commentaires :</label>
                        <textarea name="comments" id="comments" cols="20" rows="4">
                        </textarea>
                    </fieldset>

                    <p>
                        <input type="submit" value="Envoyer" />
                        <input type="reset" value="Annuler" />
                    </p>

                </form>

               <!-- <div class="page">

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

                </div>-->

            </article>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>
