<!--<nav class = "elementmenu" >
    <ul>
        <li id="soiree"><a href="nav.php" ><img src ="img/ongletSoiree.png" alt="onglet" /></a></li>
        <li id="bar"><a href="nav.php"></a></li>
        <li id ="concert"><a href=#></a></li>
        <li id ="restauration"><a href=#></a></li>
        <li id  ="spectacle"><a href ="event.php?onglet=spectacle">test</a></li>
        <li id ="autre"><a href=creationEvenement.php>Cre&acute;ation Evenement</a></li>
    </ul>
</nav> -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" media="screen, print, handheld" type="text/css" href="index.css" />  
    </head>
    <body>
        <div class="container">
            <ul id="nav">
                <li><a href="index.php">Accueil</a></li>
                <li><a href ="event.php?onglet=spectacle">Spectacle</a>
                    <ul>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=comedieMusicale" >Com&eacute;die Musicale</a></li>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=theatre">Th&eacute;atre</a></li>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=cafeTheatre">Caf&eacute; Th&eacute;atre</a></li>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=cabaret">Cabaret</a></li>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=danse">Danse</a></li>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=sonEtLumiere">Son et lumi&egrave;re</a></li>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=opera">Op&eacute;ra</a></li>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=cirque">Cirque</a></li>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=oneManShow">One Man Show</a></li>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=spectacleDeRue">Spectacle de rue</a></li>
                    </ul>
                </li>
                <li><a href ="#">Exposition</a>
                    <ul>
                        <li><a href="event.php?onglet=exposition&sousOnglet=conference" >Conf&eacute;rence</a></li> <!-- Liste des liens du sous-menu -->
                        <li><a href="event.php?onglet=exposition&sousOnglet=salleDesVentes">Salle des Ventes</a></li>
                        <li><a href="event.php?onglet=exposition&sousOnglet=sculture">Sculture</a></li>
                        <li><a href="event.php?onglet=exposition&sousOnglet=expositionMusicale">Exposition Musicale</a></li>
                        <li><a href="event.php?onglet=exposition&sousOnglet=expositionCulturelle">Exposition Culturelle</a></li>
                        <li><a href="event.php?onglet=exposition&sousOnglet=expositionPeinture">Exposition Peinture</a></li>
                        <li><a href="event.php?onglet=exposition&sousOnglet=musee">Mus&eacute;e</a></li> <!-- Liste des liens du sous-menu -->
                        <li><a href="event.php?onglet=exposition&sousOnglet=galeries">Galeries</a></li>
                    </ul>
                </li>
                <li><a href="#">Restauration</a>
                    <ul>
                        <li><a href="event.php?onglet=restauration&sousOnglet=cuisineTraditionnelle" >Cuisine traditionnelle</a></li> <!-- Liste des liens du sous-menu -->
                        <li><a href="event.php?onglet=restauration&sousOnglet=cuisienDuMonde">Cuisine du Monde</a></li>
                        <li><a href="event.php?onglet=restauration&sousOnglet=gastronomie">Gastronomie</a></li>
                        <li><a href="event.php?onglet=restauration&sousOnglet=brunch">Brunch</a></li>
                        <li><a href="event.php?onglet=restauration&sousOnglet=fastFood">Fast Food</a></li>
                        <li><a href="event.php?onglet=restauration&sousOnglet=creperie">Cr&eacute;perie</a></li>
                        <li><a href="event.php?onglet=restauration&sousOnglet=cantine">Cantine</a></li>
                    </ul>
                </li>
                <li><a href="#" >Soir&eacute;e</a>
                    <ul>
                        <li><a href="event.php?onglet=soiree&sousOnglet=soireeEtudiante" >Soir&eacute;e Etudiante</a></li>
                        <li><a href="event.php?onglet=soiree&sousOnglet=clubbing">Clubbing</a></li>
                        <li><a href="event.php?onglet=soiree&sousOnglet=afterworks">Afterworks</a></li>
                        <li><a href="event.php?onglet=soiree&sousOnglet=culturelle">Culturelle</a></li>
                        <li><a href="event.php?onglet=soiree&sousOnglet=teaParty">Tea Party</a></li>
                        <li><a href="event.php?onglet=soiree&sousOnglet=afterParty">After Party</a></li>
                    </ul>
                </li>
                <li><a href="#">Bar</a>
                    <ul>
                        <li><a href="event.php?onglet=bar&sousOnglet=cafe" >Caf&eacute;</a></li> <!-- Liste des liens du sous-menu -->
                        <li><a href="event.php?onglet=bar&sousOnglet=pub">Pub</a></li>
                        <li><a href="event.php?onglet=bar&sousOnglet=barAVin">Bar &agrave;  Vin</a></li>
                        <li><a href="event.php?onglet=bar&sousOnglet=brasserie">Brasserie</a></li>
                        <li><a href="event.php?onglet=bar&sousOnglet=salonDeThe">Salon de Th&eacute;</a></li>
                        <li><a href="event.php?onglet=bar&sousOnglet=lounge">Lounge</a></li>
                    </ul>
                </li>
                <li><a href="#">Concert</a>
                    <ul>
                        <li><a href="event.php?onglet=concert&sousOnglet=concertInterieur" >Concert Int&eacute;rieur</a></li> <!-- Liste des liens du sous-menu -->
                        <li><a href="event.php?onglet=concert&sousOnglet=concertExterieur">Concert Ext&eacute;rieur</a></li>
                        <li><a href="event.php?onglet=concert&sousOnglet=festival">Festival</a></li>
                    </ul>
                </li>
            </ul>
            <form method="post" action="traitementRecherche.php"> <!-- RECHERCHE  -->
                <label class="rechercheSimple" for="recherche">Recherche :</label>
                <input style="margin-left :10px;" type="search" name="recherche" id="recherche" size="30" maxlength="70" placeholder="Ex : 75006, bar, mairie de Paris"><input style="margin-left:5px;" type="submit" value="Go"/>
                <a  style="color:#ff6040;padding-left:10px;font-family: Verdana, Trebuchet MS, Arial, sans-serif;" href="rechercheAvancee.php?RA=on">Recherche Avancée</a>
            </form>
        </div>

    <script type="text/javascript">
        sfHover = function() {
            var sfEls = document.getElementById("nav").getElementsByTagName("li");
            for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                    this.className+=" sfhover";
                }
                sfEls[i].onmouseout=function() {
                    this.className=this.className.replace(new RegExp(" sfhover\b"), "");
                }
            }
        }
        if (window.attachEvent) window.attachEvent("onload", sfHover);
    </script>
    
    <?php
    if (!empty($_SESSION['ID'])) {
        include("navConnect.php");
    } else {
        include("navNonConnect.php");
    }
    ?>
    
</body>
</html>
