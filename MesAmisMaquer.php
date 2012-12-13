<!DOCTYPE html>
<html>
  <head>
    <title>Mes Amis</title>
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
                            <li  class="active rollin" ><a class="menu-accordion" href="Mes_amis.html" title="Mes amis">Mes amis</a>
                                      <ul>
                                         <li><a href="Mes_amis.html" title="Invitations envoyées">Invitations envoyées</a></li>
                                         <li class="active"><a href="MesAmisMaquer.html" title="Amis masqués">Amis masqués</a></li>
                                      </ul>
                            <li><a class="menu-accordion" href="Mesmessages.html" title="Ma messagerie">Ma messagerie</a></li>
                            <li><a class="menu-accordion" href="Mesalertes.html" title="Alertes">Alertes</a></li>
                            <li><a class="menu-accordion" href="Live.html" title="Live">Live</a></li>
                </ul>
</div>
 <div class="rollin1">
            <h2>Amis masqués</h2>

        <form  >
            <ul class="liste_invitation_masquer">
                                            <li class="invitation_masquer" id="js-friend-00000003">
<div class="iinvitation_masquer">
    <div class="photo-amis">
                <a class="liens_profils" href="erwan-badboy-russian.doyouevents.com/profil/" onclick="window.open(this.href); return false;"><img src="img/erwan-bad-boy.jpg" alt="Photo de Erwan-badboy-russian" width="50" height="50" /></a>
                    </div>
    <div class="amis-info">
                    <a href="http://erwan-badboy-russian.doyouevents.com/profil/" onclick="window.open(this.href); return false;"  class="homme">Erwan-badboy-russian</a>
                                <p> 
         20 ans         
                  <span class="adresse">
                             <img class="flag" src="img/flag_fr.png" alt="France" title="France" />
                                       (95)         </span>
                  
       
                  
                </span>
        
    </p>
    

            
     
        <ul class="lien_amis">
                        <li><a onclick="window.open(this.href); return false;" href="erwan-badboy-russian.doyouevents.com/profil/" class="bouton secondary viewprofil">Son profil</a></li>
                                </ul>
        </div>

</div>
</body>
</html>