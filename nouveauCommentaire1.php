<div class="nouveauCommentaire">
    <form method="post" action="traitementMessForum.php" >
        <p>
            <label for="message">Inscrivez votre commentaire ci-dessous : </label><br/><br/>
            <textarea name="message" id="message" rows="10" cols="30" required></textarea>
            <?php $id_topic=$_GET['idTopic'];
                  $titreTopic=$_GET['titreTopic'];
            
            ?>
            <input name="id_topic" id="id_topic" type="hidden" value="<?php echo $id_topic;?>"/>
            <select name="titreTopic" id="titreTopic" hidden>
                                        <option value="<?php echo $titreTopic; ?>"> </option>
                                    </select>
            <br/>
            <input type="reset" value="Effacer"> <input type="submit" value="valider">
            
        </p>
    </form>
</div>
