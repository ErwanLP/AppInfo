
<ul class="navigation">
    <li class="sousMenuBascule"><span>Ev&egrave;nement</span>
        <ul class="sousMenu">
            <li><a href="event.php?onglet=spectacle">Spectacle</a>
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
            <!--<?php
            //if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
            ?>
            <li class="sousMenuBascule"><span>Mes Ev&egrave;nement</span>
                <ul class="sousMenu">
                    <li>
                        <?php 
                        
                       
                        
                        
                        ?>
                        
                        
                    </li>
                </ul>
            </li>
            <?php 
            //}else if(isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "participant" AND $_SESSION['ID'] != null) {
            ?>
            <li class="sousMenuBascule"><span>Mes Ev&egrave;nement</span>
                <ul class="sousMenu">
                    <li>Afficher ici les evenements auxquelles il est inscrit</li>
                </ul>
            </li>
            <?php
            //}
            ?>-->
            
            <li class="sousMenuBascule"><span>Ev&egrave;nement r&eacute;cent</span>
                <ul class="sousMenu">
                    <li><a href="#" title="Aller à la page #">La bal de Paris</a></li>
                    <li><a href="#" title="Aller à la page #">La patinoire dansante</a></li>
                    <li><a href="#" title="Aller à la page #">Gad en concert</a></li>
                </ul>
            </li>
            <li><a href="#" title="Aller à la page Bar">Bar</a>
                <ul>
                    <li><a href="event.php?onglet=bar&sousOnglet=cafe" >Caf&eacute;</a></li> <!-- Liste des liens du sous-menu -->
                    <li><a href="event.php?onglet=bar&sousOnglet=pub">Pub</a></li>
                    <li><a href="event.php?onglet=bar&sousOnglet=barAVin">Bar &agrave;  Vin</a></li>
                    <li><a href="event.php?onglet=bar&sousOnglet=brasserie">Brasserie</a></li>
                    <li><a href="event.php?onglet=bar&sousOnglet=salonDeThe">Salon de Th&eacute;</a></li>
                    <li><a href="event.php?onglet=bar&sousOnglet=lounge">Lounge</a></li>
                </ul>
            </li>
            <li><a href="#" title="Aller à la page Concert">Concert</a>
                <ul>
                    <li><a href="event.php?onglet=concert&sousOnglet=concertInterieur" >Concert Int&eacute;rieur</a></li> <!-- Liste des liens du sous-menu -->
                    <li><a href="event.php?onglet=concert&sousOnglet=concertExterieur">Concert Ext&eacute;rieur</a></li>
                    <li><a href="event.php?onglet=concert&sousOnglet=festival">Festival</a></li>
                </ul>
            </li>
            <li class="sousMenuBascule"><span>Exprimez-vous</span>
                <ul class="sousMenu">
                    <li><a href="livredor.php" title="Aller à page Livre d'Or"> Livre D'Or</a></li>
                </ul>
            </li>
            <li class="sousMenuBascule"><span>Exprimez-vous</span>
                <ul class="sousMenu">
                    <li><a href="livredor.php" title="Aller à page Livre d'Or"> Livre D'Or</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <?php
    if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
        ?>
        <li class="sousMenuBascule"><span>Mes Ev&egrave;nement</span>
            <ul class="sousMenu">
                <li>
                    <?php
                    // $result = $bdd->query(SELECT nom.event)
                    ?>


                </li>
            </ul>
        </li>
    <?php
} else if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "participant" AND $_SESSION['ID'] != null) {
    ?>
        <li class="sousMenuBascule"><span>Mes Ev&egrave;nement</span>
            <ul class="sousMenu">
                <li>Afficher ici les evenements auxquelles il est inscrit</li>
            </ul>
        </li>
    <?php
}
?> 

    <li class="sousMenuBascule"><span>Ev&egrave;nement r&eacute;cent</span>
        <ul class="sousMenu">
            <li><a href="#" title="Aller à la page #">La bal de Paris</a></li>
            <li><a href="#" title="Aller à la page #">La patinoire dansante</a></li>
            <li><a href="#" title="Aller à la page #">Gad en concert</a></li>
        </ul>
    </li>
    <li class="sousMenuBascule"><span>Top Ev&egrave;nement</span>
        <ul class="sousMenu">
            <li><a href="#" title="Aller à la page #">Le musée de l'horreur</a></li>
            <li><a href="#" title="Aller à la page #">Les restos du coeur</a></li>
        </ul>
    </li>
    <li class="sousMenuBascule"><span>Forum</span>
        <ul class="sousMenu">
            <li><a href="indexForum.php" title="Aller à la page Acceuil">Accueil</a></li>
            <li><a href="souhait.php" title="Aller à la section Souhait">Souhait</a></li>
            <li><a href="taverne.php" title="Aller à la section Taverne">Taverne</a></li>
            <li><a href="presentation.php" title="Aller à la section Présentation">Pr&eacute;sentation</a></li>
            <li><a href="aideEtSupport.php" title="Aller à la page Aide et Support">Aide et Support</a></li>
        </ul>
    </li>
</ul>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
            
    $(document).ready( function () {
        // On cache les sous-menus :
        $(".navigation ul.sousMenu").hide();
        // On sélectionne tous les items de liste portant la classe "toggleSubMenu"
        // et on remplace l'élément span qu'ils contiennent par un lien :
        $(".navigation li.sousMenuBascule span").each( function () {
            // On stocke le contenu du span :
            var TexteSpan = $(this).text();
            $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + TexteSpan + '</a>') ;
        } ) ;

        // On modifie l'évènement "click" sur les liens dans les items de liste
        // qui portent la classe "toggleSubMenu" :
        $(".navigation li.sousMenuBascule > a").click( function () {
            // Si le sous-menu était déjà ouvert, on le referme :
            if ($(this).next("ul.sousMenu:visible").length != 0) {
                $(this).next("ul.sousMenu").slideUp("normal");
            }
            // Si le sous-menu est caché, on ferme les autres et on l'affiche :
            else {
                $(".navigation ul.sousMenu").slideUp("normal");
                $(this).next("ul.sousMenu").slideDown("normal");
            }
            // On empêche le navigateur de suivre le lien :
            return false;
        });    
    } ) ;
            
    afficher = function() {
        var tab = document.getElementById("sousMenu").getElementsByTagName("li");
        for (var i=0; i<tab.length; i++) {
            //on affiche les sous-menus de chaque onglet
            tab[i].onmouseover=function() {
                this.className+="afficher";
            }
            //on "dé-affiche" les sous-menus de chaque onglet
            tab[i].onmouseout=function() {
                this.className=this.className.replace(new RegExp(" afficher\b"), "");
            }
        }
    };
    if (window.attachEvent) window.attachEvent("onload", afficher);
</script>
