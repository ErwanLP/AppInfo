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


<?php
if (!isset($_POST['titre']) && empty($_POST['titre'])) {
  ?>

        <div>
          <form method="post" action="ajouterSujet.php">
            <table>
                <caption class="caption">Veillez ajouter un sujet</caption>
                <tr>
                    <th class="titreSujet" style="width:10px;">titre sujet</th>
                    <td>
                <input type="text" name="titre" size="50" maxlength="500" style="height:30px;" required/>
                    </td>
                    
                </tr>
                <tr>
                    <th class="commentaire" style="width:10px;">commentaire</th>
                    <td><textarea name="commentaire" id="commentaire" rows="20" cols="100"></textarea></td>
                    
                </tr>
            </table>
            <input type="submit" value="valider">
          </form>
        </div>
<?php
    }
    else
    {
        $erreurCommentaire='NULL';
        $erreurTitre='NULL';
     

 //on recupère les variables
$i=0; //variable qui compte le nombre d'erreur
$date_creation= date("Y-m-d H:i:s");
$commentaire=($_POST['commentaire']);
$nom=($_POST['titre']);

//vérification du titre du sujet et du commentaire
if (strlen($nom) < 3) {
    echo'erreurTitre="votre titre est très court"';   
 $i++;
}
else if (strlen($_POST['commentaire'])<4 && strlen($_POST['commentaire'])>300) {
    echo'$erreurCommentaire="votre commentaire est soit très long,soit très court"';
    $i++;
}
else if ($i==0) {
    
 $req=$bdd->prepare('INSERT INTO topic (nom,commentaire,date_creation) 
     VALUES (:nom,:commentaire,:date_creation)');
 $req->execute(array(
     'nom'=>$nom,
     'commentaire'=>$commentaire,
     'date_creation'=>$date_creation
  ));
   
    echo'votre commentaire a bien été pris en compte';
}
    }
?>
 <?php include('footer.php');?>  
</body>
</html>