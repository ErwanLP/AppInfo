<html>
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        session_start();
        include("head.php");

        include("header.php");

        include("nav.php");

        $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
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
            <?php if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "participant" AND $_SESSION['ID'] != null) { ?>
                <div id="description">
                    <fieldset>
                        <a href="img/avatar.jpg"><img src="img/avatar_mini.jpg" alt="Avatar" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>                   
                        <?php
                        $result = $bdd->query('SELECT * FROM participant');
                        $data = $result->fetch();
                        ?>
                        <p id="nom4"><?php echo $data['nom'] . "  " . $data['prenom'];
                        ?></p>
                        <p id="lieu"><?php echo $data['pays'] . ", " . $data['villes'];
                        ?></p>
                    </fieldset>

                </div>
                <div class="menu">
                    <ul id="simple-menu">
                        <li><input type="button" onclick="afficherc();" value="Mes Infos"/></li>
                        <li><input type="button" onclick="affichera();" value="Mes Amis"/></li>
                        <li><input type="button" onclick="afficherme();" value="Mes Events"/></li>
                        <li><input type="button" onclick="self.location.href='test1.php';" value="Paramètres"/></li>
                        <!--<li><a href="#" title="Mes Infos">Mes Infos</a></li>
                        <li><a href="#" title="Mes Amis">Mes Amis</a></li>
                        <li><a href="test1.php" title="Paramètres">Paramètres</a></li>-->
                    </ul>
                </div>
                <div id="coordonnee">
                    <p id="infoPerso">
                        <!--<span class="titre">Informations Personnelles</span><br/><br/><br/>-->
                        <strong>Pseudo :</strong><?php echo " " . $data['pseudo']; ?><br/><br/>
                        <strong>Prénom :</strong><?php echo " " . $data['prenom']; ?><br/><br/>
                        <strong>Nom :</strong><?php echo " " . $data['nom']; ?><br/><br/>
                        <strong>Sexe :</strong><?php
                        if ($data['sexe'] == 1) {
                            echo " Homme";
                        } else {
                            echo " Femme";
                        }
                        ?><br/><br/>                    
                        <strong>Date de naissance :</strong><?php echo " " . $data['dateDeNaissance']; ?><br/><br/>
                        <strong>Adresse :</strong><?php echo " " . $data['adresse'] . " - " . $data['codePostal'] . " - " . $data['villes']; ?><br/><br/>
                        <strong>E-mail :</strong><?php echo " " . $data['mail']; ?><br/><br/>
                        <strong>Téléphone fixe :</strong><?php echo " " . $data['telephoneFixe']; ?><br/><br/>
                        <strong>Téléphone mobile :</strong><?php echo " " . $data['telephoneMobile']; ?><br/><br/>
                        <strong>Site Web :</strong><?php echo " " . $data['siteWeb']; ?>
                    </p>
                    <!--<p id="infoPro">
                        <span class="titre">Informations Professionelles</span><br/><br/><br/>
                        <strong>Société :</strong> Martin&Co<br/><br/>
                        <strong>Adresse :</strong>  21 rue d'ici - 95410 - GROSLAY<br/><br/>
                        <strong>Activité :</strong> Organisation d'événements<br/><br/>
                        <strong>Profession :</strong> PDG<br/><br/>
        
                    </p>-->
                    <p id="preference">
                        <strong>Profession :</strong><?php echo " " . $data['profession']; ?><br/><br/>
                        <strong>Loisirs :</strong><?php echo " " . $data['loisirs']; ?><br/><br/>
                        <strong>Préférence événements :</strong><?php echo " " . $data['preference']; ?><br/><br/>
                        <strong>Description :</strong><br/><br/>
                        <?php echo " " . $data['description']; ?>

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
                <div id="mesEvents" style="display:none;">
                    <?php
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
            <?php } ?>
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
    </body>
</html>
