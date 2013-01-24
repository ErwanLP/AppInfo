<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<form method="post" action="traitement.php">
    <select name="motif" id="motif">
        <option value="0">Motif</option>
        <option value="1">Injurieux</option>
        <option value="2">Raciste</option>
        <option value="3">Homophobe</option>
        <option value="4">Flood</option>
    </select>    
    <input type="hidden" value="IDsignaleur" />
    <input type="hidden" value="IDmessage" />
    <input type="submit" value="Signaler" />
</form>
