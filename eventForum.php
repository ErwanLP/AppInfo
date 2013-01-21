
<?php
session_start();
$titre = 'événement';
include('start.php');
include('BDD.php');
?>
<?php /* include("head.php"); */ ?>
<?php
include("header.php");

include("nav.php");
?>

<section>
    <aside class ="new">
        <?php include('nouveauteEvenement.php'); ?>
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
