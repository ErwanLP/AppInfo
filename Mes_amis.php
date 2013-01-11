<!DOCTYPE html>
<?php include("profil.php"); ?>
<html>
  <head>
    <title>Mes Amis</title>
    <link rel="stylesheet" href="parametre.css">
  </head>
<body>


<div class="menuParametres">
<h1>Configurer</h1>
    <ul id="menuParametre">
                    <li><a class="menuParametre" href="Infoparticipant.php" title="Mon compte" ><img src="img/boutonMonCompteArr.png" /></a></li>                         
                            <li><a class="menuParametre" href="parametreprofil.php" title="Mon profil" ><img src="img/boutonMonProfilArr.png" /></a></li>
                            <li><a class="menuParametre" href="Mes_amis.php" title="Mes amis"><img src="img/boutonMesAmisDroit.png" /></a>
                                      <ul>
                                         <li><a href="Mes_amis.php" title="Invitations envoyées"><img src="img/boutonInvitationsEnvoyées.png" /></a></li>
                                         <li><a href="MesAmisMaquer.php" title="Amis masqués"><img src="img/boutonAmisMasqués.png" /></a></li>
                                      </ul>
                           
                            <li><a class="menuParametre" href="Live.php" title="Live"><img src="img/boutonLivesArr.png" /></a></li>
                </ul>
</div>
       
    <div class="rollin1">
            <!-- inclusion du contenu -->
            <h2>Invitations envoyées</h2>
       
        <form>
          <fieldset>
            <ul class="liste_invitation_envoyer">
                                            <li class="invitation_envoyer" id="js-friend-00000001">
<div class="invitation_envoyer">
    <div class="photo-amis">
                <a class="liens_profils" href="http://alex-ibra95.doyouevents.com/profil/" onclick="window.open(this.href); return false;"><img src="img/alexbeach.jpg" alt="Photo de Alex-ibra95" width="230" height="230" /></a>
                    </div>
    <div class="amis-info">
                    <a href="http://alex-ibra95.doyouevents.com/profil/" onclick="window.open(this.href); return false;"  class="homme">Alex-ibra95</a>
                                <p> 
         20 ans         
                  <span class="adresse">
                             <img class="flag" src="img/flag_fr.png" alt="France" title="France" />
                                       (95)         </span>
                  
         <span>
                     <span class="date_amis">
            Envoyée :                        19/11/2012
            </span>
                  
                </span>
        
    </p>
    

            
     
        <ul class="lien_amis">
                        <li><a onclick="window.open(this.href); return false;" href="http://alex-ibra95.doyouevents.com/profil/" class="bouton secondary viewprofil">Son profil</a></li>
                                </ul>
        </div>

</div>
</fieldset>

<div>
            
        <form>
         <fieldset>
           <ul class="liste_invitation_envoyer">
                                            <li class="invitation_envoyer" id="js-friend-00000002">
<div class="invitation_envoyer">
    <div class="photo-amis">
                <a class="liens_profils" href="guito-le-taureau-bourre-du-sud.doyouevents.com/profil/" onclick="window.open(this.href); return false;"><img src="img/flo-biar.jpg" alt="Photo de Guito-le-taureau-bourré-du-sud" width="230" height="230" /></a>
                    </div>
    <div class="amis-info">
                    <a href="http://guito-le-taureau-bourre-du-sud.doyouevents.com/profil/" onclick="window.open(this.href); return false;"  class="homme">Guito-le-taureau-bourré-du-sud</a>
                                <p> 
         20 ans         
                  <span class="adresse">
                             <img class="flag" src="img/flag_fr.png" alt="France" title="France" />
                                       (95)         </span>
                  
         <span>
                     <span class="date_amis">
            Envoyée :                        20/11/2012
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