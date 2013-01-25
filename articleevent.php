<div class ="evenement"><br/>


    <div class="color">

    </div>
    <div class ="tofevent">

        
        <a href="eventDetaille.php?ID=<?php echo $data['ID'];?>"><img class = "imageflottante" alt="Photo de évenement" src= "<?php echo $data["photo"] ?>" height="250" width="200"/></a>
        
    </div>
<!-- <img class = "imageflottante" alt="Photo de évenement" src= "imgUser/gad_elmaleh.jpeg"/> -->
    <div class ="texteEvent">
        <a href="eventDetaille.php?ID=<?php echo $data['ID'];?>"><p class="titreEventArticle"><?php echo $data['nom']; ?></p></a>
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
        <?php if($data['nbVotes']!=0){
            ?><strong>Note des participants : </strong><img src="<?php 
            $notas=$data['note']/$data['nbVotes'];
        if($notas<=0.5){
            echo 'img/etoile0.png';
        }
        if($notas>0.5 &&$notas<=1.5){
            echo 'img/etoile1.png';
        }
        if($notas>1.5 &&$notas<=2.5){
            echo 'img/etoile2.png';
        }
        if($notas>2.5 &&$notas<=3.5){
            echo 'img/etoile3.png';
        }
        if($notas>3.5 &&$notas<=4.5){
            echo 'img/etoile4.png';
        }
        if($notas>4.5){
            echo 'img/etoile5.png';
        }
        
        ?>"  alt="Note" />(<?php echo $notas; ?> sur 5)  pour <?php echo $data['nbVotes']; ?> vote(s).<br/><?php
            }else{
            echo 'Aucune note pour le moment';
        }
        ?></div>
        
    </div>

</div>
