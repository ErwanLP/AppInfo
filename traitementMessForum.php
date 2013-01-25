<?php
session_start();
include('BDD.php');
$i = 0;
$erreurCommentaire = 'NULL';
$date_creation = date("Y-m-d H:i:s");
$titreTopic=$_POST['titreTopic'];
$message = $_POST['message'];
$id_topic=$_POST['id_topic'];
$id_pseudo=$_SESSION['ID'];
  
if (strlen($_POST['message']) < 2) {
                $erreurCommentaire = "Votre commentaire est trop court!";
 ?>
                <br/>
                <br/>
 <?php
    echo'Votre commentaire est trop court!';
    $i++;
  } else if ($i == 0 AND $_SESSION['SWITCH']== "organisateur") {
    
$req = $bdd->query('INSERT INTO forummessage (date_creation,message,id_participant,id_organisateur,id_topic)
VALUES ("'.$date_creation.'","'.$message.'",0,"'.$id_pseudo.'","'.$id_topic.'")');

     echo "votre commentaire a bien été pris en compte";
  }    

   else if ($i==0 AND $_SESSION['SWITCH']=="participant") {
      $req = $bdd->query('INSERT INTO forummessage (date_creation,message,id_participant,id_organisateur,id_topic)
VALUES ("'.$date_creation.'","'.$message.'","'.$id_pseudo.'",0,"'.$id_topic.'")'); 
      
      echo "votre commentaire a bien été pris en compte";
   
   }
   header('Location:commentaireForum.php?idTopic='.$id_topic.'&titreTopic='.$titreTopic);
   exit();
   ?>
   

