<?php
session_start();
$titre = 'Event';
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
            <th>titre des sujets</th>
            <th>cr&eacute;ateur</th>
            <th>date de cr&eacute;ation</th>
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
