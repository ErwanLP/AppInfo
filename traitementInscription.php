<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>

        <?php include("BDD.php"); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>
        
        <?php include("Recherche.php"); ?>

        <section>
            <article>
                <div class="titreacticle">
                    <h2><span>Traitement Connection</span></h2>
                </div>
                <div class="page">
                    <?php
                    if (isset($_POST['nomDeCompte']) && isset($_POST['mailCompte']) && isset($_POST['mdp']) && isset($_POST['mdp2'])) {
                        $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');

                        /* echo 'Bonjour ' . $_POST['nomDeCompte']; */
                        $nomDeCompte = $_POST['nomDeCompte'];
                        $mdp = sha1($_POST['mdp'] . "erwan");
                        $mdp2 = sha1($_POST['mdp2'] . "erwan");
                        $mailCompte = $_POST['mailCompte'];



                        $result = $bdd->query('SELECT mailCompte FROM compte WHERE mailCompte = "' . $mailCompte . '"');
                        $booleantest = FALSE;
                        while ($data = $result->fetch()) {
                            if (($data['mailCompte'] == $mailCompte) || ($mdp != $mdp2) || (strlen($mdp)<6) || (strlen($mdp)>15)) {
                                $booleantest = TRUE;
                            }
                        }
                         $result->closeCursor();
                         $result =null;
                        if (!$booleantest) {
          
                            echo $nomDeCompte;
                            echo $mdp;
                            echo $mailCompte;
                           $a = $bdd->query("INSERT INTO compte(nomDeCompte, mdp, mailCompte) VALUES ('$nomDeCompte','$mdp','$mailCompte')");
                             echo ("INSERT INTO compte(nomDeCompte, mdp, mailCompte) VALUES ('$nomDeCompte','$mdp','$mailCompte')");
      print_r($a);
                            /*$bdd->query("INSERT INTO event(nomEvent, lieuEvent, description, dateEvent, typeEvent) VALUES ('$nomEvent','$lieuEvent','$description','$dateEvent','$typeEvent')");*/

                            echo 'Vous etes inscrit';
                        } else {
                            echo 'Le compte existe deja ou les mdp sont differents ou le mdp est trop grand /trop petit';
                        }
                    } else {
                        echo 'Erreur !';
                    }
                    ?>


                </div>
            </article>
            <?php include("aside.php"); ?>
        </section>

        <?php include("footer.php"); ?>


    </body>
</html>

















