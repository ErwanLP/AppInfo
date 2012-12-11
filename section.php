<section>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    $bdd->exec('SET NAMES utf8');
    ?>
    <aside class ="new">
        <div class ="eventNew">
            <img class ="photonew" src ="img/new.jpg"/>

        </div>
    </aside>

    <aside class ="navg">
        <?php include ("arbre.php"); ?>
    </aside>

    <?php if ($_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
        ?>
        <aside class ="EventsButton">
            <a href="creationEvenement.php"> <img src="img/EventsButton.png" alt= "nom de ton image"> </a>        
        </aside>

        <?php
    }
    ?>

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
            $result = $bdd->query('SELECT * FROM event ORDER BY note DESC LIMIT 0 , 10');
            $compte = 1;
            ?><br/><br><br/>            <img src="img/TitreTopEvent.png"/> <br/><img src ="img/barre.jpg"/><br/><br/> <br/><?php
            while ($data = $result->fetch()) {
                /*  echo $compte ." ->". $data['nom'];
                  ?><br/><?php
                  echo '<img src= "' . $data["photo"] . '" height="50" width="40"/>';
                  $compte++;
                  ?><br/><?php */
                echo '<img src= "' . $data["photo"] . '" height="100" width="80"/>';
                echo "   ";
            }
            $result->closeCursor();
            $result = $bdd->query('SELECT * FROM event ORDER BY note DESC LIMIT 0 , 10');
            ?><br/><br/><?php
            while ($data2 = $result->fetch()) {
                ?><br/><?php
            echo $compte . " ->" . $data2['nom'];


            $compte++;
        }
        $result->closeCursor();
        $result = $bdd->query('SELECT * FROM event ORDER BY note DESC LIMIT 0 , 10');
            ?><br/><br/><?php
            while ($data = $result->fetch()) {
                /*  echo $compte ." ->". $data['nom'];
                  ?><br/><?php
                  echo '<img src= "' . $data["photo"] . '" height="50" width="40"/>';
                  $compte++;
                  ?><br/><?php */
                echo '<img src= "' . $data["photo"] . '" height="100" width="80"/>';
                echo "   ";
            }
            $result->closeCursor();
            ?>

        </div>
    </article>
</section>





