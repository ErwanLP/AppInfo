<?php
$titre = 'index du forum';
include('start.php');
include('bddForum.php');
?>
<body>



    <table>
        <tr>
            <th class="categorie">Categorie</th>
        </tr>
        <tr>
            <td class="discutiongenerale"><a href="discutiongenerale.php">Discution generale</a></td>
        </tr>
        <tr>
            <td class="event">    <a href="organisation.php">Event</a></td>
        </tr> 
        <tr>
        <td class="organisation">    <a href="event.php">Organisation</a></td>
        </tr>
        <tr>    
            <td class="aideEtSujet"><a href="aideetsupport.php">Aide et Support</a></td>
        </tr>          


    </table>
    <?php
    // put your code here
    ?>
    <?php include('footer.php');?>
</body>
</html>
