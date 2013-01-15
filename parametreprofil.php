<!DOCTYPE html>
<?php include("profil.php"); ?>
<html>
<head>
<title>Mes paramétres profil</title>
<link rel="stylesheet" href="test2.css">
</head>
<body>


<div class="menuParametres">
<h1>Configurer</h1>
    <ul id="menuParametre">
            <li><a class="menuParametre" href="Infoparticipant.php" title="Mon compte"><img src="img/boutonMonCompteArr.png" /></a></li>                         
            <li><a class="menuParametre" href="parametreprofil.php" title="Mon profil"><img src="img/boutonMonProfilArr.png" /></a></li>
                   <ul>
                                         <li ><a href="parametreprofil.php" title="Paramétres"><img src="img/boutonParametres.png" /></a></li>
                                         <li><a href="Mesmessages.php" title="Messagerie/Alertes"><img src="img/boutonMessagerieAlerte.png" /></a></li>
                                      </ul>
            <li><a class="menuParametre" href="Mes_amis.php" title="Mes amis"><img src="img/boutonMesAmisArr.png" /></a></li>
            <li><a class="menuParametre" href="Live.php" title="Live"><img src="img/boutonLivesArr.png" /></a></li>            

                </ul>
</div>


<div class="titreParametre ">
<h2>Mon profil</h2>
</div>

<form>
<fieldset class="rollin2">

<fieldset class="rollin">
            <legend class="h2"><span>Accès profil :</span></legend>
            <div>             <p class="bloc"><em>Qui peut accéder à mon profil ?</em></p>
            <div class="profil radio-checkbox">
                <input class="radio" type="radio" id="tous" name="consultation_profil" value="0" checked="checked"/>
                <label for="tous">Tous les utilisateurs</label>
            </div>
            <div class="profil radio-checkbox">
                <input class="radio" type="radio" id="seulement_profil_Doyouevent" name="consultation_profil" value="1" />
                <label for="seulement_profil_Doyouevent">Tous les utilisateurs connectés sur Doyouevent</label>
            </div>
            <div class="profil radio-checkbox">
                <input class="radio" type="radio" id="seulement_profil_amis" name="consultation_profil" value="2" />
                <label for="seulement_profil_amis">Mes amis seulement</label>
            </div>
                        </div>
        </fieldset>

        <fieldset class="rollin">
            <legend class="h2"><span>Mes commentaires profil :</span></legend>
        <div>         
        <div class= "profil radio-checkbox">
            <input type="checkbox" name="commentaire_profil" id="profilCommentaire" value="1" checked="checked" />
            <label for="profilCommentaire"><strong>Activer les commentaires sur mon profil</strong></label>
        </div>
        <div id="Commentaire_profil">
            <p class="bloc"><em>Qui peut me laisser un commentaire ?</em></p>
            <div class="profil radio-checkbox">
                <input type="radio" id="commentaire_par_tous" name="commentaire_profil" 
                    value="tous" checked="checked"/>
                <label for="commentaire_par_tous">Tous les utilisateurs inscrits</label>
            </div>
            <div class="profil radio-checkbox">
                <input type="radio" id="commentaire_par_amis" name="commentaire_profil" 
                value="amis" />
                <label for="commentaire_par_amis">Seulement mes amis</label>
            </div>
        </div>
        </div>
        </fieldset>

<fieldset class="rollin">
   <legend class="h2"><span>A propos de moi :</span></legend>
       
                        <div class="profil radio-checkbox ">
                        <label class="col_third floatleft" for="Description"></label> 
                        <p>Description:</p><textarea name="Description" cols=60 rows=15>
                        </textarea>
                        </div>

                         <div class="profil radio-checkbox">
                         <input type="button" onClick="modification_2()" value="Envoyer">
                         <input type="reset" value="Effacer">
                         </div>
</fieldset>

</fieldset>
</form>

<script>

//var modification_2

function modification_2() {
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
</body>
</html>