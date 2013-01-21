<?php
session_start();
$titre = 'Bar';
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

        <div class="creerTopic">
            <a href="ajouterSujet.php" alt="ajouter un sujet" title="Créer un nouveau sujet"> Ajouter un sujet</a>
        </div>

        <div class="backPage">
            <a href="indexForum.php" alt="retour à l'accueil du forum" title="Retour à l'accueil du forum"> Retour à l'accueil</a>
        </div>

        <?php
        $tab_info_bar = array();
        $var_tab_info_array = 0;
        $req = $bdd->query('SELECT topicforum.* FROM topicforum, souscategorieforum WHERE souscategorieforum.ID = 8 AND topicforum.id_souscategorie = souscategorieforum.ID');
        while ($donnees = $req->fetch()) {
            $tab_info_bar[$var_tab_info_array][0] = $donnees["nom"];
            $tab_info_bar[$var_tab_info_array][1] = $donnees["commentaire"];

            $tab_info_bar[$var_tab_info_array][2] = $donnees["date_creation"];
            $tab_info_bar[$var_tab_info_array][3] = $donnees["id"];
            $var_tab_info_array++;
        }
        ?>

        <div class="navigationForum">
            <div class="sousMenuBasculeForum">
                <span> Bar </span>
                <div class="sousMenuForumBeta">
                    <table class="affichageTableau">
                        <tr class="barreDeTitre">
                            <th class="sujet"> Sujet </th>
                            <th class="dernierMessage"> Dernier message </th>
                            <th class="auteur"> Auteur </th>
                            <th class="dateDecreation"> Date de cr&eacute;ation </th>
                        </tr>
                        <?php for ($a = 0; $a < count($tab_info_bar); $a++) {
                            ?>
                            <tr class="affichageSujet">
                                <td class="contenuMessage"><a href="commentaireForum.php?idTopic=<?php echo $tab_info_bar[$a][3] ?>&titreTopic=<?php echo $tab_info_bar[$a][0] ?>"><?php echo $tab_info_bar[$a][0]; ?></a></td>
                                <td class="message"><?php echo $tab_info_bar[$a][1]; ?></td>
                                <td class="auteur">Mohamed</td>
                                <td class="date"><?php echo $tab_info_bar[$a][2]; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </article>
</section>
<?php include('footer.php'); ?>