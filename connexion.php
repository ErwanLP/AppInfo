<div class="connec" >
    <form method="post" action="traitementConnection3.php">
        <h2>Connectez-vous !</h2>
        <p><label style="padding-right:19px;" for ="nomDeCompte">Nom de compte :</label> <input type="text" name="nomDeCompte" id="nomDeCompte"  size="20" maxlength="15" autofocus required/></p>
        <p><label for="mdp">Votre mot de passe :</label> <input type="password" name="mdp" id="mdp" required/></p>
        <!--<p>Se connecter en tant que :</p>-->
        <p style="padding-left: 90px;"><label for="participant">Participant  </label><input type="radio" name="profil" value="participant" id="participant" checked/><label style="padding-left:15px;" for="organisateur">Organisateur </label><input type="radio" name="profil" value="organisateur" id="organisateur" /></p>
        <p style="padding-left:20px;"><a href="">Mot de passe oublié</a><a style="padding-left:120px;" href="inscription.php">Pas encore inscrit</a></p>
        <input style="position:absolute;margin-left:165px;top:185px;" type="submit" value="Connexion" />
    </form>
</div>