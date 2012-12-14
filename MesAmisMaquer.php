<!DOCTYPE html>
<html>
    <head>
        <title>Mes Amis</title>
        <link rel="stylesheet" href="test2.css">
    </head>
    <body>
        <div class="sidebar-left-floatleft">
            <h1>Configurer</h1>
            <ul id="sidebar-accordion" class="menu-sidebar-left phylac-top-left box-gradient">
                <li><a class="menu-accordion" href="Infoparticipant.php" title="Mon compte" onclick="window.open(this.href); return false;"><img src="img/boutonMonCompteArr.png"/></a></li>                         
                <li><a class="menu-accordion" href="parametreprofil.php" title="Mon profil" onclick="window.open(this.href); return false;"><img src="img/boutonMonProfilArr.png"/></a></li>
                <li  class="active rollin" ><a class="menu-accordion" href="Mes_amis.html" title="Mes amis" onclick="window.open(this.href); return false;"><img src="img/boutonMesAmisDroit.png"/>Mes amis</a>
                    <ul>
                        <li><a href="Mes_amis.php" title="Invitations envoy�es" onclick="window.open(this.href); return false;"><img src="img/boutonInvitationsEnvoyées.png" /></a></li>
                        <li class="active"><a href="MesAmisMaquer.php" title="Amis masqu�s" onclick="window.open(this.href); return false;"><img src="img/boutonAmisMasqués.png" /></a></li>
                    </ul>
                <li><a class="menu-accordion" href="Mesmessages.html" title="Ma messagerie">Ma messagerie</a></li>
                <li><a class="menu-accordion" href="Mesalertes.html" title="Alertes">Alertes</a></li>
                <li><a class="menu-accordion" href="Live.php" title="Live" onclick="window.open(this.href); return false;"><img src="img/boutonLivesArr.png"/></a></li>
            </ul>
        </div>
        <div class="rollin1">
            <h2>Amis masqu�s</h2>

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