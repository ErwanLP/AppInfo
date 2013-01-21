<div class ="evenement"><br/>


    <div class="color">

    </div>
    <div class ="tofevent">

        <?php
        echo '<img class = "imageflottante" alt="Photo de évenement" src= "' . $data["photo"] . '" height="250" width="200"/>'
        ?>
    </div>
<!-- <img class = "imageflottante" alt="Photo de évenement" src= "imgUser/gad_elmaleh.jpeg"/> -->
    <div class ="texteEvent">
        <h1><?php echo $data['nom']; ?></h1>
        <strong>Adresse: </strong><?php echo $data['lieu']; ?><span><?php echo $data['lieu']; ?></span><br/>
        
        <?php 
        if($data['dateFin']=="0000-00-00"){
            echo '<strong>L\'&eacute;v&egrave;nement &agrave; lieu le :</strong>';
            echo $data['dateDebut'].'</br><strong>A partir de :</strong>'.$data['heureDebut'].'<strong> jusqu\'&agrave; :</strong>'.$data['heureFin'].'</br>';
        }else{
            echo '<strong>L\'&eacute;v&egrave;nement &agrave; lieu du :</strong>';
            echo $data['dateDebut'].'<strong> au </strong>'.$data['dateFin'].'</br><strong>A partir de :</strong>'.$data['heureDebut'].'<strong> jusqu\'&agrave; :</strong>'.$data['heureFin'].'</br>';
        }?>
        <strong>Prix: </strong><?php echo $data['prix']; ?> &euro; <br/>
        <strong>Description: </strong> <?php echo $data['description']; ?><br/>
        <strong>Note: </strong><img src="<?php 
        if($data['note']<1){
            echo 'img/etoile0.png';
        }
        if($data['note']<=0.5){
            echo 'img/etoile0.png';
        }
        if($data['note']>0.5 &&$data['note']<=1.5){
            echo 'img/etoile1.png';
        }
        if($data['note']>1.5 &&$data['note']<=2.5){
            echo 'img/etoile2.png';
        }
        if($data['note']>2.5 &&$data['note']<=3.5){
            echo 'img/etoile3.png';
        }
        if($data['note']>3.5 &&$data['note']<=4.5){
            echo 'img/etoile4.png';
        }
        if($data['note']>4.5){
            echo 'img/etoile5.png';
        }
        
        ?>" class="etoile" alt="Note" /><p id="note">(<?php echo $data['note']; ?> sur 5)</p><br/>
        <p id="bouton1"><a href="eventDetaille.php?ID=<?php echo $data['ID'];?>">Voir Plus de D&eacute;tails</a></p>
        <p id="bouton2">Voir Commentaires</p>
        <p id="bouton3">R&eacute;server</p>
    </div>

</div>
