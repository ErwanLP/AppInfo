<?php
session_start();
$titre = 'souhait';
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
<a href="ajouterSujet.php"><img src="includes/images/boutonNewTopic.png" class="boutonNewTopic" alt="ajouter un sujet" title="noveauTopic" /></a>
<br/>

<?php
$tab_info_souhait = array();
$var_tab_info_array = 0;
$req=$bdd->query('SELECT * FROM topicforum ORDER BY id DESC');
while ($donnees=$req->fetch()) {
$tab_info_souhait[$var_tab_info_array][0]=$donnees["nom"];
$tab_info_souhait[$var_tab_info_array][1]=$donnees["commentaire"];

$tab_info_souhait[$var_tab_info_array][2]=$donnees["date_creation"];
$var_tab_info_array++;
}
?> 
<table class="pposition">
        <tr>
            <th colspan="4" class="souhait">Souhait</th>
        </tr>
        <tr>
           <td class="sujet">sujet</td>
           <td class="dernierMessage">Dernier message</td>
           <td class="auteur">Auteur</td>
           <td class="dateDecreation">date de création</td>
           
        </tr>
     <?php for($a=0;$a<count($tab_info_souhait);$a++){
     
     ?>
        <tr>
            <td class="contenuMessage"><a href="nouveauCommentaire.php"><?php echo $tab_info_souhait[$a][0]; ?></a></td>
            <td class="message"><?php echo $tab_info_souhait[$a][1]; ?></td>
            <td class="auteur">Mohamed</td>
            <td class="date"><?php echo $tab_info_souhait[$a][2]; ?></td>
            
        </tr>
        <?php }?>
        
</table>

    <?php include('footer.php');?>
 </body>
</html>