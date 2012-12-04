<?php
if (!empty($_SESSION['ID'])) {
    ?>
    <section>
        <aside class ="new">
            <div class="image">
                <p class="blanc"> Bonjour chèrs internautes ! Voici les dernières news du site :<br />
                <table image="2"> <tr> <td> <marquee> <a href="page2.php"> Ce soir le Cabaret Le Moulin Rouge [..]</a> <a href="page3.php"> Au cercle d'or, spectacle exceptionnel [..]</a> </marquee> </td> </tr> </table> <!-- ici dynamique les dernières news s'affichent ici --> 
                </p>
            </div>
        </aside>

        <aside class ="navg">
            <?php include ("arbre.php"); ?>
        </aside>

        <aside class ="toporg">
        </aside>

        <article>
        </article>
    </section>
    <?php
} else {
    ?>
    <section>
        <aside class ="new">
            <div class="image">
                <p class="blanc"> Bonjour chèrs internautes ! Voici les dernières news du site :<br />
                <table image="2"> <tr> <td> <marquee> <a href="page2.php"> Ce soir le Cabaret Le Moulin Rouge [..]</a> <a href="page3.php"> Au cercle d'or, spectacle exceptionnel [..]</a> </marquee> </td> </tr> </table> <!-- ici dynamique les dernières news s'affichent ici --> 
                </p>
            </div>
        </aside>

        <aside class ="navg">
            <?php include ("arbre.php"); ?>
        </aside>

        <aside class ="toporg">
        </aside>

        <article>
        </article>
    </section>
    <?php
}
?>   









