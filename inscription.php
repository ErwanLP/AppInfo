<?php session_start(); ?>
<?php include("start.php"); ?>

<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<section>
    <aside class ="new">
        <?php include('nouveauteEvenement.php'); ?>

        <?php
        if (!isset($_SESSION['ID'])) {
            include("connexion.php");
        }

        if (isset($_GET['valider'])) {
            $valeurInscription = $_GET['valider'];
            if ($valeurInscription == 0) {
                ?>

                <div class="positionMessageInscription">
                    <h2><strong style="font-size: 20px;">INSCRIPTION IMPOSSIBLE :</strong><br/>le compte existe d&eacute;j&agrave; ou le mot de passe est incorrect!</h2>
                </div>

            <?php }
        } ?>
        
    </aside>
    <aside class ="navg">
<?php include ("arbre.php"); ?>
    </aside>
    <article>

        <form class="contenuInscription" action="traitementInscription.php" method="post" >
            <fieldset class="fieldset">
                <legend class="titreInscription"><p style="text-align:center;"> Inscription </p></legend>
                <p> <span>*</span> Nom de compte : </p>
                <input type="text" size="20" name="nomDeCompte" maxlength="40" id="nomDeCompte" autofocus required />
                <p> <span>*</span> Votre mot de passe : </p>
                <input type="password" size="20" name="mdp" title="Le mot de passe doit comporter au moins 6 caractères dont une Majuscule et un chiffre" maxlength="40" id="mdp" required />
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

    </article>
</section>

<?php include("footer.php"); ?>
