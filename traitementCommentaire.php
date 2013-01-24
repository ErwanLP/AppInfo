<?php
$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
$idEvt=$_POST['id_event'];
$idPart=$_POST['id_participant'];
$note=$_POST['note'];
$contenu=$_POST['commentaire'];
$havePost=false;
$result5=$bdd->query('SELECT * FROM commentairesevent,event,compte WHERE event.ID='.$idEvt.' AND event.ID=commentairesevent.id_event AND commentairesevent.id_participant='.$idPart);
while($donnees4=$result5->fetch()){
    $havePost=true;
}$result5->closeCursor();
if (isset($_POST['commentaire']) && $havePost==false){
  
    $note=null;
    if(isset($_POST['note'])){
        $note=$_POST['note'];
    }
    str_replace("'", "\'", $contenu);
    $bdd->query("INSERT INTO commentairesevent(id_participant,id_event,note,contenu) VALUES('".$idPart."','".$idEvt."','".$note."','".$contenu."')");
    header('Location:eventDetaille.php?ID='.$idEvt);
}else{
    echo 'Vous ne pouvez poster de commentaire vide';
}

?>
