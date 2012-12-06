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

                </div>
            </aside>

            <article class ="articleevent">                  
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
                $bdd->exec('SET NAMES utf8');
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
                    
                    include('articleevent.php');
                    
                }

                $result->closeCursor();
                ?>




            </article>
        </section>


        <?php include("footer.php"); ?>



    </body> 
</html>
