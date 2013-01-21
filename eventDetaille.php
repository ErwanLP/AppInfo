
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>

    <body>

        <?php session_start(); ?>

        <?php include("BDD.php"); ?>

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

                <div>
                    <?php
                    $ID = $_GET['ID'];
                    echo $ID;
                    $reponse = $bdd->query('SELECT * FROM event WHERE event.ID=' . $ID);
                    while ($donnees = $reponse->fetch()) {
                        ?><div class = "imageDetail" >

                            <img alt="Photo de l'évènement" src= "<?php echo $donnees['photo'] ?>" title="Nom de l\'&eacute;v&egrave;nement." height="420" width="280"/>

                        </div>
                        <div class ="imageDetail">	
                            <p class="titreDetailEvent"><?php echo $donnees['nom']; ?></p>

                            <p class="sousTitreThemeDetail"><?php echo $donnees['theme'] . ' - ' . $donnees['type']; ?></p>

                            <p class="sousTitreLieuDetail">Adresse de l'&eacute;v&egrave;nement : </br><?php echo $donnees['lieu']; ?></p>

                        </div>


                        <div class ="imageDetail">

                            <p class="sousTitreLieuDetail"><?php if ($donnees['dateFin'] == "0000-00-00") {
                        ?> Ev&egrave;nement ayant lieu le : <?php echo $donnees['dateDebut']; ?>
                                <?php } else {
                                    ?> Ev&egrave;nement ayant lieu du  <?php echo $donnees['dateDebut']; ?> au <?php echo $donnees['dateFin']; ?>
                                <?php }
                                ?>
                                </br></br>Budget : <?php echo $donnees['prix']; ?> €<span style="margin-left:50px;">Places dispo : <?php echo $donnees['placesRestantes']; ?></br></br>Lu - Ma - Me - Je - Ve - Sa - Di</p>         		
                        </div>

                        <div class ="imageDetail">
                            <p class="evenementDetailDescription"><span style="margin-left:70px;"><?php echo $donnees['description']; ?></span></p>
                        </div> <?php
                        }$reponse->closeCursor();
                            ?>
                </div>

                </div>





            </article>
        </section>


        <?php include("footer.php"); ?>



    </body> 
</html>
