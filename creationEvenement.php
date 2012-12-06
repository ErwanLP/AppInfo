<!DOCTYPE html>

<?php if (true) { ?>


    <html>
        <?php include("head.php"); ?>
        <body>

            <?php session_start(); ?>


            <?php include("header.php"); ?>

            <?php include("nav.php"); ?>

            <section>
                <aside class ="new">
                    <div class ="eventNew">

                    </div>
                </aside>
                <aside class ="navg">
                    <?php include ("arbre.php"); ?>
                </aside>
                <article>
                    <div class="titreacticle">
                        <h2><span> Cr&eacute;ation &Eacute;v&egrave;nement :</span></h2>
                    </div>
                    <div class="page">

                        <form method="post" action="traitementEvenement.php">

                            <fieldset>
                                <legend>Information Evenement : </legend>
                                <label for ="nomEvent">Nom de L'evnement:</label>
                                <input type="text" name="nomEvent" id="nomEvent"  size="30" maxlength="10" autofocus required /><br/>
                                <label for ="lieuEvent">Lieu de l'evenement:</label>
                                <input type="text" name="lieuEvent" id="lieuEvent"  size="30" maxlength="10" required /><br/>
                                <label for="description">Description Event:</label><br />
                                <textarea name="description" id="description" >Comment va se passer l'Evenement...</textarea><br/>
                                <label for="dateEvent">Date de l'evenement :</label>
                                <input type="date" name="dateEvent" id="dateEvent" required /><br/>
                                <label for="typeEvent">Dans type d 'Event c'est ?</label><br />
                                <select name="typeEvent" id="typeEvent">
                                    <option value="NULL">- - - - - - - - - -</option>
                                    <optgroup label="Soirée">
                                    </optgroup>
                                    <optgroup label="Bar">
                                    </optgroup>
                                    <optgroup label="Concert">
                                    </optgroup>
                                    <optgroup label="Restauration">
                                    </optgroup>
                                    <optgroup label="Spectacle">
                                        <option value="comedieMusicale">Comédie Musicale</option>
                                        <option value="theatre">Théatre</option>
                                        <option value="cafe">Café</option>
                                        <option value="cabaret">Cabaret</option>
                                        <option value="dance">Dance</option>
                                        <option value="sonEtLumiere">Son et lumière</option>
                                        <option value="opera">Opéra</option>
                                        <option value="oneManShow">One Man Show</option>
                                        <option value="spectacleDeRue">Spectacle de rue</option>
                                    </optgroup>
                                    <optgroup label="Autre">
                                        <option value="autre">Autre</option>
                                    </optgroup>
                                </select>
                            </fieldset>

                            <input type="submit" value="Envoyer" />
                        </form>

                    </div>
                </article>

            </section>

            <?php include("footer.php"); ?>


        </body>
    </html>

    <?php
} else {
    header('Location:index.php');
}
?>
