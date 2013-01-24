<?php
session_start();
$titre = 'index du forum';
include('start.php');
include('BDD.php');
?>
<?php /* include("head.php"); */ ?>
<?php
include("header.php");

include("nav.php");
?>

<section>
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

    <aside class ="navg">
        <?php include ("arbre.php"); ?>
    </aside>
<?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=1');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet1=$donnees["count(topicforum.id)"];
  }?>
    
   <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=1 ');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet1 = $donnees['nom'];
   }?> 
    <article>

        <h2><span style="color:#2040c0;"> Forum </span></h2>

        <div class="navigationForum">
            <div class="sousMenuBasculeForum">
                <span>Discussion g&eacute;n&eacute;rale</span>
                <div class="sousMenuForumAlpha">
                    <table class="affichageTableau">
                        <tr class="barreDeTitre">
                            <th> Sections</th>
                            <th> Nombre de sujets/messages </th>
                            <th> Dernier Sujet </th>
                        </tr>
                        <tr class="affichageSujet">
                            <td><a href="souhait.php">Souhait</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet1.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet1;?></td>
                        </tr>
                        <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=2');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet2=$donnees["count(topicforum.id)"];
  }?>
                        
                        
                        <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=2 ');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet2 = $donnees['nom'];
   }?> 
                        <tr class="affichageSujet">
                            <td><a href="taverne.php">Taverne</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet2.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet2;?></td>
                        </tr>
                                   
                        <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=3');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet3=$donnees["count(topicforum.id)"];
  }?>
                        
                        <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=3 ');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet3 = $donnees['nom'];
   }?> 
                        
                        <tr class="affichageSujet">
                            <td><a href="presentation.php">Pr&eacute;sentation</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet3.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet3;?></td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="sousMenuBasculeForum">
                <span>&Eacute;v&eacute;nement</span>
                <div class="sousMenuForumBeta">
                    <table class="affichageTableau">
                        <tr class="barreDeTitre">
                            <th>Sections</th>
                            <th>Nombre de sujets/messages</th>
                       
                            <th>Dernier Sujet</th>

                        </tr>
                                   
                        <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=4');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet4=$donnees["count(topicforum.id)"];
  }?>
                        
                        <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=4 ');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet4 = $donnees['nom'];
   }?> 
                        
                        <tr class="affichageSujet">
                            <td><a href="spectacleForum.php">Spectacle</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet4.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet4;?></td>
                        </tr>
                        
                                   
                        <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=5');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet5=$donnees["count(topicforum.id)"];
  }?>
                        
                        <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=5 ');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet5 = $donnees['nom'];
   }?> 
                         <tr class="affichageSujet">
                            <td><a href="expositionForum.php">Exposition</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet5.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet5;?></td>
                        </tr>
                          <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=6');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet6=$donnees["count(topicforum.id)"];
  }?>
           
                        <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=6');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet6 = $donnees['nom'];
   }?> 
                         <tr class="affichageSujet">
                            <td><a href="restaurationForum.php">Restauration</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet6.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet6;?></td>
                        </tr>
                          <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=7');
  ?>  
                        
     
      <?php while ($donnees = $req->fetch()) {
            $numSujet7=$donnees["count(topicforum.id)"];
  }?>
                        
                                            <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=7 ');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet7 = $donnees['nom'];
   }?>
                        
                         <tr class="affichageSujet">
                            <td><a href="soireeForum.php">Soiree</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet7.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet7;?></td>
                        </tr>
                          <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=8');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet8=$donnees["count(topicforum.id)"];
  }?>
                        
                        <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=8 ');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet8 = $donnees['nom'];
   }?> 
                        
                         <tr class="affichageSujet">
                            <td><a href="barForum.php">Bar</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet8.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet8;?></td>
                        </tr>
                          <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=9');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet9=$donnees["count(topicforum.id)"];
  }?>
                        
                        <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=9 ');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet9 = $donnees['nom'];
   }?> 
                        
                         <tr class="affichageSujet">
                            <td><a href="concertForum.php">Concert</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet9.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet9;?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="sousMenuBasculeForum">
                <span>Organisateur</span>
                <div class="sousMenuForumBeta">
                 <table class="affichageTableau">
                        <tr class="barreDeTitre">
                            <th>Sections</th>
                            <th>Nombre de sujets/messages</th>
                       
                            <th>Dernier Sujet</th>

                        </tr>
                        
                          <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=10');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet10=$donnees["count(topicforum.id)"];
  }?>
                        
                        <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=10 ');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet10 = $donnees['nom'];
   }?> 
                        <tr class="affichageSujet">
                            <td><a href="spectacleOrgForum.php">Spectacle</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet10.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet10;?></td>
                        </tr>
                          <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=11');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet11=$donnees["count(topicforum.id)"];
  }?>
                        
                        <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=11');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet11 = $donnees['nom'];
   }?> 
                         <tr class="affichageSujet">
                            <td><a href="expositionOrgForum.php">Exposition</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet11.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet11;?></td>
                        </tr>
                          <?php $req=$bdd->query('SELECT count(topicforum.id) FROM topicforum,souscategorieforum WHERE
    topicforum.id_souscategorie=souscategorieforum.id
    AND souscategorieforum.ID=12');
  ?>          
      <?php while ($donnees = $req->fetch()) {
            $numSujet12=$donnees["count(topicforum.id)"];
  }?>
                        
                        <?php $req=$bdd->query('SELECT topicforum.nom FROM topicforum,souscategorieforum WHERE
       topicforum.id_souscategorie=souscategorieforum.id
       AND souscategorieforum.ID=12 ');
   
   while ($donnees = $req->fetch()) {
          $dernierSujet12 = $donnees['nom'];
   }?> 
                       
                         <tr class="affichageSujet">
                            <td><a href="soireeOrgForum.php">Soirée</a></td>
                            <td><?php echo "Nombre de sujet(s) :  ".$numSujet12.  "/  Nombre de message(s) : "?></td>
                            <td><?php echo $dernierSujet12;?></td>
                        </tr>
                       </table>   
                </div>
            </div>
            <div class="sousMenuBasculeForum">
                <span style="border:3px solid black;background-color:#666;">Aide et Support</span>
                <div class="sousMenuForumBeta">

                </div>
            </div>
        </div>
    </article>
</section>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready( function () {
        // On cache les sous-menus :
        $(".navigationForum div.sousMenuForumBeta").hide();
        // On sélectionne tous les items de liste portant la classe "sousMenuBascule"
        // et on remplace l'élément span qu'ils contiennent par un lien :
        $(".navigationForum div.sousMenuBasculeForum span").each( function () {
            // On stocke le contenu du span :
            var TexteSpan = $(this).text();
            $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + TexteSpan + '</a>') ;
        } ) ;

        // On modifie l'évènement "click" sur les liens dans les items de liste
        // qui portent la classe "toggleSubMenu" :
        $(".navigationForum div.sousMenuBasculeForum > a").click( function () {
            // Si le sous-menu était déjà ouvert, on le referme :
            if ($(this).next("div.sousMenuForumBeta:visible").length != 0) {
                $(this).next("div.sousMenuForumBeta").slideUp("normal");
            }
            // Si le sous-menu est caché, on ferme les autres et on l'affiche :
            else {
                $(".navigationForum div.sousMenuForumBeta").slideUp("normal");
                $(this).next("div.sousMenuForumBeta").slideDown("normal");
            }
            // On empêche le navigateur de suivre le lien :
            return false;
        });
    } ) ;
</script>
<?php include("footer.php");
?>

