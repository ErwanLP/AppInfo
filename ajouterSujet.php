<?php
session_start();
$titre = 'index du forum';
include('start.php');
include('bddForum.php');
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


    <?php
    if (!isset($_POST['titre']) && empty($_POST['titre'])) {
        ?>
        <article>
            <div>
                <form method="post" action="ajouterSujet.php">
                    <table>
                        <caption class="titreNouveauSujet">Veuillez ajouter votre sujet :</caption>
                        <tr>
                            <td>
                                <br/><p style="margin-top:30px;margin-left:300px;">Titre du sujet :</p><input style="margin-left:280px;width:500px;border-radius:5px;border: 1px solid #cebd8b;box-shadow: 1px 1px 2px #C0C0C0 inset;" type="text" name="titre" size="50" maxlength="500" style="height:30px;" required/>
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <p style="margin-top:30px;margin-left:300px;"> Commentaire :</p><textarea style="width:500px;height:100px;margin-left:280px;" name="commentaire" id="commentaire" rows="20" cols="100"></textarea>
                        </td>
                        </tr>
                    </table>
                    <input style="margin-left:-60px;" type="reset" value="Effacer">
                    <input type="submit" value="Valider">
                </form>
            </div>
            <?php
        } else {
            $erreurCommentaire = 'NULL';
            $erreurTitre = 'NULL';


            //on recupère les variables
            $i = 0; //variable qui compte le nombre d'erreur
            $date_creation = date("Y-m-d H:i:s");
            $commentaire = ($_POST['commentaire']);
            $nom = ($_POST['titre']);

//vérification du titre du sujet et du commentaire
            if (strlen($nom) < 3) {
                echo'erreurTitre="votre titre est trop court"';
                $i++;
            } else if (strlen($_POST['commentaire']) < 4 && strlen($_POST['commentaire']) > 300) {
                echo'$erreurCommentaire="votre commentaire est soit trop long, soit trop court"';
                $i++;
            } else if ($i == 0) {

                $req = $bdd->prepare('INSERT INTO topicforum (nom,commentaire,date_creation) 
     VALUES (:nom,:commentaire,:date_creation)');
                $req->execute(array(
                    'nom' => $nom,
                    'commentaire' => $commentaire,
                    'date_creation' => $date_creation
                ));

                echo'votre commentaire a bien été pris en compte';
            }
        }
        ?>
    </article>
</section>
<?php include('footer.php'); ?>  
</html>