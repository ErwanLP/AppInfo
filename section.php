<section>
    <?php
    $bdd->exec('SET NAMES utf8');
    ?>
    <aside class ="new">

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

        if (isset($_GET['valider'])) {
            $valeurInscription = $_GET['valider'];
            if ($valeurInscription == 1) {
                ?>
                <div class="positionMessageInscription">
                    <h2>Bonjour, votre inscription a bien &eacute;t&eacute; prise en compte!</h2>
                </div>
                <?php
            }
        }
        
        include('nouveauteEvenement.php');
        
        ?>

    </aside>

    <aside class ="navg">
        <?php include ("arbre.php"); ?>
    </aside>

    <aside class ="toporg">
        <div class="titreToporg">
            <p> Top Organisateur:</p>

        </div><br/>
        1 - COMEXPOSIUM <br/>
        2 - FeteInfo <br/>
        3 - Kompass <br/>
        4 - Night-Fever-Animation <br/>
        5 - JeffNight <br/>
        6 - Initial-Isefac <br/>
        7 - FlunchJobs <br/>
        8 - SCOexpo <br/>
        9 - Animafac <br/>
        10 - France Festivals <br/>

    </aside>

    <article>
        <!--  <div class ="topevent"> -->
        <div>
            <?php
            $result = $bdd->query('SELECT nom,note,photo FROM event ORDER BY note DESC LIMIT 0 , 12');
            $compte = 1;
            ?><br/><br><br/><img src="img/TitreTopEventv1.1.png"/> <br/><img src ="img/SousTopEventv1.1.png"/><br/><br/> <br/><?php
            $resultat = array();
            $i = 0;
            while ($data = $result->fetch()) {
                $resultat[$i++] = $data;
            }
            $result->closeCursor();
            //print_r($resultat);
            ?>
            <table style="margin-left : 100px;">
                <tr>
                    <td rowspan="3"><?php echo '<img src= "' . $resultat[0]["photo"] . '" height="200" width="160"/>'; ?></td>
                    <td><?php echo $compte++ ?></td>
                    <td rowspan="3"><?php echo '<img src= "' . $resultat[1]["photo"] . '" height="200" width="160"/>'; ?></td>
                    <td><?php echo $compte++ ?></td>
                    <td rowspan="3"><?php echo '<img src= "' . $resultat[2]["photo"] . '" height="200" width="160"/>'; ?></td>
                    <td><?php echo $compte++ ?></td>

                </tr>
                <tr>
                    <td><?php echo $resultat[0]['nom']; ?></td>
                    <td><?php echo $resultat[1]['nom']; ?></td>
                    <td><?php echo $resultat[2]['nom']; ?></td>

                </tr>
                <tr>
                    <td><?php echo $resultat[0]['note']; ?></td>
                    <td><?php echo $resultat[1]['note']; ?></td>
                    <td><?php echo $resultat[2]['note']; ?></td>
                </tr>
                <tr>
                    <td rowspan="3"><?php echo '<img src= "' . $resultat[3]["photo"] . '" height="200" width="160"/>'; ?></td>
                    <td><?php echo $compte++ ?></td>
                    <td rowspan="3"><?php echo '<img src= "' . $resultat[4]["photo"] . '" height="200" width="160"/>'; ?></td>
                    <td><?php echo $compte++ ?></td>
                    <td rowspan="3"><?php echo '<img src= "' . $resultat[5]["photo"] . '" height="200" width="160"/>'; ?></td>
                    <td><?php echo $compte++ ?></td>

                </tr>
                <tr>
                    <td><?php echo $resultat[3]['nom']; ?></td>
                    <td><?php echo $resultat[4]['nom']; ?></td>
                    <td><?php echo $resultat[5]['nom']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $resultat[3]['note']; ?></td>
                    <td><?php echo $resultat[4]['note']; ?></td>
                    <td><?php echo $resultat[5]['note']; ?></td>
                </tr>
                <tr>
                    <td rowspan="3"><?php echo '<img src= "' . $resultat[6]["photo"] . '" height="200" width="160"/>'; ?></td>
                    <td><?php echo $compte++ ?></td>
                    <td rowspan="3"><?php echo '<img src= "' . $resultat[7]["photo"] . '" height="200" width="160"/>'; ?></td>
                    <td><?php echo $compte++ ?></td>
                    <td rowspan="3"><?php echo '<img src= "' . $resultat[8]["photo"] . '" height="200" width="160"/>'; ?></td>
                    <td><?php echo $compte++ ?></td>

                </tr>
                <tr>
                    <td><?php echo $resultat[6]['nom']; ?></td>
                    <td><?php echo $resultat[7]['nom']; ?></td>
                    <td><?php echo $resultat[8]['nom']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $resultat[6]['note']; ?></td>
                    <td><?php echo $resultat[7]['note']; ?></td>
                    <td><?php echo $resultat[8]['note']; ?></td>
                </tr>


            </table> 
        </div>
    </article>
</section>