<?php

if(isset($_POST['pseaudoAutre'])){
     $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
    
    $pseaudoAutre = $_POST['pseaudoAutre'];
    
    $result = $bdd->query('SELECT  id FROM  participant,organisateur WHERE (organisateur.pseaudo =  "' . $pseaudoAutre . '" OR organisateur.pseaudo =  "' . $pseaudoAutre . '"');
    echo 'SELECT  id FROM  participant,organisateur WHERE (organisateur.pseaudo =  "' . $pseaudoAutre . '" OR organisateur.pseaudo =  "' . $pseaudoAutre . '"';
    
    
    
}

    
?>




         <form action="traitMessagerie.php" method="post">
                     Nouveau message :<input type="text" name="message" class="message">
                    <input type="hidden" name="idAutre" value="<?php echo $idAutre ?>">
                    <input type="submit" value="Submit">
                </form>
            <?php //} else { ?>
                <form action="traitMessagerie.php">
                     Destinataire : 
                    <input type="text" name="pseusoAutre" value=""><br/>
                    Nouveau message :
                    <input type="text" name="message" class="message">
                    
                    <input type="submit" value="Submit">
                </form>