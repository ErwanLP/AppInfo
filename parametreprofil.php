<!DOCTYPE html>
<?php include("profil.php"); ?>
<html>
<head>
<title>Mes paramétres profil</title>
<link rel="stylesheet" href="test2.css">
</head>
<body>

<?php include("elementmenu.php"); ?>

<?php include("sidebarleftfloatleft.php"); ?>

<div class="sidebar-left-floatleft">
<h1>Configurer</h1>
    <ul id="sidebar-accordion" class="menu-sidebar-left phylac-top-left box-gradient">
            <li class="active rollin"><a class="menu-accordion" href="Infoparticipant.php" title="Mon compte" onclick="window.open(this.href); return false;"><img src="img/boutonMonCompteArr.png" /></a></li>                         
            <li><a class="menu-accordion" href="parametreprofil.php" title="Mon profil" onclick="window.open(this.href); return false;"><img src="img/boutonMonProfilArr.png" /></a></li>
                   <ul>
                                         <li class="active"><a href="parametreprofil.php" title="Paramétres" onclick="window.open(this.href); return false;"><img src="img/boutonParametres.png" /></a></li>
                                         <li><a href="Messagerie/Alertes.php" title="Messagerie/Alertes" onclick="window.open(this.href); return false;"><img src="img/boutonMessagerieAlerte.png" /></a></li>
                                      </ul>
            <li><a class="menu-accordion" href="Mes_amis.php" title="Mes amis" onclick="window.open(this.href); return false;"><img src="img/boutonMesAmisArr.png" /></a></li>
            <li><a class="menu-accordion" href="Live.php" title="Live" onclick="window.open(this.href); return false;"><img src="img/boutonLivesArr.png" /></a></li>            

                </ul>
</div>


<div class="floatright-main">
<h2>Mon profil</h2>
</div>

<form>
<fieldset class="rollin2">

<fieldset class="rollin">
            <legend class="h2"><span>Acc�s profil :</span></legend>
            <div>             <p class="bloc"><em>Qui peut acc�der � mon profil ?</em></p>
            <div class="profil radio-checkbox">
                <input class="radio" type="radio" id="tous" name="consultation_profil" value="0" checked="checked"/>
                <label for="tous">Tous les utilisateurs</label>
            </div>
            <div class="profil radio-checkbox">
                <input class="radio" type="radio" id="seulement_profil_Doyouevent" name="consultation_profil" value="1" />
                <label for="seulement_profil_Doyouevent">Tous les utilisateurs connect�s sur Doyouevent</label>
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
        <div class="=profil radio-checkbox">
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
                        <label class="col_third floatleft" for="A propos de moi"></span></label> 
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
    alert('Les modifications ont �t� enregistr�s.');
	myForm = document.getElementById("personalData");
        myForm .submit();

}
else {
    alert("Aucune modification a �t� enregistr�.");
}
}

</script>
</body>
</html>