<?php
session_start();
$titre = 'Présenttion';
include('start.php');
include('bddForum.php');
?>
<?php /* include("head.php"); */ ?>
<body>


    <?php
    /* empty
     * header('Location:http://une.url.fr');
     */
    include("header.php");

    include("nav.php");
    ?>

    <section>
        <aside class ="new">
            <div class ="eventNew">
                <img class ="photonew" src ="img/new.jpg"/>

            </div>
        </aside>

        <aside class ="navg">
            <?php include ("arbre.php"); ?>
        </aside>
        <a href="ajouterSujet.php"><img class="boutonNewTopic" src="includes/images/boutonNewTopic.png" alt="ajouter un sujet" title="noveauTopic"/></a>
        <br/>
        <table class="pposition">
            <tr>
                <th colspan="4" class="presentation">Presentation</th>
            </tr>
            <tr>
                <th class="topic">topic</th>
                <th class="auteur">Auteur</th>
                <th class="dateDecreation">date de creation</th>
                <th class="dernierMessage">Dernier message</th>
            </tr>
            <tr>
                <td class="contenuMessage"><a href="nouveauCommentaire.php">je veux angelina jolie a la soiree</a></td>
                <td class="auteur">Mohamed</td>
                <td class="dateDecreation">12/12/12</td>
                <td>on ne vous aime pas</td>
            </tr>
        </table>
    </section>       
    <?php include('footer.php'); ?>
</body>
</html>