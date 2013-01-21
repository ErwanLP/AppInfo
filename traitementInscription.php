
<?php include("start.php"); ?>

<?php include("header.php"); ?>

<?php include("nav.php"); ?>


<section>
    <article>
        <div class="titreacticle">
            <h2><span>Traitement Inscription</span></h2>
        </div>
        <div class="page">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
            if (isset($_POST['nomDeCompte']) && isset($_POST['mailCompte']) && isset($_POST['mdp']) && isset($_POST['mdp2'])) {

                //Variable

                $mdp = $_POST['mdp'];
                $mdp2 = $_POST['mdp2'];
                $bolmdp = false;
                $bolnom = true;

                //On tets le mdp si on bolmsp = true;

                if ($mdp == $mdp2 && strlen($mdp) > 5 && strlen($mdp) < 20 && (strtolower($mdp) != $mdp) && (strtoupper($mdp) != $mdp) && !is_int($mdp)) {

                    for ($j = 0; $j < 10; $j++) {

                        if (strpos($mdp, "$j") != false) {
                            $bolmdp = true;
                        }
                    }
                }

                // si le mdp est bon un execute le code
                //variable execution

                $nomDeCompte = $_POST['nomDeCompte'];
                $mdp = sha1($mdp . "erwan");
                $mdp2 = sha1($mdp2 . "erwan");
                $mailCompte = $_POST['mailCompte'];

                $result = $bdd->query('SELECT mail FROM compte WHERE mail = "' . $mailCompte . '"'); // on recharle l'utilisateur dans la BDD
                while ($data = $result->fetch()) {
                    if (($data['mailCompte'] == $mailCompte)) {
                        $bolnom = false; // on trouve l'utilisateur don il na aps le droit de s'inscrire
                    }
                }
                $result->closeCursor();
                $result = null;
                $valider = $bolnom && $bolmdp;




                if ($bolnom && $bolmdp) { // si le compte n'existe aps deja
                    /* $a = */
                    $bdd->query("INSERT INTO compte(nomDeCompte, mdp, mail) VALUES ('$nomDeCompte','$mdp','$mailCompte')");
                    //echo ("INSERT INTO compte(nomDeCompte, mdp, mailCompte) VALUES ('$nomDeCompte','$mdp','$mailCompte')");
                    // print_r($a);
                    /* $bdd->query("INSERT INTO event(nomEvent, lieuEvent, description, dateEvent, typeEvent) VALUES ('$nomEvent','$lieuEvent','$description','$dateEvent','$typeEvent')"); */

                    header('Location:index.php?valider=' . $valider);
                } else {
                     header('Location:inscription.php?valider=' . $valider);
                     echo 'Inscription impossible : le compte existe deja ou le mdp n est pas conforme';
                }
            } 
            
            ?>


        </div>
    </article>

    <script type="text/javascript">
        function show_confirm() {
            
            alert("Votre inscription a bien été prise en compte");
            
        }
    </script>

</section>

<?php include("footer.php"); ?>

