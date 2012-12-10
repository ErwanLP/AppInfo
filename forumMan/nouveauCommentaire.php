<?php
$titre='nouveauCommentaire';
include('start.php');
include('bddForum.php');
?>
<body>
<?php
if (!isset($_POST['commentaire']) || empty($_POST['commentaire'])) {
 ?>
    <table>
        <tr>
            <th class="sujet">je veux angelina jolie</th>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width:10px;" class="photo">photo</td>
            <td class="commentaireEtdate">commentaire</td>
        </tr>
    </table>
    <div>
        <form method="post" action="nouveauCommentaire.php">
         <p>
            
            <label for="message">soyez polie en ecrivant votre commentaire</label> : 
            <br/>
            <textarea  name="message" id="message" rows="10" cols="30" required>
            </textarea>
            <br/>
            <input type="submit" value="valider">
         </p>
        </form>
    <br/>
    </div>
 <?php   
}
else {
   

?>
 Revenir a la <a href="index.php">page d'accueil</a>
<?php
if (strlen($_POST['message'])<2) {
    echo'$erreurCommentaire="votre commentaire est très court"';
   // $i++;
}
//if ($i==0) {
    //$i=0;
    $erreurCommentaire='NULL';
    $date_creation=date("Y-m-d H:i:s");
    $message=$_POST['message'];
    $req=$bdd->prepare('INSERT INTO forum_message (message,date_creation)
        VALUES (:message,:date_creation)');
    $req->execute(array(
        'message'=>$message,
        'date_creation'=>$date_creation
    ));
echo'votre message a bien été pris en compte';
   
//}
}
?>
 <?php include('footer.php');?>
</body>
</html>

