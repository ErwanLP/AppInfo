<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>

    <body>

        <?php session_start(); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>



        <section>
            <aside class ="navg">
                <?php include ("arbre.php"); ?>
            </aside>

            <aside class ="new">
                <div class ="eventNew">
                    <img class ="photonew" src ="img/new.jpg"/>
                </div>

                <?php
                if (!isset($_SESSION['ID'])) {
                    include("connexion.php");
                }
                if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
                    ?>
                    <div class="positionBouton">
                        <a href="creationEvenement.php"><img src ="img/BoutonCreerEvent.png"/></a>
                    </div>
                    <?php
                }
                ?>

            </aside>

            <article class ="articleevent">                  
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




            </article>
        </section>


<?php include("footer.php"); ?>



    </body> 
</html>
