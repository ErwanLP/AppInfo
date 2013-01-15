<?php
session_start();
$titre = 'Event';
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
        <table class="pposition">
            <tr>
                <th>titre des sujets</th>
                <th>createur</th>
                <th>date de creation</th>
                <th>dernier message</th>

            </tr>
            <tr>
                <td><a href="nouveauCommentaire.php">bar</a></td>
                <td>erwan</td>
                <td>12/12/12</td>
                <td>j'aime le rugby</td>
            </tr>
        </table>
    </section>
    <?php include('footer.php'); ?>
</body>
</html>