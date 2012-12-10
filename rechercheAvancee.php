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
                <div class="titreArticleRechercheAvancee">
                </div>
                <div class="page">

                    <form class="couleurTexte"method="post" action="traitementRA.php">
                        
                            <pre></br></br>
<label for="genre"><span>Genre :</span></label><select name="genre" id="genre">
                    <option value="soiree">Soir&eacute;e</option>
                    <option value="bar">Bar</option>
                    <option value="concert">Concert</option>
                    <option value="restauration">Restauration</option>
                    <option value="exposition">Exposition</option>
                    <option value="autre">Autre</option>
                    		</select>          <label for="ville"><span>Ville :</span></label><input type="text" name="ville" id="ville" placeholder="Ex : Paris" size="20" maxlength="15">
                     <label for="date"><span>Date :</span></label><input type="date" name="date" placeholder="JJ/MM/AAAA" id="date" size="10" maxlength="10">               <label for="heureDebut"><span>Evenement ayant lieu entre : </span></label><select name="heureDebut" id="heureDebut">
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
                    </select><label for="heureFin"> et </label><select name="heureFin" id="heureFin">
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
<label for="compare"><span>Notes </span></label><select name="compare" id="compare">
                    	<option value="egalplus">&#8805;</option>
                    	<option value="plus"></option>
                    	<option value="egal">=</option>
                    	<option value="moinsegal">&#8804;</option>
                    	<option value="moins"><</option>
                    </select><label for="note"> &agrave; </label><select name="note" id="note"">
                                            <option value="moins"> 0 </option>
                    	<option value="0">0</option>
                    	<option value="1">1</option>
                    	<option value="2">2</option>
                    	<option value="3">3</option>
                    	<option value="4">4</option>
                    	<option value="5">5</option>
                    </select><label for="prix">	<span>Prix :</span> </label><input type="range" name="prix" id="prix" min="0" max="500" step="5" size="4" maxlength="3" value="0"/> <div class="inline" id="prixDiv" value="10"></div> euros
 <label for="placeDispo"><span>Place disponible : </sapn></label><input type="number" name="placeDispo" id="placeDispo" maxlength="4" size="4"/>	
                    
<input type="submit" value="Valider"/>
                    <script src="javascript1.js"></script>
                            </pre>
                       

                    </form>
                </div>
            </article>
        </section>

        <?php include("footer.php"); ?>

    </body>
</html>
