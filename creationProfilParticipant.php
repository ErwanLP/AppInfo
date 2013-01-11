<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>
        <?php session_start(); ?>
        <?php include("BDD.php"); ?>

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
                if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
                    ?>
                    <div class="positionBouton">
                        <a href="creationEvenement.php"><img src ="img/ampouleCreerEvenement.png"/></a>
                    </div>
                    <?php
                }
                ?>

            </aside>
            <aside class ="navg">
                <?php include ("arbre.php"); ?>
            </aside>
            <article>
                <div id="titreacticle">
                    <h2><span style="color:#2040c0;"> Cr&eacute;ation du profil participant</span></h2>
                    <p style="margin-top:10px;"> Actuellement, vous ne disposez pas de profil participant. Nous vous invitons à remplir les champs suivants :</p>
                </div>
                <div id="page">
                    <form class="contenuCPP" method="post" action="traitement.php">
                        <fieldset class="fieldsetCPP">
                            <legend class="titreCPP"><p style="text-align:center;"> Informations Personnelles </p></legend>
                            <label for="nom"> <span>*</span> Votre nom : </label></br></br>
                            <input type="text" name="nom" id="nom" size="23" maxlength="20"></br></br>
                            <label for="prenom"> <span>*</span> Votre pr&eacute;nom : </label></br></br>
                            <input type="text" name="prenom" id="prenom" size="23" maxlength="20"></br></br>
                            <label for="pseudo"> <span>*</span> Votre pseudo : </label></br></br>
                            <input type="text" name="pseudo" id="pseudo" size="23" maxlength="20"></br></br>
                            <label for="sexe"> <span>*</span> Votre sexe : </br></br>
                            <input type="radio" name="personne" value="Homme" id="homme" /> <label for="homme"> Homme</label><br />
                            <input style="margin-right:4px;"type="radio" name="personne" value="Femme" id="femme" /> <label style="margin-right:5px;"for="femme">Femme</label><br /><br />
                            <label for="date"> Votre date de naissance :</label></br></br>
                            <input type="date" name="date" id="date" size="23" maxlength="20"/><br/></br>
                            <label for="lieuNaissance"> Votre lieu de naissance : </label></br></br>
                            <input type="text" name="lieuNaissance" id="lieuNaissance" size="23" maxlength="20"></br></br>
                            <label for="url"> Votre numero de telephone :</label></br></br>
                            <input type="tel" name="tel" id="tel" size="23" maxlength="20"/><br/></br>
                            <label for="url"> Votre site web : </label></br></br>
                            <input type="url" name="url" id="url" size="40" maxlength="40"/><br/></br>
                            <label for="pays"> <span>*</span> Dans quel pays habitez-vous ? </label></br></br>
                            <select name="pays" id="pays">
                                <optgroup label="Europe">
                                    <option value="france">France</option>
                                    <option value="espagne">Espagne</option>
                                    <option value="italie">Italie</option>
                                    <option value="royaume-uni">Royaume-Uni</option>
                                </optgroup>
                                <optgroup label="Am&eacute;rique">
                                    <option value="canada">Canada</option>
                                    <option value="etats-unis">Etats-Unis</option>
                                </optgroup>
                                <optgroup label="Asie">
                                    <option value="chine">Chine</option>
                                    <option value="japon">Japon</option>
                                </optgroup>
                            </select></br></br>
                            <label for="description"> Votre Description:</label></br></br>
                            <textarea class="tailleDescription" name="description" id="description" size="200" maxlength="800"></textarea><br/></br>
                            <input type="submit" value="Cr&eacute;er" />
                            <input type="reset" value="Effacer" />
                        </fieldset>
                        <!--<fieldset>
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
                        </fieldset>-->

                        
                    </form>
                </div>
            </article>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>