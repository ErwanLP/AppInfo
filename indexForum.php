<?php
session_start();
$titre = 'index du forum';
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

    <?php /*if ($_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
        */?>
       
            <table class="pposition">
                <tr>
                    <th class="categorie">Categorie</th>
                </tr>
                <tr>
                    <td class="discutionGenerale"><a href="discutiongenerale.php">Discution generale</a></td>
                </tr>
                <tr>
                    <td class="event">    <a href="eventForum.php">Event</a></td>
                </tr> 
                <tr>
                    <td class="organisateur">    <a href="organisateur.php">Organisateur</a></td>
                </tr>
                <tr>    
                    <td class="aideEtSujet"><a href="aideEtsupport.php">Aide et Support</a></td>
                </tr>          


            </table>
        
        </section>     
        <?php include("footer.php");
        ?>


</body>
</html>
