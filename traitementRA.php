<!DOCTYPE html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
$bdd->exec('SET NAMES utf8');
//connection à la base de données

$theme = $_POST['genre'];
$date = $_POST['date'];
$note = $_POST['note'];
$prix = $_POST['prix'];
$ville = $_POST['ville'];

//SELECT * FROM `event` WHERE theme = "spectacle" and lieu = "Sanssat"

$result = $bdd->query('SELECT * FROM event WHERE theme = "'.$theme.' and date = "'.$date.' and lieu = '.$ville."'");
echo $result;
//envois de la requete sql
// on ferme le curseur



?>




<!--if (($pieces[$i] != "le") || ($pieces[$i] != "la") || ($pieces[$i] != "les") || ($pieces[$i] != " ") || ($pieces[$i] != "de") || ($pieces[$i] != "du") || ($pieces[$i] != "des") || ($pieces[$i] != "au") || ($pieces[$i] != "evenement") || ($pieces[$i] != "soiree")) { // faire un fichier php avec un tableau avec tout les mot bidon 



// faire un fichier php avec un tableau avec tout les mots non voulus 

-->


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

                </div>
            </aside>

            <article class ="articleevent">                  
                <?php
                while ($data = $result->fetch()) {
                    ?>
                    <div class ="evenement"><br/>



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


