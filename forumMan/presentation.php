<?php
$titre='presentation';
include('start.php');
include('bddForum.php');
?>
<body>
 <a href="ajouterSujet.php"><img class="boutonNewTopic" src="includes/images/boutonNewTopic.png" alt="ajouter un sujet" title="noveauTopic"/></a>
 <br/>
    <table>
        <tr>
            <th colspan="4" class="presentation">Presentation</th>
        </tr>
        <tr>
           <th class="topic">topic</th>
           <th class="auteur">Auteur</th>
           <th class="dateDecreation">date de creation</th>
           <th class="dernierMessage">Dernier message</th>
        </tr>
        <tr>
            <td class="contenuMessage"><a href="nouveauCommentaire.php">je veux angelina jolie a la soiree</a></td>
            <td class="auteur">Mohamed</td>
            <td class="dateDecreation">12/12/12</td>
            <td>on ne vous aime pas</td>
        </tr>
</table>
        
<?php include('../footer.php');?>
</body>
</html>