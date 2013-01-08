<html>
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="profil.css">
    </head>
    <body>
<<<<<<< HEAD
        <div id="mesEvents">
          <?php
                $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
                if (!isset($_GET['onglet'])) { //si ya rien
                    $result = $bdd->query('SELECT * FROM  event LIMIT 0 , 30');
                }
                if (isset($_GET['onglet']) && !isset($_GET['sousOnglet'])) { //si ya juste onglet
                    $result = $bdd->query('SELECT  * FROM  event WHERE theme =  "' . $_GET['onglet'] . '"');
                }


                if (isset($_GET['sousOnglet'])) { //si ya un sous onglet
                    $result = $bdd->query('SELECT  * FROM  event WHERE type =  "' . $_GET['sousOnglet'] . '"');
                }


                while ($data = $result->fetch()) {


                    include("articleevent.php");
                    ?>
                    <!--  <div class ="evenement">
                          
                          <div class="color">
                             
                          </div>


                    <?php
                    // echo '<img class = "imageflottante" alt="Photo de évenement" src= "'.$data["photo"].'"/>' 
                    ?>
                          <img class = "imageflottante" alt="Photo de évenement" src= "imgUser/gad_elmaleh.jpeg"/>
                          <div class ="texteEvent">
                              <h1><?php echo $data['nom']; ?></h1>
                              <strong>Adresse: </strong><?php echo $data['lieu']; ?><span><?php echo $data['lieu']; ?></span><br/>
                              <strong>Date et Heure :</strong><?php echo $data['date']; ?><br/>
                              <strong>Prix: </strong>30€ <br/>
                              <strong>Description: </strong> <?php echo $data['description']; ?><br/>
                              <strong>Note: </strong><img src="img/etoile.png" class="etoile" alt="Note" /><p id="note">(5,0 sur 5,0)</p><br/>
                              <p id="bouton1">Voir Plus de Détails</p>
                              <p id="bouton2">Voir Commentaires</p>
                              <p id="bouton3">Réserver</p>
                          </div>

                      </div> -->


                    <?php
                }

                $result->closeCursor();
                ?>
        </div> 
=======
        <?php
        session_start();
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
                    <li><input type="button" onclick="afficherc();" value="Mes Infos"/></li>
                    <li><input type="button" onclick="affichera();" value="Mes Amis"/></li>
                    <li><input type="button" onclick="afficherme();" value="Mes Events"/></li>
                    <li><input type="button" onclick="self.location.href='test1.php'; cacher();" value="Paramètres"/></li>
                    <!--<li><a href="#" title="Mes Infos">Mes Infos</a></li>
                    <li><a href="#" title="Mes Amis">Mes Amis</a></li>
                    <li><a href="test1.php" title="Paramètres">Paramètres</a></li>-->
                </ul>
            </div>

            <div id="coordonnee" style="display:none;">
                <p id="infoPerso">
                    <!--<span class="titre">Informations Personnelles</span><br/><br/><br/>-->
                    <strong>Pseudo :</strong> alex95410<br/><br/>
                    <strong>Prénom :</strong> Alexis<br/><br/>
                    <strong>Nom :</strong> MARTIN<br/><br/>
                    <strong>Sexe :</strong>  Masculin<br/><br/>
                    <strong>Date de naissance :</strong>  21/05/1992<br/><br/>
                    <strong>Adresse :</strong>  21 rue du bédo - 95410 - GROSLAY<br/><br/>
                    <strong>E-mail :</strong>  alex_du_95410@hotmail.fr<br/><br/>
                    <strong>Téléphone fixe :</strong>  0123456789<br/><br/>
                    <strong>Téléphone portable :</strong>  0669331681<br/><br/>
                    <strong>Site Web :</strong>  http://alexlebgdu95410.skyrock.com
                </p>
                <!--<p id="infoPro">
                    <span class="titre">Informations Professionelles</span><br/><br/><br/>
                    <strong>Société :</strong> Martin&Co<br/><br/>
                    <strong>Adresse :</strong>  21 rue d'ici - 95410 - GROSLAY<br/><br/>
                    <strong>Activité :</strong> Organisation d'événements<br/><br/>
                    <strong>Profession :</strong> PDG<br/><br/>
    
                </p>-->
                <p id="preference">
                    <strong>Loisirs :</strong> Tennis, Foot, Basket<br/><br/>
                    <strong>Préférence événements :</strong> Soirée Etudiante, Tea Party, Son et Lumière, Sculpture<br/><br/>
                    <strong>Description :</strong><br/><br/>
                    Alex95410, la haine ! Alex95410 a 15 ans, en général. Si ce n'est dans la vie, c'est son âge mental. 
                    Alex95410 a les cheveux longs, il écoute de la techno et il ne conçoit pas un hiver sans sa semaine de ski aux Menuires.
                    Alex95410 est un rebel, la preuve, il fume des oinjs, et il porte toujours son uniforme d'anticonformiste comme tous les autres Kikoos. 
                    Alex95410, il est kevl, et il évite soigneusement de réflechir à quelque sujet que ce soit, de peur de froisser sa belle kevl attitude ! 
                    Donc, Alex95410 est kon komme une brelle, mais ça ne l'empêche pas de la ramener sur internet. Et bien sûr Alex95410, il sait pas ékrir !!! 
                    Alors il met des smileys partout, et des !!! et des k, etc... Comme ça, non seulement Alex95410 n'a rien à dire, mais il le dit mal. 
                    Alex95410, c'est l'idiot du village global.  
                </p>
            </div>
            <div id="amis"style="display:none;">
                <fieldset>
                    <a href="img/jerry.jpg"><img src="img/jerry_mini.jpg" alt="Jerry" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                    <p id="nom1">Jerry BOLZASTREET</p>
                    <p id="lieu1">France, Paris</p>
                </fieldset>
                <fieldset>
                    <a href="img/momo.jpg"><img src="img/momo_mini.jpg" alt="Momo" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                    <p id="nom2">Mohammed LACHKHAB</p>
                    <p id="lieu2">France, Versailles</p>
                </fieldset>
                <fieldset>
                    <a href="img/flo.jpg"><img src="img/flo_mini.jpg" alt="Flo" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                    <p id="nom3">Florian GUITOGER</p>
                    <p id="lieu3">France, Gonesse</p>
                </fieldset>
            </div>
            <div id="mesEvents">
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
                if (!isset($_GET['onglet'])) { //si ya rien
                    $result = $bdd->query('SELECT * FROM  event LIMIT 0 , 30');
                }
                if (isset($_GET['onglet']) && !isset($_GET['sousOnglet'])) { //si ya juste onglet
                    $result = $bdd->query('SELECT  * FROM  event WHERE theme =  "' . $_GET['onglet'] . '"');
                }


                if (isset($_GET['sousOnglet'])) { //si ya un sous onglet
                    $result = $bdd->query('SELECT  * FROM  event WHERE type =  "' . $_GET['sousOnglet'] . '"');
                }


                while ($data = $result->fetch()) {


                    include("articleevent.php");
                    ?>
                    <!--  <div class ="evenement">
                          
                          <div class="color">
                             
                          </div>


                    <?php
                    // echo '<img class = "imageflottante" alt="Photo de évenement" src= "'.$data["photo"].'"/>' 
                    ?>
                          <img class = "imageflottante" alt="Photo de évenement" src= "imgUser/gad_elmaleh.jpeg"/>
                          <div class ="texteEvent">
                              <h1><?php echo $data['nom']; ?></h1>
                              <strong>Adresse: </strong><?php echo $data['lieu']; ?><span><?php echo $data['lieu']; ?></span><br/>
                              <strong>Date et Heure :</strong><?php echo $data['date']; ?><br/>
                              <strong>Prix: </strong>30€ <br/>
                              <strong>Description: </strong> <?php echo $data['description']; ?><br/>
                              <strong>Note: </strong><img src="img/etoile.png" class="etoile" alt="Note" /><p id="note">(5,0 sur 5,0)</p><br/>
                              <p id="bouton1">Voir Plus de Détails</p>
                              <p id="bouton2">Voir Commentaires</p>
                              <p id="bouton3">Réserver</p>
                          </div>

                      </div> -->


                    <?php
                }

                $result->closeCursor();
                ?>
            </div>

        </section>
        <?php include("footer.php"); ?>
        <script type="text/javascript">
            function afficherc(){ 
                document.getElementById("coordonnee").style.display="";
                document.getElementById("amis").style.display="none";
                document.getElementById("mesEvents").style.display="none";
            }
            function affichera(){ 
                document.getElementById("amis").style.display="";
                document.getElementById("coordonnee").style.display="none";
                document.getElementById("mesEvents").style.display="none";
            }
            function afficherme(){ 
                document.getElementById("mesEvents").style.display="";
                document.getElementById("coordonnee").style.display="none";
                document.getElementById("amis").style.display="none";
            }
        </script>
>>>>>>> branch 'master' of https://github.com/ErwanLP/AppInfo.git
    </body>
</html>
