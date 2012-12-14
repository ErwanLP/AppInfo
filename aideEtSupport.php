<?php
session_start();
$titre = 'Aide et Support';
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
    </section>
    <?php include('footer.php');?>
</body>
</html>