<!DOCTYPE html>
<html>
  <head>
    <title>Live</title>
    <link rel="stylesheet" href="test2.css">
  </head>
<body>
<header></header>
<nav class = "elementmenu" > <!-- Cadre correspondant ? un sous-menu -->
<ul>
<li id="soiree"><a href="nav.php" ><img src ="img/ongletSoiree.png" alt="onglet" /></a></li> <!-- Liste des liens du sous-menu -->
<li id="bar"><a href="nav.php"></a></li>
<li id ="concert"><a href=#></a></li>
<li id ="restauration"><a href=#></a></li>
<li id ="spectacle"><a href ="spectacle.php">test</a></li>
<li id ="autre"><a href=#></a></li>
</ul>
</nav>

<div id="connection">
<ul>
<li><a href="index.php" >Acceuil</a></li> <!-- Liste des liens du sous-menu -->
<li><a href="inscription.php">Inscription</a></li>
<li><a href="connection.php">Connection</a></li>
</ul>

</div>


<div class="sidebar-left-floatleft">
<h1>Configurer</h1>
    <ul id="sidebar-accordion" class="menu-sidebar-left phylac-top-left box-gradient">
                    <li><a class="menu-accordion" href="Mesinfosperso.html" title="Mon compte">Mon compte</a></li>                         
                            <li><a class="menu-accordion" href="parametreprofil.html" title="Mon profil">Mon profil</a></li>
                            <li><a class="menu-accordion" href="Mes_amis.html" title="Mes amis">Mes amis</a></li>
                            <li><a class="menu-accordion" href="Mesmessages.html" title="Ma messagerie">Ma messagerie</a></li>
                            <li><a class="menu-accordion" href="Mesalertes.html" title="Alertes">Alertes</a></li>
                            <li  class="active rollin"><a class="" href="Live.html" title="Live">Live</a>
                               <ul>
                                <li class="active"><a href="Live.html" title="Événements">Événements</a></li>
                                <li><a href="Mesreseaux.html" title="Mes réseaux">Mes réseaux</a></li>
                                </ul>
                                </li>  
                </ul>
</div>


<div class="floatright-main">
<h2>Événements</h2>
</div>

   <form  class="bloc_live">
   <fieldset class="rollin6">
    

        <legend class="h3">Événements profil</legend>
        
            <div>
            <span class="ajout_photo">Ajout/modification d'une photo</span>
            <span class="radio-checkbox_ajout">
                <input type="checkbox" id="profil_evenement_photo" name="profil_evenement_photo" checked="checked"/>
            
            </span>
            </div>
            </br>

            <div>
            <span class="ajout_video_floatleft">Ajout/modification d'une vidéo</span>
            <span class="radio-checkbox_ajout">
                <input type="checkbox" id="profil_evenement_video" name="profil_evenement_video" checked="checked"/>
                
            </span>
            </div>
            </br>

            <div>
            <span class="ajout_commentaire">Ajout d'un commentaire profil</span>
            <span class="radio-checkbox_ajout">
                <input type="checkbox" id="profil_evenement_commentaire" name="profil_evenement_commentaire" checked="checked"/>
                
            </span>
            </div>
             </br>

            <div>
            <span class="ajout_commentaire">Ajout d'un commentaire sur une photo</span>
            <span class="radio-checkbox_ajout_commentaire ">
                <input type="checkbox" id="profil_evenement_commentaire_photo" name="profil_evenement_commentaire_photo" checked="checked"/>
                
            </span>
            </div>
              </br>

            <div>
            <span class="ajout_commentaire">Ajout d'un commentaire sur une vidéo</span>
            <span class="radio-checkbox_ajout">
                <input type="checkbox" id="profil_evenement_commentaire_video" name="profil_evenement_commentaire_video" checked="checked"/>
               
            </span>
            </div>
              </br>

            <div>
            <span class="info_modification">Ajout/modification d'informations</span>
            <span class="radio-checkbox_ajout">
                <input type="checkbox" id="profil_evenement_info_modification" name="profil_evenement_info_modification" checked="checked"/>
              
            </span>
            </div>
              </br>

            <div>
            <span class="ajout_article">Ajout/modification d'un article</span>
            <span class=radio-checkbox_ajout">
                <input type="checkbox" id="article-evenement" name="article-evenement" checked="checked"/>
            
            </span>
            </div>
             </br>

            <div>
            <span class="Abonner">S'abonner</span>
            <span class="radio-checkbox_ajout">
                <input type="checkbox" id="evenement_Abonner" name="evenement_Abonner" checked="checked"/>
          
            </span>
            </div>
              </br>

            <div>
            <span class="Note">Note sur un article</span>
            <span class="radio-checkbox_ajout">
                <input type="checkbox" id="note_evenement" name="note_evenement" checked="checked"/>
            
            </span>
            </div>
              </br>

              <div>
                         <input type="button" onClick="modification_5()" value="Envoyer">
                         <input type="reset" value="Effacer">
                         </div>

</fieldset>
</form>

<script>
//var modification_5

function modification_5() {
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