
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>

    <body>

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
        $ID=$_GET['ID'];
        echo $ID;
        $reponse = $bdd->query('SELECT * FROM event WHERE event.ID='.$ID);
        while ($donnees = $reponse->fetch())
{
	echo '<div class = "imageDetail">

			<img alt="Photo de l\'évenement" src= "'.$donnees['photo'].'" title="Nom de l\'&eacute;v&egrave;nement." height="300" width="240"/>
             
		</div>
		<div>	
			<p class="titreDetailEvent">'.$donnees['nom'].'</p>
             
			<p class="sousTitreThemeDetail">'.$donnees['theme'].' - '.$donnees['type'].'</p>
             
			<p class="sousTitreLieuDetail">Adresse de l\'&eacute;v&egrave;nement : </br>8 avenue Notre Dame des Champs</br>75006 Paris</p>
         
		</div>
          
		  
		<div>
            
			<p class="sousTitreLieuDetail">Date de l\'&eacute;v&egrave;nement : 12/12/12 </br>Budget : 15 €<span style="margin-left:50px;">Places dispo : 47</br>Lu - Ma - Me - Je - Ve - Sa - Di</p>         		
		</div>

		<div>
			<p class="evenementDetailDescription"><span style="margin-left:70px;"></span></p>
		</div>';
}$reponse->closeCursor();
        ?>
    </div>
    
</div>
                  




            </article>
        </section>


<?php include("footer.php"); ?>



    </body> 
</html>
