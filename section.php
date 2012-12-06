<section>
    <aside class ="new">
        <div class ="eventNew">

        </div>
    </aside>

    <aside class ="navg">
        <?php include ("arbre.php"); ?>
    </aside>

    <?php if ($_SESSION['SWITCH'] = "organisateur") {
        ?>
        <aside class ="EventsButton">
            <a href="creationEvenement.php"> <img src="EventsButton.png" alt= "nom de ton image"> </a>        
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
            <br/>
            <p> Top Evenement: <br/><br/>
                1 - Evenement <br/>
                2 - Evenement <br/>
                3 - Evenement <br/>
                4 - Evenement <br/>
                5 - Evenement <br/>
                6 - Evenement <br/>
                7 - Evenement <br/>
                8 - Evenement <br/>
                9 - Evenement <br/>
                10 - Evenement <br/>
            </p>
        </div>
    </article>
</section>





