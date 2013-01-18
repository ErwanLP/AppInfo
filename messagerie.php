<!DOCTYPE html>
<html>


    <?php include("head.php"); ?>

    <body>


        <?php
        session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
        ?>
        <?php
        if (!empty($_SESSION['ID'])) {
            echo "connecté";
            echo $_SESSION['ID'];
            if (!empty($_SESSION['SWITCH'])) {
                echo $_SESSION['SWITCH'];
            }
        } else {

            echo "non connecté";
        }
        ?>

        <section>
            <h1>MESSAGERIE:</h1>

            <?php
            $idProfil = $_SESSION['ID'];
            $typeProfil = $_SESSION['SWITCH'];

            if (isset($_GET['idAutre'])) {
                $idAutre = $_GET['idAutre'];
                $result = $bdd->query('SELECT  * FROM  messagerie WHERE (id_des =  "' . $idProfil . '" OR id_exp ="' . $idProfil . '") AND (id_des = "' . $idAutre . '" OR id_exp ="' . $idAutre . '") ORDER BY date');
            } else {
                $result = $bdd->query('SELECT  * FROM  messagerie WHERE (id_des =  "' . $idProfil . '" OR id_exp ="' . $idProfil . '") ORDER BY date');
            }


            while ($data = $result->fetch()) {
                $iddesCour = $data['id_des'];
                if ($iddesCour == $idProfil) {
                    $destinataire = "vous";
                } else {
                    $idAutre = $iddesCour;
                    $typedesCour = $data['type_des'];
                    $resultCour = $bdd->query('SELECT  pseudo FROM  ' . $typedesCour . ' WHERE ID =  "' . $iddesCour . '"');
                    while ($dataCour = $resultCour->fetch()) {
                        $destinataire = $dataCour['pseudo'];
                    }
                }$resultCour->closeCursor();
                $idexpCour = $data['id_exp'];
                if ($idexpCour == $idProfil) {
                    $expediteur = "vous";
                } else {
                    $idAutre = $idexpCour;
                    $typeexpCour = $data['type_exp'];
                    $resultCour = $bdd->query('SELECT  pseudo FROM  ' . $typeexpCour . ' WHERE ID =  "' . $idexpCour . '"');
                    while ($dataCour = $resultCour->fetch()) {
                        $expediteur = $dataCour['pseudo'];
                    }
                }$resultCour->closeCursor();
                ?> 



                <div class ="message"><h4>De <?php echo $expediteur ?> à <?php echo $destinataire ?> :</h4>
                    <?php
                    $message = $data['message'];
                    echo $message;
                    if (!isset($_GET['idAutre'])) {
                        ?> <br/><a href="messagerie.php?idAutre=<?php echo $idAutre ?>">Voir la conversation entière</a> 
                        <br/><br/>
                    <?php } ?>    
                </div> 

                <?php
            } $result->closeCursor();


            if (isset($_GET['idAutre'])) {
                ?> 
               
                <form action="traitMessagerie.php" method="post">
                     Nouveau message :<input type="text" name="message" class="message">
                    <input type="hidden" name="idAutre" value="<?php echo $idAutre ?>">
                    <input type="submit" value="Submit">
                </form>
            <?php } else { ?>
                <form action="traitMessagerie.php" method="post">
                     Destinataire : 
                    <input type="text" name="pseudoAutre" value=""><br/>
                    Nouveau message :
                    <input type="text" name="message" class="message">
                    
                    <input type="submit" value="Submit">
                </form>
            <?php }
            ?>

        </section>

    </body>
</html>