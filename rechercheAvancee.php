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
                    <h2><span style="color:#2040c0;"> Recherche avanc&eacute;e </span></h2>
                </div>
                <div class="page">
                    <form class="contenuRA" action="traitementRA.php" method="post" >
                        <fieldset class="fieldsetRA">
                            <!--<legend class="titreRA"><p style="text-align:center;"> Recherche Avancée </p></legend>-->
                            <label for="genre"> Genre : </label><select name="genre" id="genre">
                                <option value="soiree">Soir&eacute;e</option>
                                <option value="bar">Bar</option>
                                <option value="concert">Concert</option>
                                <option value="restauration">Restauration</option>
                                <option value="exposition">Exposition</option>
                                <option value="autre">Autre</option>
                            </select>
                            <label style="padding-left:30px;" for="ville"> Ville : </label><input type="text" name="ville" id="ville" placeholder="Ex : Paris" size="23" maxlength="20"><br/><br/>
                            <label style="color:#ff6040;text-decoration:underline;"for="heureDebut"> Tranche horaire : </label><br/><br/>
                            <label style="padding-right:5px;"> D&eacute;but : </label><select name="heureDebut" id="heureDebut">
                                <option value="0">00h</option>
                                <option value="1">01h</option>
                                <option value="2">02h</option>
                                <option value="3">03h</option>
                                <option value="4">04h</option>
                                <option value="5">05h</option>
                                <option value="6">06h</option>
                                <option value="7">07h</option>
                                <option value="8">08h</option>
                                <option value="9">09h</option>
                                <option value="10">10h</option>
                                <option value="11">11h</option>
                                <option value="12">12h</option>
                                <option value="13">13h</option>
                                <option value="14">14h</option>
                                <option value="15">15h</option>
                                <option value="16">16h</option>
                                <option value="17">17h</option>
                                <option value="18">18h</option>
                                <option value="19">19h</option>
                                <option value="20">20h</option>
                                <option value="21">21h</option>
                                <option value="22">22h</option>
                                <option value="23">23h</option>
                            </select>
                            <label style="padding-left:30px;"for="heureFin"> Fin : </label><select name="heureFin" id="heureFin">
                                <option value="0">00h</option>
                                <option value="1">01h</option>
                                <option value="2">02h</option>
                                <option value="3">03h</option>
                                <option value="4">04h</option>
                                <option value="5">05h</option>
                                <option value="6">06h</option>
                                <option value="7">07h</option>
                                <option value="8">08h</option>
                                <option value="9">09h</option>
                                <option value="10">10h</option>
                                <option value="11">11h</option>
                                <option value="12">12h</option>
                                <option value="13">13h</option>
                                <option value="14">14h</option>
                                <option value="15">15h</option>
                                <option value="16">16h</option>
                                <option value="17">17h</option>
                                <option value="18">18h</option>
                                <option value="19">19h</option>
                                <option value="20">20h</option>
                                <option value="21">21h</option>
                                <option value="22">22h</option>
                                <option value="23">23h</option>
                            </select><br/><br/>
                            <label style="color:#ff6040;text-decoration:underline;" for="date"> Date : </label><br/><br/><input type="date" name="date" placeholder="JJ/MM/AAAA" id="date" size="10" maxlength="10"><br/><br/>
                            <label style="padding-right:5px;margin-left:20px;" for="prix"> Prix :</label><input type="range" name="prix" id="prix" min="0" max="500" step="5" size="4" maxlength="4" placeholder="0"/> <div class="inline" id="prixDiv" value="10"></div> euros
                            <label style="margin-left:30px;"for="placeDispo"> Place(s) disponible(s) :</label>
                            <input type="number" name="placeDispo" id="placeDispo" maxlength="5" size="4"/><br/><br/>
                            <input type="submit" value="Envoyer" />
                            <input type="reset" value="Effacer" />
                            </p>
                        </fieldset>
                    </form>
                </div>
            </article>
        </section>

        <?php include("footer.php"); ?>

