<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" media="screen, print, handheld" type="text/css" href="index.css" />  
    </head>
    <body>

        <ul class="navigation">
            <li><a href="#" title="Aller à la page 1">Page 1</a></li>
            <li class="sousMenuBascule"><span>Page 2</span>
                <ul class="sousMenu">
                    <li><a href="#" title="Aller à la page 2.1">Page 2.1</a></li>
                    <li><a href="#" title="Aller à la page 2.2">Page 2.2</a></li>
                    <li><a href="#" title="Aller à la page 2.3">Page 2.3</a></li>
                </ul>
            </li>
            <li class="sousMenuBascule"><span>Item 3</span>
                <ul class="sousMenu">
                    <li><a href="#" title="Aller à la page 3.1">Page 3.1</a></li>
                    <li><a href="#" title="Aller à la page 3.2">Page 3.2</a></li>
                </ul>
            </li>
            <li><a href="#" title="Aller à la page 4">Page 4</a></li>
        </ul>
        <!--<div>
            <ul class="navigation">
                <li class="toggleSubMenu">Page 1
                    <ul class="subMenu">
                        <li><a href="#" title="Aller à la page 2.1">Page 1.1</a></li>
                        <li><a href="#" title="Aller à la page 2.2">Page 1.2</a></li>
                        <li><a href="#" title="Aller à la page 2.3">Page 1.3</a></li>
                    </ul>
                </li>
                <li class="toggleSubMenu"><span>Page 2</span></li>
                <li class="toggleSubMenu"><span>Page 3</span></li>
                <li class="toggleSubMenu"><span>Page 4</span>
                    <ul class="subMenu">
                        <li><a href="#" title="Aller à la page 2.1">Page 4.1</a></li>
                        <li><a href="#" title="Aller à la page 2.2">Page 4.2</a></li>
                        <li><a href="#" title="Aller à la page 2.3">Page 4.3</a></li>
                    </ul>
                </li>
            </ul>
        </div>-->
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
                    $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + TexteSpan + '<\/a>') ;
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
        </script>
    </body>
</html>
