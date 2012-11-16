<?php
if (!empty($_SESSION['ID'])) {
    ?>
    <section>
        <article>
            <div class="titreArticle">
                <h2><span> Acceuil</span></h2>
            </div>
            <div class="page">
                <a href="traitementswitch.php?switch=organisateur" >Me connecter en tant que organisateur</a>
                <a href="traitementswitch.php?switch=participant" >Me connecter en tant que participant</a>
            </div>
            <div class="image">
                <p class="blanc"> Bonjour chèrs internautes ! Voici les dernières news du site :<br />
                <table image="2"> <tr> <td> <marquee> <a href="page2.php"> Ce soir le Cabaret Le Moulin Rouge [..]</a> <a href="page3.php"> Au cercle d'or, spectacle exceptionnel [..]</a> </marquee> </trd> </tr> </table> <!-- ici dynamique les dernières news s'affichent ici --> 
                </p>
            </div>
        </article>
        <?php include("aside.php"); ?>
    </section>
    <?php
} else {
    ?>
    <section>
        <article>
            <div class="titreArticle">
                <h2><span> Acceuil</span></h2>
            </div>
            <div class="page">

                <?php
                $result = $bdd->query('SELECT * FROM  compte WHERE 1');
                while ($data = $result->fetch()) {
                    echo $data['nomDeCompte'];
                }
                $result->closeCursor();
                ?>
            </div>
        </article>
        <?php include("aside.php"); ?>
    </section>
    <?php
}
?>   









