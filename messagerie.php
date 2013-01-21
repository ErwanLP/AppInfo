<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
?>
<?php
if (!empty($_SESSION['ID'])) {
    echo "connect&eacute;";
    echo $_SESSION['ID'];
    if (!empty($_SESSION['SWITCH'])) {
        echo $_SESSION['SWITCH'];
    }
} else {

    echo "non connect&eacute;";
}
?>

<section>
    <h1>MESSAGERIE:</h1>

    <?php
    $idProfil = $_SESSION['ID'];
    $typeProfil = $_SESSION['SWITCH'];
    $sql = 'SELECT pseudo FROM ' . $typeProfil . ' WHERE ID =  "' . $idProfil . '"';
    $result = $bdd->query($sql);
    echo "<br/>" . $sql;
    while ($data = $result->fetch()) {
        $pseudoProfil = $data['pseudo'];
    }$result->closeCursor();



    if (isset($_GET['pseudoAutre'])) {
        $pseudoAutre = $_GET['pseudoAutre'];
        $sql = 'SELECT  * FROM  messagerie WHERE (pseudo_des =  "' . $pseudoProfil . '" OR pseudo_exp ="' . $pseudoProfil . '") AND (pseudo_exp = "' . $pseudoAutre . '" OR pseudo_exp ="' . $pseudoAutre . '") ORDER BY date';
        $result = $bdd->query($sql);
        echo "<br/>" . $sql;
    } else {
        $sql = 'SELECT  * FROM  messagerie WHERE (pseudo_des =  "' . $pseudoProfil . '" OR pseudo_exp ="' . $pseudoProfil . '") ORDER BY date';
        $result = $bdd->query($sql);
        echo "<br/>" . $sql;
    }


    while ($data = $result->fetch()) {
        $pseudodesCour = $data['pseudo_des'];
        if ($pseudodesCour == $pseudoProfil) {
            $destinataire = "vous";
        } else {
            $pseudoAutre = $pseudodesCour;
            $destinataire = $pseudoAutre;
        }

        $pseudoexpCour = $data['pseudo_exp'];
        if ($pseudoexpCour == $pseudoProfil) {
            $expediteur = "vous";
        } else {
            $pseudoAutre = $pseudoexpCour;
            $expediteur = $pseudoAutre;
        }
        ?> 


        <?php
        $date = $data['date'];
        $date = substr($date, 0, 10)
        ?>
        <div class ="message"><h4>De <?php echo $expediteur ?> à <?php echo $destinataire ?> le <?php echo $date ?> :</h4>

            <?php
            $message = $data['message'];
            echo $message;
            if (!isset($_GET['pseudodAutre'])) {
                ?> <br/><a href="messagerie.php?pseudodAutre=<?php echo $pseudoAutre ?>">Voir la conversation enti&egrave;re</a> 
                <br/><br/>
            <?php } ?>    
        </div> 

        <?php
    } $result->closeCursor();

    //////////////////

    if (isset($_GET['pseudodAutre'])) {
        ?> 

        <form action="traitMessagerie.php" method="post">
            Nouveau message :<input type="text" name="message" class="message" required>
            <input type="hidden" name="pseudoAutre" value="<?php echo $pseudoAutre ?>">
            <input type="submit" value="Submit">
        </form>
    <?php } else { ?>
        <form action="traitMessagerie.php" method="post">
            Destinataire : 
            <input type="text" name="pseudoAutre" value="" required><br/>
            Nouveau message :
            <input type="text" name="message" class="message" required>

            <input type="submit" value="Submit">
        </form>
    <?php }
    ?>

</section>