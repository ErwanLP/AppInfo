<?php
session_start();
$titre = 'nouveau Comentaire';
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
            <a href="souhait.php" alt="page précédente" title="retour à la page précédente">Page précédente</a>
        </div>

        <div class="backPage">
            <a href="indexForum.php" alt="retour à l'accueil forum" title="Retour à l'accueil forum">Retour à Accueil </a>
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
        //$req = $bdd->query('SELECT * FROM participant, organisateur, topicforum WHERE ( topicforum.id_participant = participant.ID OR topicforum.id_organisateur = organisateur.ID ) AND topicforum.id ="' . $ID_topicforum . '"');
        //$req = $bdd->query('SELECT * FROM topicforum WHERE topicforum.id = "' . $ID_topicforum . '" LEFT OUTER JOIN participant ON topicforum.id_participant = participant.ID LEFT OUTER JOIN organisateur ON topicforum.id_organisateur = organisateur.ID');
        //$resultp = $bdd->query('SELECT forummessage.id_participant FROM forummessage, topicforum WHERE forummessage.id_topic = topicforum.id AND topicforum.id = "' . $ID_topicforum . '"');
        //$resulto = $bdd->query('SELECT forummessage.id_organisateur FROM forummessage, topicforum WHERE forummessage.id_topic = topicforum.id AND topicforum.id = "' . $ID_topicforum . '"');
        //$req = $bdd->query('SELECT forummessage.date_creation, forummessage.message, participant.pseudo FROM topicforum, forummessage, participant WHERE ( forummessage.id_topic = topicforum.id AND topicforum.id = "' . $ID_topicforum . '" ) AND  participant.ID = forummessage.id_participant');
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
                        //while ($data = $req1->fetch()) {
                        ?>
                        <div class="positionMessageForum">
                            <div class="titreMessageForum">
                                <p class="positionTitreForum"><strong><?php echo $tab_info_commentaire[$a][2]; ?>
                                    </strong>Posté le : <?php echo substr($tab_info_commentaire[$a][1], 0, 10); ?> &agrave; <?php echo substr($tab_info_commentaire[$a][1], 10); ?></p>
                            </div>
                            <?php echo' <img  style="position:relative;left:-325px;top:13px;" src="img/jerry.jpg" height="150" width="200" /> '; ?>
                            <div class="positionCommentaire">
                                <?php echo $tab_info_commentaire[$a][0]; ?> 
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <?php
                if (isset($_SESSION['SWITCH']) AND $_SESSION['ID'] != null) {
                    include("nouveauCommentaire1.php");
                }
                ?>

            </div>

            <?php
        } else {
            $i = 0;
            $erreurCommentaire = 'NULL';
            $date_creation = date("Y-m-d H:i:s");
            $message = $_POST['message'];
            if (strlen($_POST['message']) < 2) {
                $erreurCommentaire = "Votre commentaire est trop court!";
                ?>
                <br/>
                <br/>
                <?php
                echo'Votre commentaire est trop court!';
                $i++;
            } else if ($i == 0) {

                $req = $bdd->prepare('INSERT INTO forummessage (date_creation,message)
        VALUES (:date_creation,:message)');
                $req->execute(array(
                    'date_creation' => $date_creation,
                    'message' => $message));
                ?>
                <br/>
                <br/>
                <?php
                echo "Votre commentaire a bien été pris en compte";
            }
        }
        ?>
    </article>
</section>
<?php include('footer.php');
?>        
