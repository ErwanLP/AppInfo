<?php
session_start();
$titre = 'nouveau Commentaire';
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

    <article>
        <div class="pagePréc">
            <a href="souhait.php" alt="page précédente" title="retour à la page précédente">Page pr&eacute;c&eacute;dente</a>
        </div>

        <div class="backPage">
            <a href="indexForum.php" alt="retour à l'accueil forum" title="Retour à l'accueil forum">Retour &agrave; l'accueil </a>
        </div>

        <div class="titreTopic">
            <?php
            $id_topic = (isset($_GET['idTopic'])) ? ($_GET['idTopic']) : ("");
            $titre_topic = (isset($_GET['titreTopic'])) ? ($_GET['titreTopic']) : ("");
            ?>
            <strong><?php echo $titre_topic; ?></strong>
        </div>
        
        <?php
        $reqP = $bdd->query('SELECT id from topicforum WHERE id = "' . $id_topic . '"');
        while ($dataa = $reqP->fetch()) {
            $ID_topicforum = $dataa['id'];
           
        }$reqP->closeCursor();

        $tab_info_commentaire = array();
        $var_tab_info_array = 0;

        $req = $bdd->query('(
SELECT participant.pseudo, forummessage.message, forummessage.date_creation 
FROM forummessage, participant, topicforum 
WHERE  ( forummessage.id_topic = topicforum.id AND topicforum.id = "' . $ID_topicforum . '" ) AND participant.ID = forummessage.id_participant
) 
UNION
(
SELECT organisateur.pseudo, forummessage.message, forummessage.date_creation 
FROM forummessage, organisateur, topicforum 
WHERE ( forummessage.id_topic = topicforum.id AND topicforum.id = "' . $ID_topicforum . '" ) AND organisateur.ID = forummessage.id_organisateur
) ORDER BY date_creation');

        /* REQUETE QUI MARCHE AUSSI : */

        /* SELECT forummessage.message, forummessage.date_creation, participant.pseudo AS participant, organisateur.pseudo AS orga
          FROM forummessage
          LEFT OUTER JOIN participant ON participant.ID = forummessage.id_participant
          LEFT OUTER JOIN  organisateur ON organisateur.ID = forummessage.id_organisateur
          WHERE id_topic=1
          ORDER BY date_creation */

        while ($donnees = $req->fetch()) {
            $tab_info_commentaire[$var_tab_info_array][0] = $donnees["message"];
            $tab_info_commentaire[$var_tab_info_array][1] = $donnees["date_creation"];
            $tab_info_commentaire[$var_tab_info_array][2] = $donnees["pseudo"];
            $var_tab_info_array++;
        }

        /* $req1 = $bdd->query('SELECT message, forummessage.id_participant, forummessage.id_organisateur, forummessage.date_creation FROM forummessage, topicforum WHERE forummessage.id_topic = topicforum.id AND topicforum.id = "' . $ID_topicforum . '"');
          while ($data = $req1->fetch()) {
          $mess = $data['message'];
          $idp = $data['id_participant'];
          $ido = $data['id_organisateur'];
          $date = $data['date_creation'];
          }
          if ($idp != 0) {
          $resultp = $bdd->query('SELECT pseudo FROM participant WHERE ID = "' . $idp . '"');
          while ($datap = $resultp->fetch()) {
          $author = $datap['pseudo'];
          }
          $resultp->closeCursor();
          } else {
          $resulto = $bdd->query('SELECT pseudo FROM organisateur WHERE ID = "' . $ido . '"');
          while ($datao = $resulto->fetch()) {
          $author = $datao['pseudo'];
          }
          $resulto->closeCursor();
          } */







        if (!isset($_POST['message']) || empty($_POST['message'])) {
            ?>

            <div class="navigationForum"> 
                <div class="containerMessageForum">
                    <?php
                    for ($a = 0; $a < count($tab_info_commentaire); $a++) {

                        $resultt = $bdd->query('(SELECT ID FROM organisateur WHERE organisateur.pseudo = "' . $tab_info_commentaire[$a][2] . '") UNION (SELECT ID FROM participant WHERE participant.pseudo = "' . $tab_info_commentaire[$a][2] . '")');
                        while ($data1 = $resultt->fetch()) {
                            $IDProfil = $data1['ID'];
                        }$reqP->closeCursor();

                        //while ($data = $req1->fetch()) {
                        ?>
                        <div class="positionMessageForum">
                            <div class="titreMessageForum">
                                <p class="positionTitreForum">

                                    <?php if (isset($_SESSION['ID'])) { ?>

                                        <span><a href="profilBis.php?IDprofil=<?php echo $IDProfil ?>&Pseudo=<?php echo $tab_info_commentaire[$a][2]; ?>" ><?php echo $tab_info_commentaire[$a][2]; ?></a></span>Post&eacute; le : <?php echo substr($tab_info_commentaire[$a][1], 0, 10); ?> &agrave; <?php echo substr($tab_info_commentaire[$a][1], 10); ?></p>

                                <?php } else { ?>

                                    <span><?php echo $tab_info_commentaire[$a][2]; ?></span>Post&eacute; le : <?php echo substr($tab_info_commentaire[$a][1], 0, 10); ?> &agrave; <?php echo substr($tab_info_commentaire[$a][1], 10); ?></p>
                                <?php } ?>

                            </div>
                            <?php echo' <img  style="position:relative;left:-325px;top:13px;" src="img/dye_logo.jpg" height="150" width="200" /> '; ?>
                            <div class="positionCommentaire">
                                <?php echo $tab_info_commentaire[$a][0]; ?> 
                               <br/><br/>
                                    <form method="post" action="traitementSignalement.php">
                                        <select name="motif" id="motif">
                                            <option value="0">Motif</option>
                                            <option value="1">Injurieux</option>
                                            <option value="2">Raciste</option>
                                            <option value="3">Homophobe</option>
                                            <option value="4">Flood</option>
                                        </select>    
                                        <input type="hidden" name ="IDsignaleur" value="<?php echo $_SESSION['ID'] ?>"/>
                                        <input type="hidden" name =" IDmessage" value="<?php echo $a ?>" />
                                        <input type="submit" value="Signaler" />
                                    </form>                           
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <?php
                if (isset($_SESSION['SWITCH']) AND ($_SESSION['SWITCH'] == "organisateur" OR $_SESSION['SWITCH'] == "participant" ) AND $_SESSION['ID'] != null) {
                    include("nouveauCommentaire1.php");
                   
                }
             
                ?>

            </div>

            <?php
        } else {
           // $i = 0;
            //$erreurCommentaire = 'NULL';
            //$date_creation = date("Y-m-d H:i:s");
            //$message = $_POST['message'];
            //$id_topic=$_POST['id_topic'];
            //$pseudo=$_POST['pseudo'];
  
            //if (strlen($_POST['message']) < 2) {
              //  $erreurCommentaire = "Votre commentaire est trop court!";
                ?>
                
                <?php
              //  echo'Votre commentaire est trop court!';
                //$i++;
            //} else if ($i == 0) {

        //$req = $bdd->prepare('INSERT INTO forummessage (date_creation,message,id_participant,id_organisateur,id_topic)
        //VALUES (:date_creation,:message,:pseudo,:pseudo,:id_topic)');
          //      $req->execute(array(
            //        'date_creation' => $date_creation,
              //      'message' => $message,
                //    'id_participant' => $pseudo,
                  //  'id_organisateur' => $pseudo,
                    //'id_topic'=>$id_topic
                    
                    //));
                
                ?>
                
                <?php
              //  echo "Votre commentaire a bien été pris en compte";
          //  }
        }
        ?>
    </article>
</section>
<?php include('footer.php'); ?>        
