<?php
$titre = 'index du forum';
include('start.php');
include('bddForum.php');
?>
<body>
    <aside class ="new">
        <div class ="eventNew">
            <img class ="photonew" src ="../img/new.jpg"/>

        </div>
    </aside>
<br/>
    <aside class ="navg">
        <?php include ('arbreForum.php'); ?>
    </aside>
<br/>

   
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

    
    <?php include('../footer.php');?>
</body>
</html>
