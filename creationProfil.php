<!DOCTYPE html>
<html>
  <?php include("head.php"); ?>
    <body>

        <?php include("BDD.php"); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>

        <section>
            <article>
                <div id="titreacticle">
                    <h2><span> Cr&eacute;ation Profil</span></h2>
                </div>
                <div id="page">

                    <form method="post" action="traitement.php">

                        <fieldset>
                            <legend>Information Personnelle</legend>
                            <label for ="nom">Votre nom:</label>
                            <input type="text" name="nom" id="nom"  size="30" maxlength="10" autofocus required/><br/>
                            <label for ="pseudo">Votre Prenom:</label>
                            <input type="text" name="prenom" id="prenom"  size="30" maxlength="10" /><br/>
                            <label for ="pseudo">Votre Pseudo:</label>
                            <input type="text" name="pseudo" id="pseudo"  size="30" maxlength="10" /><br/>
                            <label for="pass">Votre mot de passe :</label>
                            <input type="password" name="pass" id="pass" /><br/>
                            <label for ="pseudo">Votre Lieu de naissance:</label>
                            <input type="text" name="lieuNaissance" id="lieuNaissance"  size="30" maxlength="10" /><br/>
                            <label for="description">Votre Description:</label><br />
                            <textarea name="description" id="description">Mes centres d'interet, ect</textarea><br/>
                            <label for="email">Votre email :</label>
                            <input type="email" name="email" id="email" value="exemple@gmail.com" /><br/>
                            <label for="url">Votre site web :</label>
                            <input type="url" name="url" id="url"/><br/>
                            <label for="url">Votre numero de telephone :</label>
                            <input type="tel" name="tel" id="tel"/><br/>
                            <label for="date">Votre date de naissance :</label>
                            <input type="date" name="date" id="date"/><br/>
                            <label for="pays">Dans quel pays habitez-vous ?</label><br />
                            <select name="pays" id="pays">
                                <optgroup label="Europe">
                                    <option value="france">France</option>
                                    <option value="espagne">Espagne</option>
                                    <option value="italie">Italie</option>
                                    <option value="royaume-uni">Royaume-Uni</option>
                                </optgroup>
                                <optgroup label="Am�rique">
                                    <option value="canada">Canada</option>
                                    <option value="etats-unis">Etats-Unis</option>
                                </optgroup>
                                <optgroup label="Asie">
                                    <option value="chine">Chine</option>
                                    <option value="japon">Japon</option>
                                </optgroup>
                            </select>
                        </fieldset>
                        <fieldset>
                            <legend>Preference:</legend>
                            <p>Quel type d &eacute;v&egrave;nement pr&eacute;f&eacute;rer vous ? :<br />
                                <input type="checkbox" name="crome" id="crome" checked/> <label for="crome">Soir&eacute;e</label><br />
                                <input type="checkbox" name="mozilla" id="mozilla" /> <label for="mozilla">Concert</label><br />
                                <input type="checkbox" name="IE" id="IE" /> <label for="IE">Bar</label><br />
                                <input type="checkbox" name="safari" id="safari" /> <label for="safari">Restauration</label><br/>
                                <input type="checkbox" name="opera" id="opera" /> <label for="opera">Spectacle</label><br />
                                <input type="checkbox" name="autre" id="autre" /> <label for="safari">Exposition</label>
                            </p>
                            <p>	Votre sexe :<br /> 
                                <input type="radio" name="personne" value="etudiant" id="homme" /> <label for="homme">Homme</label><br />
                                <input type="radio" name="personne" value="etudiantisep" id="femme" /> <label for="femme">Femme</label><br />

                            </p>
                        </fieldset>

                        <input type="submit" value="Envoyer" />
                    </form>

                </div>
            </article>
            <?php include("aside.php"); ?>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>