<?php
session_start();
include("start.php");
include("header.php");

include("nav.php");
?>

<section>
    <aside class ="new">
        <?php include('nouveauteEvenement.php'); 

       
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
    include('eviterMessageAvertissement.php');
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    ?>           
    <div id="livre">

        <?php
        if (isset($_POST['pseudo']) AND isset($_POST['message'])) {
            $pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
            $message1 = mysql_real_escape_string(htmlspecialchars($_POST['message']));
            $message = nl2br($message1);
            $bdd->query('INSERT INTO livredor(pseudo,message,date) VALUES( "' . $pseudo . '","' . $message . '",NOW())');
            $_POST = array();
        }
        ?>
        <div id = "gauche" >
            <?php
            $nombreDeMessagesParPage = 3;
            $retour = $bdd->query('SELECT COUNT(*) AS nb_messages FROM livredor');
            $donnees = $retour->fetch();
            $totalDesMessages = $donnees['nb_messages'];
            $nombreDePages = ceil(($totalDesMessages / 2) / $nombreDeMessagesParPage);
            ?>
            <div id="pageLivreOr">
                <?php
                echo 'Page : ';
                for ($i = 1; $i <= $nombreDePages; $i++) {
                    echo '<a href="livredor.php?page=' . $i . '">' . $i . '</a> ';
                }
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                ?>
            </div>
            <?php
            $premierMessageAafficher = ($page - 1) * $nombreDeMessagesParPage;

            $reponse = $bdd->query('SELECT * FROM livredor WHERE MOD(id,2)=0 ORDER BY id DESC LIMIT ' . $premierMessageAafficher . ', ' . $nombreDeMessagesParPage);

            while ($donnees = $reponse->fetch()) {
                ?>
                <span class="pseudo">
                    <?php
                    echo '&nbsp&nbsp&nbsp&nbsp&nbsp' . $donnees['pseudo'] . '';
                    ?>
                </span>
                <?php
                echo 'a &eacute;crit le ' . $donnees['date'] . ' : ';
                ?>
                <div class="com">

                    <?php
                    echo '' . $donnees[
                    'message'] . '';
                    ?>

                </div><br/>

                <?php
            }

            $reponse->closeCursor();
            ?>

        </div>
        <div id="droite">
            <?php
            $reponse1 = $bdd->query('SELECT * FROM livredor WHERE MOD(id,2)=1 ORDER BY id DESC LIMIT ' . $premierMessageAafficher . ', ' . $nombreDeMessagesParPage);

            while ($donnees = $reponse1->fetch()) {
                ?>
                <span class="pseudo">
                    <?php
                    echo '&nbsp&nbsp&nbsp&nbsp&nbsp' . $donnees['pseudo'] . '';
                    ?>
                </span>
                <?php
                echo 'a &eacute;crit le ' . $donnees['date'] . ' : ';
                ?>
                <div class="com">

                    <?php
                    echo '' . $donnees[
                    'message'] . '';
                    ?>

                </div><br/>

                <?php
            }

            $reponse->closeCursor();
            ?>
        </div>
    </div>
    <?php if (isset($_SESSION['SWITCH']) AND ($_SESSION['SWITCH'] == "organisateur" OR $_SESSION['SWITCH'] == "participant") AND $_SESSION['ID'] != null){ ?>
    <form method="post" action="livredor.php">
        <p id="livrepost">
            <label for="commentaire">
                Que pensez-vous de notre site ?
            </label>
            <br /><br />
            Pseudo : <input name="pseudo" required /><br /><br />
            
            <textarea name="message" id="commentaire" rows="10" cols="50"placeholder="&Eacute;crivez votre texte en 400 caract&egrave;res maximum" onkeyup="javascript:MaxLengthTextarea(this, 400);" required></textarea><br/>
            <input type="submit" value="Envoyer" /> <input type="reset" value="Effacer" />
               
        </p>
    </form>
         <?php }?>
</section>
<?php include("footer.php"); ?>
<script type="text/javascript">
    function MaxLengthTextarea(objettextarea,maxlength){
        if (objettextarea.value.length > maxlength) {
            objettextarea.value = objettextarea.value.substring(0, maxlength);
            var message = 'Votre texte ne doit pas dépasser '+maxlength+' caractères!';
            alert(message);
        }
    }
</script>