<div class="nouveauCommentaire">
    <form method="post" action="nouveauCommentaire2.php" >
        <p>
            <label for="message">Inscrivez votre commentaire ci-dessous : </label><br/><br/>
            <textarea name="message" id="message" rows="10" cols="30" required></textarea>
            <?php $id_topic=$_GET['idTopic'];
                  $pseudo=$_GET['pseudo'];
            echo $pseudo;      
            echo $id_topic; ?>
            <input name="id_topic" id="id_topic" type="hidden" value="<?php echo $id_topic;?>"/>
            <select name="pseudo" id="pseudo" hidden>
                                        <option value="<?php echo $pseudo; ?>"> </option>
                                    </select>
            <br/>
            <input type="reset" value="Effacer"> <input type="submit" value="valider">
            
        </p>
    </form>
</div>
