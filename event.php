<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>

    <body>

        <?php session_start(); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>
        
        <?php include("Recherche.php"); ?>


        <section>

            <article  class ="articleOnglet">  
                <div class="titresection" class="titreArticle">
                    <h2><span>Spectacle</span></h2>
                </div>

                <?php


//switch ($GET_onglet) {
    //case"spectacle";
                
              //  if ($_GET['onglet'] == "spectacle"){
        
        /*        
                
           <!--   <div id="navinter">
                    <ul>
                        <li><a href="event.php?onglet=spectacle&sousOnglet=comedieMusicale" >Com&eacute;die Musicale</a></li> 
                        <li><a href=#>Th&eacute;atre</a></li>
                        <li><a href=#>Caf&eacute;</a></li>
                        <li><a href=#>Cabaret</a></li>
                        <li><a href=#>Dance</a></li>
                        <li><a href=#>Son et lumi&egrave;re</a></li>
                        <li><a href=# >Op&eacute;ra</a></li> 
                        <li><a href=#>Cirque</a></li>
                        <li ><a href=#>One Man Show</a></li>
                        <li><a href=#>Spectacle de rue</a></li>

                    </ul>
                </div> 
           -->*/
                
                    
               // }
      //  break;
  //  default:
      //  echo "Ne change pas d'URL gros nul !";
//}
?>

      
      
      <!- <?php include("navinter.php"); ?> 

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
                            <div class ="texteEvent">
                                 <h1><?php echo $data['nomEvent']; ?></h1>
                                <strong>Adresse:</strong><br/><?php echo $data['lieuEvent']; ?><br/><span><?php echo $data['lieuEvent']; ?></span><br/><br/>
                                <strong>Date et Heure:</strong><br/><?php echo $data['dateEvent']; ?><br/><br/>
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
            <?php include("aside.php"); ?>
        </section>


        <?php include("footer.php"); ?>



    </body>
</html>
