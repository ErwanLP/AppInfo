<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>


        <?php session_start(); ?>
        <?php include("BDD.php"); ?>

        <?php include("header.php"); ?>

        <?php include("nav.php"); ?>

        <section>
            <article>
                <div class="titreacticle">
                    <h2><span>Traitement Connection</span></h2>
                </div>
                <div class="page">


                    <?php
                    if (isset($_POST['nomDeCompte']) && isset($_POST['mdp'])) {

                        $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');


                        $nomDeCompte = $_POST['nomDeCompte'];
                        $mdp = sha1($_POST['mdp'] . "erwan");




                        $booleantest = FALSE;
                        $resultMDP = $bdd->query('SELECT * FROM compte WHERE nomDeCompte ="' . $nomDeCompte . '"');

                        $data2 = $resultMDP->fetch();
                        if ($data2['mdp'] == $mdp) {
                            $booleantest = TRUE;
                            echo "Tu es connect&eacute ";
                            echo $nomDeCompte;

                            $_SESSION['ID'] = $data2['idCompte'];
                            echo $_SESSION['ID'];
                        }

                        if ($booleantest == FALSE) {
                            $_SESSION['ID'] = '';
                            echo "vous n'avez pas pu etre connecter, verifier votre login et votre mot de passe , si vous n'aver pas de compte créé en un ici";
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

        <?php
        if (!empty($_SESSION['ID'])) {
            include("navConnect.php");
        } else {

            include("navNonConnect.php");
        }
        ?>

    </body>
</html>



