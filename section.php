<section>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    $bdd->exec('SET NAMES utf8');
    ?>
    <aside class ="new">
        <div class ="eventNew">

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
        <br/>
        <p> Top Organisateur: <br/><br/>
            1 - organisateur <br/>
            2 - organisateur <br/>
            3 - organisateur <br/>
            4 - organisateur <br/>
            5 - organisateur <br/>
            6 - organisateur <br/>
            7 - organisateur <br/>
            8 - organisateur <br/>
            9 - organisateur <br/>
            10 - organisateur <br/>
        </p>
    </aside>

    <article>
        <div class ="topevent">
            <?php
            $result = $bdd->query('SELECT * FROM event ORDER BY note DESC LIMIT 0 , 10');
            $compte = 1;
            ?><br/><br><br/>            <img src="img/TitreTopEvent.png"/> <br/><br/><?php
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





