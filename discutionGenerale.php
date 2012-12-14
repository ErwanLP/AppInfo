
<?php
session_start();
$titre = 'Discussion Générale';
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
        <th class="discutionGenerale1">Discution generale</th>
    </tr>
    <tr>
        <td class="souhait"><a href="souhait.php">Souhait</a></td>
    </tr>
    <tr>
        <td class="taverne"><a href="taverne.php">Taverne</a></td>
    </tr>
    <tr>
        <td class="presentation"><a href="presentation.php">Presentation</a></td>
    </tr>
  </table>
       
    <?php include('footer.php');?>
</body>

</html>