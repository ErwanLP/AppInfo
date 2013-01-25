<?php
session_start();
include('BDD.php');

$erreurCommentaire = 'NULL';
$erreurTitre = 'NULL';


//on recupère les variables
$i = 0; //variable qui compte le nombre d'erreur
$date_creation = date("Y-m-d H:i:s");
$commentaire = ($_POST['commentaire']);
$nom = ($_POST['titre']);
$idSouscategorie = $_POST['idSouscategorie'];
echo $idSouscategorie;
$idPseudo = $_SESSION['ID'];
//vérification du titre du sujet et du commentaire
            if (strlen($nom) < 3) {
                echo'erreurTitre="votre titre est trop court"';
                $i++;
            } 
            else if (strlen($_POST['commentaire']) < 4 && strlen($_POST['commentaire']) > 300) {
                echo'$erreurCommentaire="votre commentaire est soit trop long, soit trop court"';
                $i++;
            }
            else if ($i == 0 AND $_SESSION['SWITCH']== "organisateur") {
  $req = $bdd->query('INSERT INTO topicforum (nom,commentaire,date_creation,id_organisateur,id_participant,id_souscategorie)
  VALUES ("'.$nom.'","'.$commentaire.'","'.$date_creation.'","'.$idPseudo.'",0,"'.$idSouscategorie.'")');

     echo "votre commentaire a bien été pris en compte";
                
            }
              else if ($i==0 AND $_SESSION['SWITCH']== "participant") {
  $req= $bdd->query('INSERT INTO topicforum (nom,commentaire,date_creation,id_organisateur,id_participant,id_souscategorie)
  VALUES ("'.$nom.'","'.$commentaire.'","'.$date_creation.'",0,"'.$idPseudo.'","'.$idSouscategorie.'")');

     echo "votre commentaire a bien été pris en compte";               
              }
?>
<?php 
  $req=$bdd->query('SELECT souscategorieforum.nom FROM topicforum,souscategorieforum WHERE souscategorieforum.ID=topicforum.id_sousCategorie
      AND topicforum.id_sousCategorie='.$idSouscategorie);
  
  while($donnees=$req->fetch()) {
      $nomCat=$donnees['nom'];
  }
  $req-> CloseCursor();
  header('Location:'.$nomCat.'.php');
  exit();
?>
