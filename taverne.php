<?php
session_start();
$titre = 'taverne';
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
    <table>
        <tr>
            <th colspan="4">Taverne</th>
        </tr>
        <tr>
           <th>topic</th>
           <th>Auteur</th>
           <th>date de creation</th>
           <th>Dernier message</th>
        </tr>
        <tr>
            <td><a href="nouveauCommentaire.php">je veux angelina jolie a la soiree</a></td>
            <td>Mohamed</td>
            <td>12/12/12</td>
            <td>on ne vous aime pas</td>
        </tr>
</table>
        </section>       
<?php include('footer.php');?>
</body>
</html>