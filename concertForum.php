<?php
session_start();
$titre = 'concert';
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
<?php if (isset($_SESSION['SWITCH']) AND ($_SESSION['SWITCH'] == "organisateur" OR $_SESSION['SWITCH'] == "participant" ) 
                AND $_SESSION['ID'] != null) { ?>
        <div class="creerTopic">
               <a href="ajouterSujet.php?idSouscategorie=9"> Ajouter un sujet</a>
        </div>
<?php }?>
        <div class="backPage">
            <a href="indexForum.php" alt="retour à l'accueil du forum" title="Retour à l'accueil du forum"> Retour à l'accueil</a>
        </div>

        <?php
        $tab_info_concert = array();
        $var_tab_info_array = 0;
        $req = $bdd->query('(SELECT organisateur.pseudo,topicforum.* FROM topicforum, souscategorieforum,organisateur WHERE souscategorieforum.ID = 9 
            AND topicforum.id_souscategorie = souscategorieforum.ID
            AND topicforum.id_organisateur = organisateur.id
            )
            UNION 
            (
            SELECT participant.pseudo,topicforum.* FROM topicforum,souscategorieforum,participant WHERE souscategorieforum.ID=9
             AND topicforum.id_souscategorie = souscategorieforum.ID
            AND topicforum.id_participant = participant.id)');
        while ($donnees = $req->fetch()) {
            $tab_info_concert[$var_tab_info_array][0] = $donnees["nom"];
            $tab_info_concert[$var_tab_info_array][1] = $donnees["commentaire"];

            $tab_info_concert[$var_tab_info_array][2] = $donnees["date_creation"];
            $tab_info_concert[$var_tab_info_array][3] = $donnees["id"];
            $tab_info_concert[$var_tab_info_array][4] = $donnees["pseudo"];
            $var_tab_info_array++;
        }
        ?>

        <div class="navigationForum">
            <div class="sousMenuBasculeForum">
                <span> Concert </span>
                <div class="sousMenuForumBeta">
                    <table class="affichageTableau">
                        <tr class="barreDeTitre">
                            <th class="sujet"> Sujet </th>
                            <th class="dernierMessage"> Dernier message </th>
                            <th class="auteur"> Auteur </th>
                            <th class="dateDecreation"> Date de cr&eacute;ation </th>
                        </tr>
                        <?php for ($a = 0; $a < count($tab_info_concert); $a++) {
                            ?>
                            <tr class="affichageSujet">
                                <td class="contenuMessage"><a href="commentaireForum.php?idTopic=<?php echo $tab_info_concert[$a][3] ?>&titreTopic=<?php echo $tab_info_concert[$a][0] ?>"><?php echo $tab_info_concert[$a][0]; ?></a></td>
                                <td class="message"><?php echo $tab_info_concert[$a][1]; ?></td>
                                <td class="auteur">Mohamed</td>
                                <td class="date"><?php echo $tab_info_concert[$a][2]; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </article>
</section>
<?php include('footer.php'); ?>


