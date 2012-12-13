<!DOCTYPE html>
<html>
  <head>
    <title>Ma Messagerie</title>
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
                    <li ><a class="menu-accordion" href="Mesinfosperso.html" title="Mon compte">Mon compte</a></li>                         
                            <li><a class="menu-accordion" href="parametreprofil.html" title="Mon profil">Mon profil</a></li>
                            <li><a class="menu-accordion" href="Mes_amis.html" title="Mes amis">Mes amis</a></li>
                            <li class="active rollin"><a class="menu-accordion" href="Mesmessages.html" title="Ma messagerie">Ma messagerie</a></li>
                            <li><a class="menu-accordion" href="Mesalertes.html" title="Alertes">Alertes</a></li>
                            <li><a class="menu-accordion" href="Live.html" title="Live">Live</a></li>
                </ul>
</div>


<div class="floatright-main">
<h2>Ma Messagerie</h2>
</div>
<form>
<fieldset class="rollin3">
        <legend class="h2"><span>Ma messagerie</span></legend>
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
 <script>

//var modification_3

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
</body>
</html>