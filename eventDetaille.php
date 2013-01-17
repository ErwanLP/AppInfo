
    <?php include("start.php"); ?>

   

        <?php session_start(); ?>
        
        <?php include("BDD.php");?>

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
        $id=$_GET['id'];
        echo $id;
        $reponse = $bdd->query('SELECT * FROM event WHERE event.ID='.$id);
        //echo $reponse['nom'];
        while ($donnees = $reponse->fetch())
{
	echo '<br/>'.$donnees['nom'] . '<br />';
        echo '<a href="miseEnformeEventDetaille.php">Clicquer ici</a>';
}$reponse->closeCursor();
        ?>
    </div>
   

            </article>
        </section>


<?php include("footer.php"); ?>



