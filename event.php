<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>

    <body>

        <?php session_start(); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>

        <?php include("Recherche.php"); ?>


        <section>
            <aside class ="navg">
                <?php include ("arbre.php"); ?>
            </aside>

            <aside class ="new">
                <div class ="eventNew">

                </div>
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
                    ?>
                    <div class ="evenement"><br/>
                        <div class ="texteEvent">
                            <h1><?php echo $data['nom']; ?></h1>
                            <strong>Adresse:</strong><br/><?php echo $data['lieu']; ?><br/><span><?php echo $data['lieu']; ?></span><br/><br/>
                            <strong>Date et Heure:</strong><br/><?php echo $data['date']; ?><br/><br/>
                            <strong>Prix:</strong><br/>30€ <br/><br/>
                            <strong>Description:</strong><br/> <?php echo $data['description']; ?><br/><br/>
                            <strong>Note:</strong><br/><img src="img/etoile.png" class="etoile" alt="Note" /><p id="note">(5,0 sur 5,0)</p><br/><br/>
                            <p id="bouton1">Voir Plus de Détails</p>
                            <p id="bouton2">Voir Commentaires</p>
                            <p id="bouton3">Réserver</p>
                        </div>
                        <img class = "imageflottante" alt="Photo de évenement" src=  "imgUser/gad_elmaleh.jpeg"/>     

                    </div>
                    <?php
                }

                $result->closeCursor();
                ?>




            </article>
        </section>


        <?php include("footer.php"); ?>



    </body>
</html>
