<!DOCTYPE html>
<html>
    <head>  
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="profil.css">
    </head>
    <body>
        <?php session_start();
        include("head.php");

        include("header.php");

        include("nav.php");
        ?>


        <section>
            <aside class ="navg">
                <?php include ("arbre.php"); ?>
            </aside>
            <aside class ="new">
                <div class ="eventNew">
                    <img class ="photonew" src ="img/new.jpg"/>
                </div>
            </aside>
            <div id="description">
                <fieldset>
                    <a href="img/avatar.jpg"><img src="img/avatar_mini.jpg" alt="Avatar" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                    <p id="nom4">Alexis MARTIN</p>
                    <p id="lieu">France, Groslay</p>
                </fieldset>

            </div>
            <div class="menu">
                <ul id="simple-menu">
                    <li><a href="coordonnee.php" title="Coordonnées">Mes Infos</a></li>                
                    <li><a href="amis.php" title="Mes Amis">Mes Amis</a></li>
                    <li><a href="mesEvents.php" title="Mes Evénements">Mes Evénements</a></li>
                    <li><a href="Infoparticipant.php" title="Paramètres">Paramètres</a></li>
                </ul>
            </div>
        </section>
        <?php include("footer.php"); ?>
    </body>
</html>
