<?php
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', ''); 
$bdd->exec('SET NAMES utf8');
//connection à la base de données

$theme = $_POST['genre'];
$date = $_POST['date'];
//$note = $_POST['note'];
//$prix = $_POST['prix'];
$ville = $_POST['ville'];

//SELECT * FROM `event` WHERE theme = "spectacle" and lieu = "Sanssat"

$result = $bdd->query('SELECT * FROM event WHERE theme = "' . $theme . '" AND lieu = "' . $ville . '"');
//echo 'SELECT * FROM event WHERE theme = "' . $theme . '" AND lieu = "' . $ville .'"'
//   SELECT * FROM event WHERE theme = concert AND date = 2012-11-28 AND lieu = paris
//envois de la requete sql
// on ferme le curseur
?>




<!--if (($pieces[$i] != "le") || ($pieces[$i] != "la") || ($pieces[$i] != "les") || ($pieces[$i] != " ") || ($pieces[$i] != "de") || ($pieces[$i] != "du") || ($pieces[$i] != "des") || ($pieces[$i] != "au") || ($pieces[$i] != "evenement") || ($pieces[$i] != "soiree")) { // faire un fichier php avec un tableau avec tout les mot bidon 



// faire un fichier php avec un tableau avec tout les mots non voulus 

-->


<?php session_start(); ?>
    <?php include("start.php"); ?>

        

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>



        <section>
            <aside class ="navg">
                <?php include ("arbre.php"); ?>
            </aside>

            <aside class ="new">
                <?php include('nouveauteEvenement.php'); ?>
                
                <?php
                if (!isset($_SESSION['ID'])) {
                    include("connexion.php");
                }
                if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
                    ?>
                    <div class="positionBouton">
                        <a href="creationEvenement.php"><img src ="img/ampouleCreerEvenement.png"/></a>
                    </div>
                    <?php
                }
                ?>
            </aside>

            <article class ="articleevent">                  
                <?php
                while ($data = $result->fetch()) {
                    include('articleevent.php');
                }

                $result->closeCursor();
                ?>




            </article>
        </section>
 <?php include("footer.php"); ?>
