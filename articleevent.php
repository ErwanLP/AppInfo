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
        <strong>Prix: </strong>30€ <br/>
        <strong>Description: </strong> <?php echo $data['description']; ?><br/>
        <strong>Note: </strong><img src="img/etoile.png" class="etoile" alt="Note" /><p id="note">(<?php echo $data['note']; ?> sur 5)</p><br/>
        <p id="bouton1"><a href="eventDetaille.php?ID=<?php echo $data['ID'];?>">Voir Plus de Détails</a></p>
        <p id="bouton2">Voir Commentaires</p>
        <p id="bouton3">Réserver</p>
    </div>

</div>
