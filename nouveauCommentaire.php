<?php
session_start();
$titre = 'nouveau Commentaire';
include('start.php');
include('BDD.php');
?>
<?php /* include("head.php"); */ ?>
<?php
/* empty
 * header('Location:http://une.url.fr');
 */
include("header.php");

include("nav.php");
?>

<section>
    <?php
    include('nouveauteEvenement.php');
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
$tab_info_commentaire = array();
$var_tab_info_array = 0;
$req = $bdd->query('SELECT * FROM forummessage ORDER BY id ');
while ($donnees = $req->fetch()) {
    $tab_info_commentaire[$var_tab_info_array][0] = $donnees["message"];
    $tab_info_commentaire[$var_tab_info_array][1] = $donnees["date_creation"];
    $var_tab_info_array++;
}
?>

<?php
if (!isset($_POST['message']) || empty($_POST['message'])) {
    ?>
    <table class="pposition">
        <tr>
            <th class="sujet">je veux angelina jolie</th>
        </tr>
    </table>
    <table>
        <?php for ($a = 0; $a < count($tab_info_commentaire); $a++) {
            ?>    

            <tr>
                <td style="width:10px;" class="photo">photo</td>
                <td class="commentaireEtdate"><?php echo $tab_info_commentaire[$a][0]; ?><br/> posté à <?php echo $tab_info_commentaire[$a][1]; ?></td>
            </tr>
        <?php }
        ?>
    </table>
    <div>
        <form method="post" action="nouveauCommentaire.php" >
            <p>

                <label for="message">soyez polie en écrivant votre commentaire</label> : 
                <br/>
                <textarea  name="message" id="message" rows="10" cols="30" required></textarea>

                <br/>
                <input type="submit" value="valider">
            </p>
        </form>
        <br/>
    </div>
    <?php
} else {
    $i = 0;
    $erreurCommentaire = 'NULL';
    $date_creation = date("Y-m-d H:i:s");
    $message = $_POST['message'];
    ?>
    Revenir a la <a href="index.php">page d'accueil</a>
    <br/>
    <?php
    if (strlen($_POST['message']) < 2) {
        echo'$erreurCommentaire="votre commentaire est très court"';
        $i++;
    } else if ($i == 0) {

        $req = $bdd->prepare('INSERT INTO forummessage (date_creation,message)
        VALUES (:date_creation,:message)');
        $req->execute(array(
            'date_creation' => $date_creation,
            'message' => $message));

        echo "votre commentaire a bien été pris en compte";
    }
}
?>

<?php include('footer.php');
?>        


