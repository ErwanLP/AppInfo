<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>

    <body>

        <?php session_start(); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>


        <section>

            <article  class ="articleOnglet">  
                <div class="titresection" class="titreArticle">
                    <h2><span>Spectacle</span></h2>
                </div>

                <div id="navinter">
                    <ul>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=comedieMusicale" >Com&eacute;die Musicale</a></li> <!-- Liste des liens du sous-menu -->
                        <li><a href=#>Th&eacute;atre</a></li>
                        <li><a href=#>Caf&eacute;</a></li>
                        <li><a href=#>Cabaret</a></li>
                        <li><a href=#>Dance</a></li>
                        <li><a href=#>Son et lumi&egrave;re</a></li>
                        <li><a href=# >Op&eacute;ra</a></li> <!-- Liste des liens du sous-menu -->
                        <li><a href=#>Cirque</a></li>
                        <li ><a href=#>One Man Show</a></li>
                        <li><a href=#>Spectacle de rue</a></li>

                    </ul>
                </div>

                <div class="pageOnglet">

                    <?php
                    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
                    if (!isset($_GET['sousOnglet'])) {
                        $result = $bdd->query('SELECT * FROM  event LIMIT 0 , 30');
                    } else {
                        $result = $bdd->query('SELECT  * FROM  event WHERE typeEvent =  "' . $_GET['sousOnglet'] . '"');
                    }

                    /*  $result = $bdd->query('SELECT "'.$_GET['sousOnglet'].'"FROM  event LIMIT 0 , 30'); */
                    /* $result = $bdd->query('SELECT ' . $_GET['sousOnglet'] . 'FROM  event LIMIT 0 , 30'); */
                    /* $result = $bdd->query('SELECT  * FROM  event WHERE typeEvent =  "'.$_GET['sousOnglet'].'"');  <------important */
                    /* $result = $bdd->query('SELECT  * FROM  event WHERE typeEvent =  "' . echo $_GET['sousOnglet']; . '"'); */
                    /* $result = $bdd->query('SELECT * FROM  event LIMIT 0 , 30'); */
                    while ($data = $result->fetch()) {
                        ?>
                        <div class ="evenement"><br/>
                                 <h1><?php echo $data['nomEvent']; ?></h1>
                            <img class = "imageflottante" alt="Photo de évenement" src= <?php echo $data['photoEvent'] ?>/>        
                       
                            <p class="detail"> 
                                <strong>Adresse:</strong><?php echo $data['lieuEvent']; ?><br/>
                                <span><?php echo $data['lieuEvent']; ?></span> <br/>
                                <strong>Date et Heure:</strong><?php echo $data['dateEvent']; ?><br/>
                                <strong>Prix:</strong> 30€ 
                                <strong>Description:</strong><?php echo $data['description']; ?></p>
                            <img src="img/etoile.png" class="etoile" alt="Note" />
                            <p id="note">(5,0 sur 5,0)</p>
                            <p id="bouton1">Voir Plus de Détails</p>
                            <p id="bouton2">Voir Commentaires</p>
                            <p id="bouton3">Réserver</p>
                        </div>
                        <?php
                    }

                    $result->closeCursor();
                    ?>





            </article>
            <?php include("aside.php"); ?>
        </section>


        <?php include("footer.php"); ?>



    </body>
</html>
