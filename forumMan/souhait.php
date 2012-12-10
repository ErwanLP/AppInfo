<?php
$titre='souhait';
include('start.php');
include('bddForum.php');
?>
<body>
<a href="ajouterSujet.php"><img src="includes/images/boutonNewTopic.png" class="boutonNewTopic" alt="ajouter un sujet" title="noveauTopic" /></a>
<br/>

<table>
        <tr>
            <th colspan="4" class="souhait">Souhait</th>
        </tr>
        <tr>
           <th class="sujet">sujet</th>
           <th class="auteur">Auteur</th>
           <th class="dateDecreation">date de creation</th>
           <th class="dernierMessage">Dernier message</th>
        </tr>
        <?php

//$req = $bdd->prepare('SELECT * FROM topic ORDER BY id DESC');
//$req = execute(array($_POST['commentaire'],$_POST['titre']));
 $req=$bdd->query('SELECT * FROM topic ORDER BY id DESC');
while ($donnees=$req->fetch()) {
//echo $donnees['commentaire'];

?>
        <tr>
            <td class="contenuMessage"><a href="nouveauCommentaire.php">je veux angelina jolie</a></td>
            <td class="auteur">Mohamed</td>
            <td class="date"><?php echo $donnees['date_creation']?></td>
            <td class="message"><?php $donnees['commentaire'];?></td>
        </tr>
</table>

<?php
}
$req->closeCursor();
   ?> 
<?php include('footer.php');?>
 </body>
</html>