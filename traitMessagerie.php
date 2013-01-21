<?php

session_start();
$date = date("Y-m-d");
$message = $_POST['message'];
$idExp = $_SESSION['ID'];
$typeExp = $_SESSION['SWITCH'];
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');

if (isset($_POST['pseudoAutre'])) {
    $pseudoDes = $_POST['pseudoAutre'];
    $pseudoDes=str_replace(' ','',$pseudoDes);


}else{
    
    
    
    
    
}

    $sql = 'SELECT pseudo FROM ' . $typeExp . ' WHERE ID =  "' . $idExp . '"';
    echo "<br/>".$sql;
    $result = $bdd->query($sql);
    while ($data = $result->fetch()) {
        $pseudoExp = $data['pseudo'];
         $pseudoExp=str_replace(' ','',$pseudoExp);
    }$result->closeCursor();

$sql = 'INSERT INTO messagerie (ID, message, date, pseudo_exp, pseudo_des) VALUES (NULL, "'.$message.'","'.$date.'","'.$pseudoExp.'","'.$pseudoDes.'")';
$bdd->query($sql);
echo "<br/>".$sql;

if (isset($_GET['pseudoAutre'])) {
    
    
 


}else{
    
    header('Location:messagerie.php');
    
    
    
}




?>




















<?php

/* $result = $bdd->query('(SELECT ID FROM organisateur WHERE organisateur.pseudo =  "' . $pseudoAutre . '" ) UNION ( SELECT ID FROM participant WHERE participant.pseudo =  "' . $pseudoAutre . '" )');
  echo '(SELECT ID FROM organisateur WHERE organisateur.pseudo =  "' . $pseudoAutre . '" ) UNION ( SELECT ID FROM participant WHERE participant.pseudo =  "' . $pseudoAutre . '" )';
  $result = $bdd->query('SELECT ID FROM organisateur WHERE organisateur.pseudo =  "' . $pseudoAutre . '" ');
  echo 'SELECT ID FROM organisateur WHERE organisateur.pseudo =  "' . $pseudoAutre . '" ';
  echo "<br/>";
  echo is_array($result);
  echo "<br/>";
  /*if(!empty($result)){

  if (empty($result)) {
  echo "on ne trouve pas un profil organisateur";
  $result2 = $bdd->query('SELECT ID FROM participant WHERE participant.pseudo =  "' . $pseudoAutre . '"');
  if(empty($result2)){
  echo "on ne trouve pas de profil participant";
  echo "pseudo non trouvé";
  header('Location:messagerie.php');
  }else{
  echo "on trouve un profil participant";
  while ($data2 = $result2->fetch()) {
  $idAutre = $data2['ID'];
  }$result2->closeCursor();
  $typeAutre = "participant";
  }
  } else {
  echo "on trouve un profil organisateur";
  while ($data = $result->fetch()) {
  $idAutre = $data['ID'];
  }$result->closeCursor();
  $typeAutre = "organisateur";
  }
  }else{

  } */
?>
