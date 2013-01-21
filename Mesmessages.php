<?php include("profil.php"); ?>
<div class="menuParametres">
<h1>Configurer</h1>
    <ul id="menuParametre">
            <li class="menuParametre"><a  href="Infoparticipant.php" title="Mon compte" onclick="window.open(this.href); return false;"><img src="img/boutonMonCompteArr.png" /></a></li>                         
            <li><a class="menuParametre" href="parametreprofil.php" title="Mon profil" onclick="window.open(this.href); return false;"><img src="img/boutonMonProfilArr.png" /></a></li>
                   <ul>
                                         <li ><a href="parametreprofil.php" title="Paramétres" onclick="window.open(this.href); return false;"><img src="img/boutonParametres.png" /></a></li>
                                         <li><a href="Mesmessages.php" title="Messagerie/Alertes" onclick="window.open(this.href); return false;"><img src="img/boutonMessagerieAlerte.png" /></a></li>
                                      </ul>
            <li><a class="menuParametre" href="Mes_amis.php" title="Mes amis" onclick="window.open(this.href); return false;"><img src="img/boutonMesAmisArr.png" /></a></li>
            <li><a class="menuParametre" href="Live.php" title="Live" onclick="window.open(this.href); return false;"><img src="img/boutonLivesArr.png" /></a></li>            

                </ul>
</div>



<div class="titreParametre ">
<h2>Ma Messagerie</h2>
</div>
<form>
<fieldset class="rollin3">
        <legend class="h2"><span>Ma messagerie/Alertes</span></legend>
        <div>        
         <p class="bloc"><em>Qui peut m'écrire ou m'envoyer un message ?</em></p>
            <div class="profil radio-checkbox">
                <input type="radio" name="messages_prive" id="tous_messages" value="0"  />
                <label for="tous_messages">Tous les utilisateurs
</label>
            </div>
            <div class="profil radio-checkbox">
                <input type="radio" name="messages_prive" id="tous_amis_message" value="1" checked="checked"/>
                <label for="tous_amis_message">Seulement mes amis</label>
            </div>
            <div class="profil radio-checkbox">
                <input type="radio" name="messages_prive" id="aucun_messages" value="2"  />
                <label for="aucun_messages">Personne <strong>(désactiver ma messagerie)</strong></label>
            </div>
        </div>
      
            <div class="profil radio-checkbox">
                         <input type="button" onClick="modification_3()" value="Envoyer">
                         <input type="reset" value="Effacer">
                         </div>
    </fieldset>
    </form>
    <fieldset class="rollin4">
	
                <legend class="h2"><span>Infos et alertes</span></legend>
		<div>         		
		<p class="clear_bloc row radio-checkbox important" id="option_alertes">
                    <label for="option_persoinfo_recherche" id="lbl_recherche" onclick="showSearchAlert(document.getElementById('option_persoinfo_recherche').checked)">Je souhaite suivre les utilisateurs de Doyouevents gr&acirc;ce &agrave; mon email, &agrave; mon nom ou &agrave; mon pr&eacute;nom.</label><br />
                     
            <input value="1" type="radio" id="option_persoinfo_recherche" name="option_persoinfo_recherche" onclick="showSearchAlert(true)" />
            <label for="optin_persoinfo_recherche">Oui</label>
            <input value="0" type="radio" id="option_persoinfo_pas_recherche" name="option_persoinfo_recherche" onclick="showSearchAlert(false)"  />
            <label for="option_persoinfo_pas_recherche">Non</label>
        </p>
        <p>
            <em>Pour aider tes amis à te retrouver plus facilement sur Doyouevents indique « oui» et valide ton changement.</em>
        </p>        
                <p>
            <span class="profil radio-checkbox">
                <input value="1" type="checkbox" id="information" name="informationmail" class="checkbox" checked="checked"/>
                <label for="information">Je souhaite être inform&eacute; par email des informations de Doyouevents (Nouveaut&eacute;s, bons plans...)</label><br />
            </span>
            <span class="profil radio-checkbox">
                <input value="1" type="checkbox" id="recommandation" name="recommandationmail" class="checkbox" checked="checked"/>
                <label for="recommandation">Je souhaite &ecirc;tre inform&eacute; par email lorsque ma note devient faible</label><br />
            </span>
           
           
        </p>
        </div>
	</fieldset>
    
    
 <script>



function modification_3() {
 if (confirm('Voulez vous enregistrer vos modifications, cliquez sur "OK" si c\'est le cas.')) {
    alert('Les modifications ont été enregistrés.');
	myForm = document.getElementById("personalData");
        myForm .submit();

}
else {
    alert("Aucune modification a été enregistré.");
}
}
</script>
