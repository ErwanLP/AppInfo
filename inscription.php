<?php session_start(); ?>
<?php include("start.php"); ?>




<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<section>
    <aside class ="new">
        <div class ="eventNew">
            <img class ="photonew" src ="img/new.jpg"/>
        </div>

        <?php
        if (!isset($_SESSION['ID'])) {
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


        <form class="contenuInscription" action="traitementInscription.php" method="post" >
            <fieldset class="fieldset">
                <legend class="titreInscription"><p style="text-align:center;"> Inscription </p></legend>
                <p> <span>*</span> Nom de compte : </p>
                <input type="text" size="20" name="nomDeCompte" maxlength="40" id="nomDeCompte" autofocus required />
                <p> <span>*</span> Votre mot de passe : </p>
                <input type="password" size="20" name="mdp" maxlength="40" id="mdp" required />
                <p> <span>*</span> Confirmer mot de passe : </p>
                <input type="password" size="20" name="mdp2" maxlength="40" id="mdp2" required />
                <p> <span>*</span> Votre adresse email : </p>
                <input type="email" size="20" name="mailCompte" placeholder="exemple@operateur.com" maxlength="40" id="mailCompte" required />
                <p>
                    <input type="submit" value="Envoyer" />
                    <input type="reset" value="Effacer" />
                </p>
            </fieldset>
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
