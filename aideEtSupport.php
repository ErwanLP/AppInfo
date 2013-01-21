<?php
session_start();
$titre = 'Aide et Support';
include('start.php');

include('BDD.php');

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
</section>
<?php include('footer.php'); ?>
