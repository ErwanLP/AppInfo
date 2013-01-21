
<?php
session_start();
$titre = 'événement';
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
    <table class="pposition">
        <tr>
            <th class="discussionGenerale1"> Evénement</th>
        </tr>
        <tr>
            <td class="souhait"><a href="spectacleForum.php">Spectacle</a></td>
        </tr>
        <tr>
            <td class="taverne"><a href="expositionForum.php">Exposition</a></td>
        </tr>
        <tr>
            <td class="presentation"><a href="restaurationForum.php">Restauration</a></td>
        </tr>
         <tr>
            <td class="presentation"><a href="soireeForum.php">Soirée</a></td>
        </tr>
         <tr>
            <td class="presentation"><a href="barForum.php">Bar</a></td>
        </tr>
         <tr>
            <td class="presentation"><a href="concertForum.php">Concert</a></td>
        </tr>
    </table>

    <?php include('footer.php'); ?>
