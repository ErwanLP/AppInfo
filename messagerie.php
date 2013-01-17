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
                $result = $bdd->query('SELECT  * FROM  messagerie WHERE (id_des =  "' . $idProfil . '" OR id_exp ="' . $idProfil . '") AND (id_des = "' . $idAutre . '" OR id_exp ="'.$idAutre.'") ORDER BY date');
                echo 'SELECT  * FROM  messagerie WHERE (id_des =  "' . $idProfil . '" OR id_exp ="' . $idProfil . '") AND (id_des = "' . $idAutre . '" OR id_exp ="'.$idAutre.'") ORDER BY date';
                
                
                
                
            } else {

                $result = $bdd->query('SELECT  * FROM  messagerie WHERE (id_des =  "' . $idProfil . '" OR id_exp ="' . $idProfil . '") AND type_des = "' . $typeProfil . '" ORDER BY date');
                //fail
                echo 'SELECT  * FROM  messagerie WHERE (id_des =  "' . $idProfil . '" OR id_exp ="' . $idProfil . '") AND type_des = "' . $typeProfil . '"';
                echo "<br/>";       
            }    
            
                while ($data = $result->fetch()) {
                    $iddesCour = $data['id_des'];
                    if ($iddesCour == $idProfil) {
                        echo "destinataire vous";
                        echo "<br/>";
                        $destinataire = "vous";
                    } else {
                        $idAutre = $iddesCour;
                        echo "destinataire autre";
                        echo "<br/>";
                        $typedesCour = $data['type_des'];
                        $resultCour = $bdd->query('SELECT  pseudo FROM  ' . $typedesCour . ' WHERE ID =  "' . $iddesCour . '"');
                        echo 'SELECT  pseudo FROM  ' . $typedesCour . ' WHERE ID =  "' . $iddesCour . '"';
                        echo "<br/>";

                        while ($dataCour = $resultCour->fetch()) {
                            $destinataire = $dataCour['pseudo'];
                        }
                    }$resultCour->closeCursor();
                    $idexpCour = $data['id_exp'];
                    if ($idexpCour == $idProfil) {
                        echo "expediteur vous";
                        echo "<br/>";
                        $expediteur = "vous";
                    } else {
                        $idAutre = $idexpCour;
                        echo "expediteur autre";
                        echo "<br/>";
                        $typeexpCour = $data['type_exp'];
                        $resultCour = $bdd->query('SELECT  pseudo FROM  ' . $typeexpCour . ' WHERE ID =  "' . $idexpCour . '"');
                        echo 'SELECT  pseudo FROM  ' . $typeexpCour . ' WHERE ID =  "' . $idexpCour . '"';
                        echo "<br/>";
                        while ($dataCour = $resultCour->fetch()) {
                            $expediteur = $dataCour['pseudo'];
                        }
                    }$resultCour->closeCursor();
                    ?><h4>De <?php echo $expediteur ?> à <?php echo $destinataire ?> :</h4>
                    <?php
                    $message = $data['message'];

                    echo $message;
                    echo "<br/>";
                    echo $idAutre;
                     if (!isset($_GET['idAutre'])) {
                    ?> <br/><a href="messagerie.php?idAutre=<?php echo $idAutre ?>">Voir la conversation entière</a> 
                    <br/><br/>
                    <?php
                     }
                } $result->closeCursor();
            
            ?> 

        </section>

    </body>
</html>