<?php
$titre='nouveau Commentaire';
include('start.php');
include('bddForum.php');
?>
<body>
<?php
$tab_info_commentaire = array();
$var_tab_info_array = 0;
$req=$bdd->query('SELECT * FROM forum_message ORDER BY id DESC');
while ($donnees=$req->fetch()) {
$tab_info_commentaire[$var_tab_info_array][0]=$donnees["message"];
$tab_info_commentaire[$var_tab_info_array][1]=$donnees["date_creation"];
$var_tab_info_array++;
}
?>

<?php
if (!isset($_POST['message']) || empty($_POST['message'])) {
 ?>
    <table>
        <tr>
            <th class="sujet">je veux angelina jolie</th>
        </tr>
    </table>
    <table>
         <?php for($a=0;$a<count($tab_info_commentaire);$a++) {
         ?>    
         
        <tr>
            <td style="width:10px;" class="photo">photo</td>
            <td class="commentaireEtdate"><?php echo $tab_info_commentaire[$a][0];?><br/> posté à <?php echo $tab_info_commentaire[$a][1];?></td>
        </tr>
        <?php
        }?>
    </table>
    <div>
        <form method="post" action="nouveauCommentaire.php" >
         <p>
            
            <label for="message">soyez polie en écrivant votre commentaire</label> : 
            <br/>
            <textarea  name="message" id="message" rows="10" cols="30" required></textarea>
            
            <br/>
            <input type="submit" value="valider">
         </p>
        </form>
    <br/>
    </div>
 <?php   
}
else {
    $i=0;
    $erreurCommentaire='NULL';
    $date_creation=date("Y-m-d H:i:s");
    $message=$_POST['message'];

?>
 Revenir a la <a href="index.php">page d'accueil</a>
 <br/>
<?php
if (strlen($_POST['message'])<2) {
    echo'$erreurCommentaire="votre commentaire est très court"';
    $i++;
}
else if ($i==0) {

   $req = $bdd->prepare('INSERT INTO forum_message (date_creation,message)
        VALUES (:date_creation,:message)');
   $req->execute(array(
        'date_creation'=>$date_creation,
        'message'=>$message));
        
    echo"votre commentaire a bien été pris en compte";
   
}
}
?>
</body>
</html>

