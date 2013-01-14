<?php
session_start();
$titre = 'organisateur';
include('start.php');
include('bddForum.php');
?>
<?php /* include("head.php"); */ ?>
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
    <table class="organisateur" style="position: absolute;
           top:500px;
           margin-left:400px;">
        <tr>
            <th>titre des sujets</th>
            <th>createur</th>
            <th>date de creation</th>
            <th>dernier message</th>

        </tr>
        <tr>
            <td><a href="nouveauCommentaire.php">bar</a></td>
            <td>Bolzastreet</td>
            <td>12/12/12</td>
            <td>la vie est un jeu</td>
        </tr>
    </table>
</section>
<?php include('footer.php'); ?>
</body>
</html>