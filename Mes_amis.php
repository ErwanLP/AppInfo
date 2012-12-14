<!DOCTYPE html>
<?php include("profil.php"); ?>
<html>
  <head>
    <title>Mes Amis</title>
    <link rel="stylesheet" href="test2.css">
  </head>
<body>
<header></header>
<
<div class="sidebar-left-floatleft">
<h1>Configurer</h1>
    <ul id="sidebar-accordion" class="menu-sidebar-left phylac-top-left box-gradient">
                    <li><a class="menu-accordion" href="Infoparticipant.php" title="Mon compte" onclick="window.open(this.href); return false;"><img src="img/boutonMonCompteArr.png" /></a></li>                         
                            <li><a class="menu-accordion" href="parametreprofil.php" title="Mon profil" onclick="window.open(this.href); return false;"><img src="img/boutonMonProfilArr.png" /></a></li>
                            <li  class="active rollin" ><a class="menu-accordion" href="Mes_amis.php" title="Mes amis" onclick="window.open(this.href); return false;"><img src="img/boutonMesAmisDroit.png" /></a>
                                      <ul>
                                         <li class="active"><a href="Mes_amis.php" title="Invitations envoyées" onclick="window.open(this.href); return false;"><img src="img/boutonInvitationsEnvoyées.png" /></a></li>
                                         <li><a href="MesAmisMaquer.php" title="Amis masqués" onclick="window.open(this.href); return false;"><img src="img/boutonAmisMasqués.png" /></a></li>
                                      </ul>
                           
                            <li><a class="menu-accordion" href="Live.php" title="Live" onclick="window.open(this.href); return false;"><img src="img/boutonLivesArr.png" /></a></li>
                </ul>
</div>
<script type="text/javascript">

(function($) {    
   $("#sidebar-accordion").accordion();
})(jQuery);

</script>        
    <div class="rollin1">
            <!-- inclusion du contenu -->
            <h2>Invitations envoy�es</h2>
       
        <form>
          <fieldset>
            <ul class="liste_invitation_envoyer">
                                            <li class="invitation_envoyer" id="js-friend-00000001">
<div class="invitation_envoyer">
    <div class="photo-amis">
                <a class="liens_profils" href="http://alex-ibra95.doyouevents.com/profil/" onclick="window.open(this.href); return false;"><img src="img/alexbeach.jpg" alt="Photo de Alex-ibra95" width="50" height="50" /></a>
                    </div>
    <div class="amis-info">
                    <a href="http://alex-ibra95.doyouevents.com/profil/" onclick="window.open(this.href); return false;"  class="homme">Alex-ibra95</a>
                                <p> 
         20 ans         
                  <span class="adresse">
                             <img class="flag" src="img/flag_fr.png" alt="France" title="France" />
                                       (95)         </span>
                  
         <span class="block">
                     <span class="date_friends">
            Envoy�e :                        19/11/2012
            </span>
                  
                </span>
        
    </p>
    

            
     
        <ul class="lien_amis">
                        <li><a onclick="window.open(this.href); return false;" href="http://alex-ibra95.doyouevents.com/profil/" class="bouton secondary viewprofil">Son profil</a></li>
                                </ul>
        </div>

</div>
</fieldset>
</br></br>
<div>
            
        <form>
         <fieldset>
           <ul class="liste_invitation_envoyer">
                                            <li class="invitation_envoyer" id="js-friend-00000002">
<div class="invitation_envoyer">
    <div class="photo-amis">
                <a class="liens_profils" href="guito-le-taureau-bourr�-du-sud.doyouevents.com/profil/" onclick="window.open(this.href); return false;"><img src="img/flo-biar.jpg" alt="Photo de Guito-le-taureau-bourr�-du-sud" width="50" height="50" /></a>
                    </div>
    <div class="amis-info">
                    <a href="http://guito-le-taureau-bourr�-du-sud.doyouevents.com/profil/" onclick="window.open(this.href); return false;"  class="homme">Guito-le-taureau-bourr�-du-sud</a>
                                <p> 
         20 ans         
                  <span class="adresse">
                             <img class="flag" src="img/flag_fr.png" alt="France" title="France" />
                                       (95)         </span>
                  
         <span class="block">
                     <span class="date_friends">
            Envoy�e :                        20/11/2012
            </span>
                  
                </span>
        
    </p>
    

            
     
        <ul class="lien_amis">
                        <li><a onclick="window.open(this.href); return false;" href="guito-le-taureau-du-sud.doyouevents.com/profil/" class="bouton secondary viewprofil">Son profil</a></li>
                                </ul>
        </div>

</div>
</fieldset>
</body>
</html>